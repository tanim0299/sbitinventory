<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\customer_info;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
        return view('inventory.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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

            DB::table('sales_payment')->insert($data2);

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

            DB::table('customer_info')->insert($data);

        }
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
}
