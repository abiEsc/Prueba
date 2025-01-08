<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
       // return 'hola';
        $lista = Client::all();
        return view('client.list', [
            'cliente' => $lista
        ]);
       // return $lista;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $client = new Client;
        $client->name = $request->name;
        $client->lastname = $request->lastname;
        $client->address = $request->address;
        $client->cellphone = $request->cellphone;
        $client->treatment = $request->treatment;
        $client->por_desc = $request->porc_desc;
        $client->departament = $request->departament;
        $client->save();

        return redirect('cliente');

    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
        // return $client;
        return view('client.update',[
            'client' => $client
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        //

        $client->name = $request->name;
        $client->address = $request->address;
        $client->cellphone = $request->cellphone;
        $client->treatment = $request->treatment;
        $client->save();
        return redirect('cliente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        //
    }
}