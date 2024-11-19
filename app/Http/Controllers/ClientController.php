<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Controllers\Controller;
//use App\Http\Requests\StoreClientRequest;
//use App\Http\Requests\UpdateClientRequest;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // List all
        Client::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $fields = $request->validate([
            'name' => 'required|max:255'
        ]);

        $client = Client::create($fields);

        return [ 'client' => $client ];
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
        return [ 'client' => $client ];
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        //
        $fields = $request->validate([
            'name' => 'required|max:255'
        ]);

        $client->update($fields);

        return [ 'client' => $client ];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        //
        $client->delete();

        return [ 'message' => 'Client marked as deleted' ];
    }
}
