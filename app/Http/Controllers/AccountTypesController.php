<?php

namespace App\Http\Controllers;

use App\AccountType;
use App\Http\Requests;
use Illuminate\Http\Request;

class AccountTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $account_types = AccountType::get();
        return response()->json($account_types);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $account_type = AccountType::create($request->all());
        return response()->json($account_type);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $account_type = AccountType::findOrFail($id);
        return response()->json($account_type);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $account_type = AccountType::findOrFail($id);
        $account_type->name = $request->name;
        $account_type->save();

        return response()->json($account_type);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $account_type = AccountType::findOrFail($id);
        $account_type->delete();

        return response()->json('deleted');
    }
}
