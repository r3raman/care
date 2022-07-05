<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Guarantor;
use App\Models\Insurance;
use App\Models\Payer;
use App\Models\Services;
use App\Models\Authorization;
use Illuminate\Http\Request;

use Log;
use DB;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.clients_list');
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
        DB::beginTransaction();
        try{
            $user = auth()->user();
            //Client Info
            $client_info = new Client;
            $policy_info = new Insurance;
            $auth_info = new Authorization;
            $guarantor_info = new Guarantor;
            $services_info = new Services;
            $client_info->first_name = $request->post('first_name');
            $client_info->middle_name = '';
            $client_info->last_name = $request->post('last_name');
            $client_info->dob = $request->post('dob');
            $client_info->gender = $request->post('gender');
            $client_info->email = $request->post('email');
            $client_info->phone_home = $request->post('phone_home');
            $client_info->phone_mobile = $request->post('phone_mobile');
            $client_info->addr = $request->post('addr');
            $client_info->addr_zip = $request->post('addr_zip');
            $client_info->addr_city = $request->post('addr_city');
            $client_info->addr_state = $request->post('addr_state');
            $client_info->is_client_portal = $request->post('is_client_portal');
            if($request->post('is_email')){
                $client_info->is_email = $request->post('is_email');
            }
            if($request->post('is_sms')){
                $client_info->is_sms = $request->post('is_sms');
            }
            $client_info->provider_id = $request->post('provider_id');
            $client_info->default_location = $request->post('default_location');
            $client_info->account_number = strtoupper(substr($request->post('first_name'), 0, 2).substr($request->post('last_name'), 0, 2).'0001');
            $client_info->practice_id=1;
            $client_info->created_by = auth()->user()->id;
            $client_info->last_updated_by = auth()->user()->id;
            $client_info->save();
            $patient_id = Client::latest('id')->pluck('id')->first();
            
            $client_info1 = Client::find($patient_id);
            
            $relationship = $request->post('relationship');
            if($relationship != "Self"){
                $client_info1->is_guarantor = 1;
                $policy_info->is_guarantor = 1;

                $guarantor_info->patient_id = $patient_id;
                $guarantor_info->first_name = $request->post('guarantor_first_name');
                $guarantor_info->middle_name = '';
                $guarantor_info->last_name = $request->post('guarantor_last_name');
                $guarantor_info->dob = $request->post('guarantor_dob');
                $guarantor_info->gender = $request->post('guarantor_gender');
                $guarantor_info->email = $request->post('guarantor_email');
                $guarantor_info->phone_home = $request->post('guarantor_phone_home');
                $guarantor_info->phone_mobile = $request->post('guarantor_phone_mobile');
                $guarantor_info->addr = $request->post('guarantor_addr');
                $guarantor_info->addr_zip = $request->post('guarantor_addr_zip');
                $guarantor_info->addr_city = $request->post('guarantor_addr_city');
                $guarantor_info->addr_state = $request->post('guarantor_addr_state');
                $guarantor_info->created_by = auth()->user()->id;
                $guarantor_info->last_updated_by = auth()->user()->id;
                $guarantor_info->practice_id = 1;
                $guarantor_info->save();

            }
            else{
                $client_info1->is_guarantor = 0;
                $policy_info->is_guarantor = 0;   
            }
            $client_info1->save();

            $policy_info->payer_id = $request->post('p_payer_id');
            $payer_id = $request->post('p_payer_id');
            $policy_info->patient_id = $patient_id;
            $policy_info->payer_name = Payer::where('id',$payer_id)->pluck('payer_name')->first();
            $policy_info->policy_number = $request->post('p_policy_number');
            $policy_info->policy_start = $request->post('p_policy_start');
            $policy_info->policy_end = $request->post('p_policy_end');
            $policy_info->group_id = $request->post('p_group_id');
            $policy_info->group_name = $request->post('p_group_name');
            $policy_info->copay = $request->post('p_copay');
            $policy_info->deductible = $request->post('p_deductible');
            $policy_info->created_by = auth()->user()->id;
            $policy_info->last_updated_by = auth()->user()->id;
            $policy_info->save();
            $insurance_id = Insurance::latest('id')->pluck('id')->first();

            $auth_info->insurance_id = $insurance_id;
            $auth_info->patient_id = $patient_id;
            $auth_info->authorization = $request->post('p_authorization');
            $auth_info->effective_start = $request->post('p_effective_start');
            $auth_info->effective_end = $request->post('p_effective_end');
            $auth_info->auth_status = $request->post('p_auth_status');
            $auth_info->speciality = $request->post('p_speciality');
            $auth_info->diag1 = $request->post('p_diag1');
            $auth_info->diag2 = $request->post('p_diag2');
            $auth_info->diag3 = $request->post('p_diag3');
            $auth_info->diag4 = $request->post('p_diag4');
            $auth_info->auth_provider_id = $request->post('p_auth_provider_id');
            $auth_info->created_by = auth()->user()->id;
            $auth_info->last_updated_by = auth()->user()->id;
            $auth_info->save();

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }
        return redirect()->route('add_client');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        $client = Client::select(DB::raw("CONCAT(first_name,' ',middle_name,' ',last_name) AS client_name"),'id', 'email','dob','gender','account_number')->get();
        $meta = [];
        $meta["page"] = 1;
        $meta["pages"]= 3;
        $meta["perpage"]= -1;
        $meta["total"]= 12;
        $meta["sort"]= "asc";
        $meta["field"]= "id";
        $json = [];
        $json['meta'] = $meta;
        $json['data'] = $client;
        return json_encode($json);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
