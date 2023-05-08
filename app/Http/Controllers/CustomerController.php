<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\customer_info;
use App\Models\sales_payment;
use App\Models\sales_ledger;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use DataTables;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = customer_info::get();
            return Datatables::of($data)->addIndexColumn()
            ->addColumn('customer_details',function($row){
                return '<b>'.$row->customer_name_en.'</b><br>
                <span>'.$row->customer_phone.'</span><br>
                <span>'.$row->customer_email.'</span>';
            })
            ->addColumn('type',function($row){
                if($row->type == 1)
                {
                    return 'General Customer';
                }
                elseif($row->type == 2)
                {
                    return 'Retails Customer';
                }
                else
                {
                    return '3rd Party Customer';
                }
            })
            ->addColumn('accounts',function($row){
                $total_purchase = sales_ledger::where('customer_id',$row->customer_id)->sum('total');
                $total_discount = sales_ledger::where('customer_id',$row->customer_id)->sum('final_discount');
                $paid_amount = sales_ledger::where('customer_id',$row->customer_id)->sum('paid_amount');
                $previous_due = sales_payment::where('customer_id',$row->customer_id)->sum('previous_due');
                $return_amount = sales_payment::where('customer_id',$row->customer_id)->sum('return_amount');
                $sales_payment = sales_payment::where('customer_id',$row->customer_id)->sum('payment_amount');
                $return_paid = sales_payment::where('customer_id',$row->customer_id)->sum('returnpaid');


                $grandtotal = $total_purchase - $total_discount;

                $total = ($grandtotal - $paid_amount)  + $previous_due;

                $subtotal = ($total - $return_amount) - $return_paid;

                return '<span class="badge bg-danger">'.$subtotal.'</span>';
            })
            ->addColumn('action', function($row){
                $btn = '<div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle btn-sm" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Actions
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a onclick="return Confirm()" class="dropdown-item" href="'.route('customer.show',$row->customer_id).'"><i class="fa fa-eye"></i> View Detials</a>
                        <a onclick="return Confirm()" class="dropdown-item" href="'.route('customer.edit',$row->customer_id).'"><i class="fa fa-edit"></i> Edit</a>
                        <form action="'.route('customer.destroy',$row->customer_id).'" method="post">
                        '.csrf_field().'
                        '.method_field("DELETE").'
                        <button onclick="return Confirm()" type="submit" class="dropdown-item text-danger"><i class="fa fa-trash"></i> Delete</button>
                        </form>
                    </div>
                </div>';
                return $btn;
            })
            ->rawColumns(['action','type','customer_details','accounts'])
            ->make(true);


        }
        return view('inventory.customer.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('inventory.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $r)
    {
        $id = IdGenerator::generate(['table' => 'customer_infos', 'field'=>'customer_id','length' => 7, 'prefix' =>'C-']);

        if ($r->previous_due > 0 && $r->previous_due != Null) {

            $data = array(
                'customer_id'        => $id,
                'customer_branch_id' => $r->customer_branch_id,
                'customer_name_en'   => $r->customer_name_en,
                'customer_name_bn'   => $r->customer_name_bn,
                'customer_email'     => $r->customer_email,
                'customer_phone'     => $r->customer_phone,
                'customer_address'   => $r->customer_address,
                'type'               => $r->type,
                'customer_admin_id'  => Auth()->user()->id,
            );
            // dd($data);
            customer_info::create($data);

            $data2 = array([

                'entry_date'   => date('Y-m-d'),
                'previous_due' => $r->previous_due,
                'customer_id'  => $id,
                'note'         => "PD",
                'branch_id'    => Auth()->user()->branch,
                'admin_id'     => Auth()->user()->id,


            ]);

            sales_payment::insert($data2);

        }
        else{

            $data = array(
                'customer_id'        => $id,
                'customer_branch_id' => $r->customer_branch_id,
                'customer_name_en'   => $r->customer_name_en,
                'customer_name_bn'   => $r->customer_name_bn,
                'customer_email'     => $r->customer_email,
                'customer_phone'     => $r->customer_phone,
                'customer_address'   => $r->customer_address,
                'type'               => $r->type,
                'customer_admin_id'  => Auth()->user()->id,
            );

            customer_info::insert($data);

        }


        Toastr::success('Customer Created', 'Success');
        return redirect()->back();
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
        $data = customer_info::where('customer_id',$id)->first();

        $pd = sales_payment::where('customer_id',$id)->where('note','PD')->first();

        if($pd)
        {
            $previous_due = $pd->previous_due;
        }
        else
        {
            $previous_due = 0;
        }

        return view('inventory.customer.edit',compact('data','previous_due'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $r, string $id)
    {
        // return $id;
        $data = array(
            'customer_branch_id' => $r->customer_branch_id,
            'customer_name_en'   => $r->customer_name_en,
            'customer_name_bn'   => $r->customer_name_bn,
            'customer_email'     => $r->customer_email,
            'customer_phone'     => $r->customer_phone,
            'customer_address'   => $r->customer_address,
            'type'               => $r->type,
            'customer_admin_id'  => Auth()->user()->id,
        );
        customer_info::where('customer_id',$id)->update($data);

        if($r->previous_due == 0 && $r->previous_due == Null)
        {
            sales_payment::withTrashed()->where('customer_id',$id)->where('note','PD')->forceDelete();
        }

        if ($r->previous_due > 0 && $r->previous_due != Null) {

            sales_payment::withTrashed()->where('customer_id',$id)->where('note','PD')->forceDelete();

            $data2 = array([

                'entry_date'   => date('Y-m-d'),
                'previous_due' => $r->previous_due,
                'customer_id'  => $id,
                'note'         => "PD",
                'branch_id'    => Auth()->user()->branch,
                'admin_id'     => Auth()->user()->id,


            ]);

            sales_payment::insert($data2);

        }

        Toastr::success('Customer Updated', 'Success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        sales_payment::where('customer_id',$id)->delete();
        customer_info::where('customer_id',$id)->delete();
        Toastr::success('Customer Deleted', 'Success');
        return redirect()->back();

    }

    public function retrive_customer($id)
    {
        sales_payment::where('customer_id',$id)->restore();
        customer_info::where('customer_id',$id)->restore();
        Toastr::success('Customer Retrive', 'Success');
        return redirect()->back();
    }

    public function customerper_delete($id)
    {
        sales_payment::withTrashed()->where('customer_id',$id)->forceDelete();
        customer_info::withTrashed()->where('customer_id',$id)->forceDelete();
        Toastr::success('Customer Permenantly Delete Successfullly', 'Success');
            return redirect()->back();
    }
}
