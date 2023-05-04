<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Brian2694\Toastr\Facades\Toastr;
use DataTables;
use App\Models\customer_info;
use App\Models\current_sales;
use App\Models\stock;
use App\Models\product_information;
use App\Models\measurement_subunit;
use App\Models\sales_ledger;
use App\Models\sales_entry;
use App\Models\sales_payment;
use Auth;
use Session;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customer = customer_info::get();
        $product = stock::leftjoin("product_informations",'product_informations.pdt_id','stocks.product_id')
        ->select("stocks.*",'product_informations.pdt_id','product_informations.pdt_name_en','product_informations.pdt_name_bn')
        ->get();
        return view('inventory.sales.create',compact('customer','product'));
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
        //
    }

    public function salesproductcart($id)
    {
        $session_id   = Session::getId();
        $checkproduct = stock::where('stocks.product_id',$id)
        ->leftjoin("product_informations","product_informations.pdt_id","stocks.product_id")
        ->select("stocks.*","product_informations.pdt_measurement")
        ->first();


        $checkaddproduct = current_sales::where('current_sales.session_id',$session_id)->where('current_sales.product_id',$id)->first();

        if ($checkaddproduct)
        {

            current_sales::where('product_id',$id)
            ->update([
                'product_quantity'=>$checkaddproduct->product_quantity+1
            ]);


        }
        else
        {

            current_sales::insert([
                'product_id'              => $id,
                'sub_unit_id'             => NULL,
                'product_quantity'        => '1',
                'product_purchase_price'  => $checkproduct->purchase_price_withcost,
                'product_sales_price'     => $checkproduct->sale_price,
                'product_discount_amount' => 0.00,
                'session_id'              => $session_id,
                'admin_id'                => Auth()->user()->id,
            ]);

        }
    }

    public function showsalesproductcart()
    {
        $session_id   = Session::getId();
        $data = current_sales::where('current_sales.session_id',$session_id)
        ->join('product_informations','product_informations.pdt_id','current_sales.product_id')
        ->select('current_sales.*','product_informations.pdt_name_en','product_informations.pdt_name_bn','product_informations.pdt_sale_price','product_informations.pdt_measurement','product_informations.pdt_id')
        ->get();

        return view('inventory.sales.showsalesproductcart',compact('data'));
    }

    public function qtyupdatesales(Request $request,$id)
    {
        $session_id   = Session::getId();
        $data = current_sales::where('current_sales.session_id',$session_id)
        ->where('current_sales.id',$id)
        ->update([

            'product_quantity' => $request->product_quantity

        ]);
    }

    public function salessubmeasurmentupdate(Request $request,$id)
    {
        $session_id   = Session::getId();
        $data = current_sales::where('current_sales.session_id',$session_id)
        ->where('current_sales.id',$id)
        ->update([

            'sub_unit_id' => $request->sub_unit_id,

        ]);
    }

    public function salepriceupdatesingle(Request $request,$id)
    {
        $session_id   = Session::getId();
        $data = current_sales::where('current_sales.session_id',$session_id)
        ->where('current_sales.id',$id)
        ->update([

            'product_sales_price' => $request->sale_price_per_unit

        ]);

        product_information::where('pdt_id',$request->product_id)->update([
            'pdt_sale_price'=>$request->sale_price_per_unit,
        ]);
    }

    public function product_discount_amount(Request $request,$id)
    {
        $session_id   = Session::getId();
        $data = current_sales::where('current_sales.session_id',$session_id)
        ->where('current_sales.id',$id)
        ->update([

            'product_discount_amount' => $request->product_discount_amount

        ]);
    }

    public function deletesalescartproduct($id)
    {
        $session_id   = Session::getId();
        $data = current_sales::where('current_sales.session_id',$session_id)
        ->where('current_sales.id',$id)
        ->delete();
    }

    public function salesOriginalMeasurement(Request $request,$id)
    {
        // return $id;
        $unit_data = measurement_subunit::where('id',$request->sub_unit_id)->first();

	    $result = (1 / $unit_data->sub_unit_data) * $request->product_quantity;

	    current_sales::where('id',$id)->update(['final_quantity'=>$result]);
    }

    public function salesledger(Request $request)
    {
        $session_id   = Session::getId();
            $data = current_sales::where('current_sales.session_id',$session_id)
            ->get();

            $invoice_no = IdGenerator::generate(['table' => 'sales_ledgers', 'field'=>'invoice_no','length' => 10, 'prefix' =>'SI-']);



            foreach ($data as $d) {
               sales_entry::insert([
                    'invoice_no'                 => $invoice_no,
                    'product_id'                 => $d->product_id,
                    'sub_unit_id'                => $d->sub_unit_id,
                    'product_quantity'           => $d->final_quantity,
                    'product_purchase_price'     => $d->product_purchase_price,
                    'product_sales_price'        => $d->product_sales_price,
                    'product_discount_amount'    => $d->product_discount_amount,
                    'entry_date'                 => date('Y-m-d'),
                    'admin_id'                   => Auth()->user()->id,
                    'branch_id'                  => Auth()->user()->branch,


                ]);

                $checkstockproduct =  stock::where("product_id",$d->product_id)->where("branch_id",Auth()->user()->branch)->first();
                $qtysum            =  stock::where("product_id",$d->product_id)->where("branch_id",Auth()->user()->branch)->sum("sales_qty");

                stock::where("product_id",$d->product_id)
                ->where("branch_id",Auth()->user()->branch)
                ->update([
                    "sales_qty" => $qtysum + $d->final_quantity
                ]);

            }



            $explode = explode('/',$request->invoice_date);
            $invoice_date = $explode[2].'-'.$explode[0].'-'.$explode[1];


            sales_ledger::insert([
                'invoice_no'       => $invoice_no,
                'invoice_date'     => $invoice_date,
                'customer_id'      => $request->customer_id,
                'total'            => $request->totalamount,
                'vat'              => $request->vat,
                'paid_amount'      => $request->paid,
                'final_discount'   => $request->discount,
                'transaction_type' => $request->transaction_type,
                'entry_date'       => date('Y-m-d'),
                'admin_id'         => Auth()->user()->id,
                'branch_id'        => Auth()->user()->branch,

            ]);


            sales_payment::insert([
                'invoice_no'       => $invoice_no,
                'entry_date'       => date('Y-m-d'),
                'customer_id'      => $request->customer_id,
                'payment_amount'   => $request->paid,
                'payment_type'     => $request->transaction_type,
                'note'             => "firstpayment",
                'admin_id'         => Auth()->user()->id,
                'branch_id'        => Auth()->user()->branch,


            ]);


            current_sales::where('session_id',$session_id)->delete();
            Session::regenerate();



            return response()->json($invoice_no);
    }

    public function sales_invoice($invoice_no)
    {
        $data = sales_ledger::where("sales_ledgers.invoice_no",$invoice_no)
        ->join("customer_infos",'customer_infos.customer_id','sales_ledgers.customer_id')
        ->join("users",'users.id','sales_ledgers.admin_id')
        ->select("sales_ledgers.*",'customer_infos.customer_name_en','customer_infos.customer_phone','customer_infos.customer_address','users.name')
        ->first();

        $product = sales_entry::where("sales_entries.invoice_no",$data->invoice_no)
        ->join("product_informations",'product_informations.pdt_id','sales_entries.product_id')
        ->select('sales_entries.*','product_informations.pdt_measurement')
        ->get();

        return view("inventory.sales.sales_invoice",compact('data','product'));
    }
}
