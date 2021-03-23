<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //GET
    //Read
    public function index()
    {
        $customer = Customer::all();
        return response()->json($customer);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //POST
    //Create
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $customer = new Customer();
        $customer->fill($request->all());
        $customer->save();

        return response()->json($customer, 201);
    }

    public function show($id)
    {
        $customer = Customer::find($id);
        return response()->json($customer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    //PUT
    //Update
    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);

        if(!$customer) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $customer->fill($request->all());
        $customer->save();

        return response()->json($customer);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    //DELETE
    //Delete
    public function destroy($id)
    {
        $customer = Customer::find($id);

        if(!$customer) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $customer->delete();
    }
}
