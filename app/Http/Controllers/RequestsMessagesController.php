<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestsMessagesController extends Controller
{
    public function index()
    {

        $requests_messages = \App\Models\Tenants::all();
        return view('requests_messages.index', ['requests_messages' => $requests_messages]);

    }

    public function view($id) {

        $request_messages = \App\Models\Tenants::where('id',$id)->first();
        return view('request_messages.view', ['request_messages' => $request_messages]);


    }

}
