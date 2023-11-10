<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;


class ClientController extends Controller
{
    public function index()
    {

        $clients = Client::all();
        return view('clients.index', ['clients' => $clients]);

    }

    public function view($id) {

        $client = Client::where('id',$id)->first();
        return view('clients.view', ['client' => $client]);


    }


    public function create()
    {
        return view('clients.create');
    }

    public function edit($id) {

        $client = Client::where('id',$id)->first();
        return view('clients.edit', ['client' => $client]);


    }
    public function createPost(Request $request) {

        
        $array = $this->extractDataFromRequest($request);

        // ulozime do db

        $client = Client::create($array);


        return redirect($client->getViewLink());

    }

    public function editPost(Request $request) {

        $id = $request->input('id');
        $array = $this->extractDataFromRequest($request);


        // ulozime do db
        $client = Client::find($id);
        if($client) {
            $client->update($array);
        }

        return redirect($client->getViewLink());

    }

    public function deletePost(Request $request) {

        $id = $request->input('id');

        // ulozime do db
        $client = Client::find($id);
        if($client) {
            $client->delete();
        }

        return redirect(route('clients.index'));

    }

    public function extractDataFromRequest(Request $request) {

        $array = [
            'id'=> $request->input('id'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone_number' => $request->input('phone_number'),
            'verification'=> $request->input('verification'),
            'request'=> $request->input('request'),
            'request_message'=> $request->input('request_message'),
            'file'=> $request->input('file'),

        ];

        return $array;

    }

}