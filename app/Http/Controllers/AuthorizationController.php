<?php

namespace App\Http\Controllers;

use App\Models\Authorization;
use Illuminate\Http\Request;
use Log;

class AuthorizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Authorization  $authorization
     * @return \Illuminate\Http\Response
     */
    public function show(Authorization $authorization, Request $request)
    {
        $patient_id = $request['query']['patient_id'];
        $auths = Authorization::join("tbl_insurance","tbl_insurance.id","=","tbl_authorization.insurance_id")->where("tbl_authorization.patient_id", $patient_id)->get();
        Log::info($auths);
        $meta = [];
        $meta["page"] = 1;
        $meta["pages"]= 3;
        $meta["perpage"]= -1;
        $meta["total"]= 12;
        $meta["sort"]= "asc";
        $meta["field"]= "id";
        $json = [];
        $json['meta'] = $meta;
        $json['data'] = $auths;
        Log::info(json_encode($json));
        return json_encode($json);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Authorization  $authorization
     * @return \Illuminate\Http\Response
     */
    public function edit(Authorization $authorization)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Authorization  $authorization
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Authorization $authorization)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Authorization  $authorization
     * @return \Illuminate\Http\Response
     */
    public function destroy(Authorization $authorization)
    {
        //
    }
}
