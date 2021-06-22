<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Clients::orderBy('id', 'asc')
            ->get();
        return view('posts.clients', compact('clients'));
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
     * @param  \App\Models\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function show(Clients $clients, $id)
    {
        $clients = Clients::findOrFail($id);
        return view('posts.client_show', ['client' => $clients]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function edit(Clients $clients, $id)
    {
        $clients = Clients::findOrFail($id);

        return view('posts.client_edit', ['client' => $clients]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate(
            request(),
            ['society' => 'required'],
            ['phone' => 'required'],
            ['email' => 'required'],
            ['address' => 'required'],
            ['VAT' => 'required']
        );

        $client = Clients::findOrFail($id);
        $client->society = $request->society;
        $client->phone = $request->phone;
        $client->email = $request->email;
        $client->address = $request->address;
        $client->VAT = $request->VAT;
        $client->save();

        return redirect('/clients');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function showDestroy(Clients $clients, $id)
    {
        $clients = Clients::findorFail($id);
        return view('posts.client_delete', ['client' => $clients]);
    }

    public function destroy(Clients $clients, $id)
    {
        $clients = Clients::findorFail($id);
        $clients->destroy($id);

        return redirect('/clients');
    }
}
