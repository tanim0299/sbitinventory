<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Brian2694\Toastr\Facades\Toastr;
use DataTables;
use Auth;
use App\Models\supplier_info;
use App\Models\product_information;
use App\Models\current_purchase;
use App\Models\purchase_entry;
use App\Models\purchase_ledger;
use App\Models\stock;
use App\Models\supplier_payment;
use App\Models\measurement_subunit;
use Session;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = purchase_ledger::leftjoin('supplier_infos','supplier_infos.supplier_id','purchase_ledgers.suplier_id')
                    ->select('purchase_ledgers.*','supplier_infos.supplier_name_en','supplier_infos.supplier_phone')
                    ->get();
            return Datatables::of($data)->addIndexColumn()
            ->addColumn('supplier_info',function($row){
                return $row->supplier_name_en.'<br>'.$row->supplier_phone;
            })
            ->addColumn('product_info',function($row){
                $product = purchase_entry::where('invoice_no',$row->invoice_no)
                ->leftjoin('product_informations','product_informations.pdt_id','purchase_entries.product_id')
                ->leftjoin('measurement_subunits','measurement_subunits.id','purchase_entries.sub_unit_id')
                ->select('purchase_entries.*','product_informations.pdt_name_en','measurement_subunits.sub_unit_name')
                ->get();

                $output = '';

                if($product)
                {
                    foreach($product as $p)
                    {
                        $totalcost = ($p->purchase_price + $p->per_unit_cost) - $p->discount_amount;

                        $subtotal = $p->product_quantity * $totalcost;

                        $output .=  '<b>'.$p->pdt_name_en.'</b> ('.$p->product_quantity.' '.$p->sub_unit_name.' X '.$totalcost.' tk) = '.$subtotal.' tk';
                        $output.= '<br>';
                    }
                }

                return $output;
            })
            ->addColumn('amount',function($row){
                $purchase_entry = purchase_entry::where('invoice_no',$row->invoice_no)->get();
                $supplier_payment = supplier_payment::where('invoice_no',$row->invoice_no)->sum('payment');
                $total = 0;
                if($purchase_entry)
                {
                    foreach($purchase_entry as $p)
                    {
                        $totalcost = ($p->purchase_price + $p->per_unit_cost) - $p->discount_amount;
                        $total = ($total+($p->product_quantity * $totalcost));
                    }
                }

                $grandtotal = $total - $row->discount;

                return 'Total : '.$total.' tk<br>
                        Discount: '.$row->discount.' tk<br>
                        Grand Total: '.$grandtotal.' tk<br>
                        <span class="badge bg-success">Paid : '.$supplier_payment.' tk</span><br>
                        <span class="badge bg-danger">Due : '.$grandtotal - $supplier_payment.' tk</span><br>';
            })
            ->addColumn('action', function($row){
                $btn = '<div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle btn-sm" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Actions
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a target="_blank" class="dropdown-item" href="'.url('invoicepurchase/'.$row->invoice_no).'"><i class="fa fa-eye"></i> Show Invoice</a>
                        <form action="'.route('purchase.destroy',$row->invoice_no).'" method="post">
                        '.csrf_field().'
                        '.method_field("DELETE").'
                        <button onclick="return Confirm()" type="submit" class="dropdown-item text-danger"><i class="fa fa-trash"></i> Delete</button>
                        </form>
                    </div>
                </div>';
                return $btn;
            })
            ->rawColumns(['action','supplier_info','product_info','amount'])
            ->make(true);


        }
        return view('inventory.purchase.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $supplier = supplier_info::get();
        $product = product_information::where('pdt_status',1)->get();
        return view('inventory.purchase.create',compact('supplier','product'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $chkq = purchase_entry::where('invoice_no',$id)->get();
        if($chkq)
        {
            foreach($chkq as $v)
            {
                $total_stock = stock::where('product_id',$v->product_id)->first();
                $updated_quantity = $total_stock->quantity - $v->product_quantity;
                // return $updated_quantity;
                stock::where('product_id',$v->product_id)->update([
                    'quantity'=> $updated_quantity,
                ]);
            }
        }
        purchase_ledger::where('invoice_no',$id)->delete();
        purchase_entry::where('invoice_no',$id)->delete();
        supplier_payment::where('invoice_no',$id)->delete();
        Toastr::success('Purchase Ledger Delete Successfully', 'Success');
        return redirect()->back();
    }

    public function getSupplierCompany($supplier_id)
    {
        // return $supplier_id;
        $supplier = supplier_info::where('supplier_id',$supplier_id)->first();

        return $supplier->supplier_company_name.' - '.$supplier->supplier_company_phone;
    }

    public function purchaseproductcart($id)
    {
        $session_id   = Session::getId();
        $checkproduct = product_information::where('pdt_id',$id)->first();


        $checkaddproduct = current_purchase::where('session_id',$session_id)->where('pdt_id',$id)->first();

        if ($checkaddproduct)
        {

            current_purchase::where('pdt_id',$id)
            ->update([
                'purchase_quantity'=>$checkaddproduct->purchase_quantity+1
            ]);


        }
        else
        {

            current_purchase::insert([
                'pdt_id'             => $id,
                'sub_unit_id'        => NULL,
                'purchase_quantity'  => '1',
                'purchase_price'     => $checkproduct->pdt_purchase_price,
                'discount_amount'    => 0.00,
                'per_unit_cost'      => 0.00,
                'sale_price_per_unit'=> $checkproduct->pdt_sale_price,
                'session_id'         => $session_id,
                'admin_id'           => Auth()->user()->id,
            ]);

        }
    }

    public function showpurchaseproductcart()
    {
        $session_id   = Session::getId();
        $data = current_purchase::where('current_purchases.session_id',$session_id)
        ->join('product_informations','product_informations.pdt_id','current_purchases.pdt_id')
        ->select('current_purchases.*','product_informations.pdt_name_en','product_informations.pdt_name_bn','product_informations.pdt_sale_price','product_informations.pdt_measurement')
        ->get();

        return view('inventory.purchase.showpurchaseproductcart',compact('data'));
    }

    public function qtyupdate(Request $request,$id)
    {
        $session_id   = Session::getId();
        $data = current_purchase::where('current_purchases.session_id',$session_id)
        ->where('current_purchases.id',$id)
        ->update([

            'purchase_quantity' => $request->purchase_quantity

        ]);
    }

    public function purchasepriceupdate(Request $request,$id)
    {
        $session_id   = Session::getId();
        $data = current_purchase::where('current_purchases.session_id',$session_id)
        ->where('current_purchases.id',$id)
        ->update([

            'purchase_price' => $request->purchase_price

        ]);

        product_information::where('pdt_id',$request->product_id)->update([
            'pdt_purchase_price'=>$request->purchase_price,
        ]);
    }

    public function purchasepricedicount(Request $request,$id)
    {
        $session_id   = Session::getId();
        $data = current_purchase::where('current_purchases.session_id',$session_id)
        ->where('current_purchases.id',$id)
        ->update([
            'discount_amount' => $request->discount_amount
        ]);
    }

    public function purchasecost(Request $request,$id)
    {
        $session_id   = Session::getId();
        $data = current_purchase::where('current_purchases.session_id',$session_id)
        ->where('current_purchases.id',$id)
        ->update([

            'per_unit_cost' => $request->purchasecost

        ]);
    }

    public function salepriceupdate(Request $request,$id)
    {
        $session_id   = Session::getId();
        $data = current_purchase::where('current_purchases.session_id',$session_id)
        ->where('current_purchases.id',$id)
        ->update([

            'sale_price_per_unit' => $request->sale_price_per_unit

        ]);

        product_information::where('pdt_id',$request->product_id)->update([
            'pdt_sale_price'=>$request->sale_price_per_unit,
        ]);
    }

    public function deletepurchasecartproduct($id)
    {
        $session_id   = Session::getId();
        $data = current_purchase::where('current_purchases.session_id',$session_id)
        ->where('current_purchases.id',$id)
        ->delete();
    }

    public function submeasurmentupdate(Request $request,$id)
    {
        $session_id   = Session::getId();
        $data = current_purchase::where('current_purchases.session_id',$session_id)
        ->where('current_purchases.id',$id)
        ->update([

            'sub_unit_id' => $request->sub_unit_id,

        ]);
    }

    public function purchaseledger(Request $request)
    {
        $session_id   = Session::getId();
        $data = current_purchase::where('current_purchases.session_id',$session_id)
        ->get();

        $invoice_no = IdGenerator::generate(['table' => 'purchase_ledgers', 'field'=>'invoice_no','length' => 10, 'prefix' =>'PI-']);

        foreach ($data as $d) {
            purchase_entry::insert([
                'invoice_no'        => $invoice_no,
                'product_id'        => $d->pdt_id,
                'sub_unit_id'       => $d->sub_unit_id,
                'product_quantity'  => $d->purchase_quantity,
                'purchase_price'    => $d->purchase_price,
                'per_unit_cost'     => $d->per_unit_cost,
                'discount_amount'   => $d->discount_amount,
                'admin_id'          => Auth()->user()->id,
                'branch_id'         => Auth()->user()->branch,
            ]);

            $checkstockproduct =  stock::where("product_id",$d->pdt_id)->where("branch_id",Auth()->user()->branch)->first();

            $qtysum =  stock::where("product_id",$d->pdt_id)->where("branch_id",Auth()->user()->branch)->sum("quantity");

            if ($checkstockproduct) {
                stock::where("product_id",$d->pdt_id)->where("branch_id",Auth()->user()->branch)->update([
                    'quantity'                =>  $qtysum+$d->final_quantity,
                    'purchase_price'          =>  $d->purchase_price,
                    'purchase_price_withcost' =>  ($d->purchase_price+$d->per_unit_cost),
                    'sale_price'              =>  $d->sale_price_per_unit,

                ]);
            }
            else{
                stock::insert([
                    'invoice_no'              =>  $invoice_no,
                    'product_id'              =>  $d->pdt_id,
                    'quantity'                =>  $d->final_quantity,
                    'purchase_price'          =>  $d->purchase_price-$d->discount_amount,
                    'purchase_price_withcost' =>  ($d->purchase_price+$d->per_unit_cost)-$d->discount_amount,
                    'sale_price'              =>  $d->sale_price_per_unit,
                    'branch_id'               =>  Auth()->user()->branch,
                ]);
            }
        }

        $explode = explode('/',$request->invoice_date);
        $invoice_date = $explode[2].'-'.$explode[0].'-'.$explode[1];


       purchase_ledger::insert([
            'invoice_no'       => $invoice_no,
            'voucher_no'       => $request->voucher_no,
            'voucher_date'     => $invoice_date,
            'invoice_date'     => $invoice_date,
            'suplier_id'       => $request->supplier_id,
            'total'            => $request->totalamount,
            'paid'             => $request->paid,
            'discount'         => $request->discount,
            'transaction_type' => $request->transaction_type,
            'entry_date'       => date('Y-m-d'),
            'admin_id'         => Auth()->user()->id,
            'branch_id'        => Auth()->user()->branch,


        ]);

        supplier_payment::insert([
            'invoice_no'       => $invoice_no,
            'payment_date'     => $invoice_date,
            'entry_date'       => date('Y-m-d'),
            'supplier_id'       => $request->supplier_id,
            'return_amount'    => "0.00",
            'payment'          => $request->paid,
            'payment_type'     => $request->transaction_type,
            'comment'          => "firstpayment",
            'admin_id'         => Auth()->user()->id,
            'branch_id'        => Auth()->user()->branch,


        ]);

        current_purchase::where('session_id',$session_id)->delete();
        Session::regenerate();



        return response()->json($invoice_no);
}

    public function invoice_purchase($invoice_id)
    {
        $purchase_ledger = purchase_ledger::where('invoice_no',$invoice_id)->first();
        $purchase_entry = purchase_entry::leftjoin('product_informations','product_informations.pdt_id','purchase_entries.product_id')
        ->leftjoin('measurement_subunits','measurement_subunits.id','purchase_entries.sub_unit_id')
        ->select('purchase_entries.*','product_informations.pdt_name_en','product_informations.pdt_name_bn','measurement_subunits.sub_unit_name')
        ->where('invoice_no',$invoice_id)
        ->get();
        $supplier = supplier_info::where('supplier_id',$purchase_ledger->suplier_id)->first();


        return view('inventory.purchase.purchase_ledger',compact('purchase_ledger','purchase_entry','supplier'));
    }

    public function retrive_purchase_ledger($id)
    {
        $chkq = purchase_entry::withTrashed()->where('invoice_no',$id)->get();
        if($chkq)
        {
            foreach($chkq as $v)
            {
                $total_stock = stock::where('product_id',$v->product_id)->first();
                $updated_quantity = $total_stock->quantity + $v->product_quantity;
                // return $updated_quantity;
                stock::where('product_id',$v->product_id)->update([
                    'quantity'=> $updated_quantity,
                ]);
            }
        }
        purchase_ledger::where('invoice_no',$id)->restore();
        purchase_entry::where('invoice_no',$id)->restore();
        supplier_payment::where('invoice_no',$id)->restore();
        Toastr::success('Purchase Ledger Retrive Successfully', 'Success');
        return redirect()->back();
    }

    public function deleteper_purchaseledger($id)
    {
        purchase_ledger::where('invoice_no',$id)->withTrashed()->forceDelete();
        purchase_entry::where('invoice_no',$id)->withTrashed()->forceDelete();
        supplier_payment::where('invoice_no',$id)->withTrashed()->forceDelete();
        Toastr::success('Purchase Ledger Permeanently Successfully', 'Success');
        return redirect()->back();
    }

    public function purcahseoriginalmeasurement(Request $request,$id)
    {
        // return $request->sub_unit_id;
        $unit_data = measurement_subunit::where('id',$request->sub_unit_id)->first();

	    $result = (1 / $unit_data->sub_unit_data) * $request->purchase_quantity;

	    current_purchase::where('id',$id)->update(['final_quantity'=>$result]);
    }

}
