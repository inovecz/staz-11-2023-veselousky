<?php

namespace App\Http\Controllers;


use App\Models\Tenant;
use App\Models\Traits\RoutesTrait;
use Illuminate\Http\Request;



class TenantController extends Controller
{
    public function index()
    {

        $tenants = Tenant::all();
        return view('tenants.index', ['tenants' => $tenants]);

    }

    public function view($id) {

        $tenant = Tenant::where('id',$id)->first();
        return view('tenants.view', ['tenant' => $tenant]);


    }


    public function create()
    {
        return view('tenants.create');
    }
    public function edit($id) {

        $tenant = Tenant::where('id',$id)->first();
        return view('tenants.edit', ['tenant' => $tenant]);


    }
    public function createPost(Request $request) {

        
        $array = $this->extractDataFromRequest($request);

        // ulozime do db
dd($array);
        $tenant = Tenant::create($array);

        return redirect($tenant->getViewLink());

    }

    public function editPost(Request $request) {

        $id = $request->input('id');
        $array = $this->extractDataFromRequest($request);


        // ulozime do db

        $tenant = Tenant::find($id);
        if($tenant) {
            $tenant->update($array);
        }

        return redirect($tenant->getViewLink());

    }

    public function deletePost(Request $request) {

        $id = $request->input('id');

        // ulozime do db
        $tenant = Tenant::find($id);
        if($tenant) {
            $tenant->delete();
        }

        return redirect(route('tenants.index'));

    }

    public function extractDataFromRequest(Request $request) {

        $array = [

            'id'=> $request->input('id'),
            'firm_name'=> $request->input('firm_name'),
            'password'=> $request->input('password'),

        ];

        return $array;

    }

}