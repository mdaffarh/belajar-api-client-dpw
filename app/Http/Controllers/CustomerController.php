<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $client = new Client();
        $response = $client->request('GET', 'http://127.0.0.1:8000/api/customers');
        $customers = json_decode($response->getBody()->getContents());
        $customers = $customers->data->data;

        return view('customers.index', compact('customers'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $client = new Client();
        $response = $client->post('http://127.0.0.1:8000/api/customers', [
            'form_params' => [
                'name' => $request->name,
                'id_number' => $request->id_number,
                'TL' => $request->TL,
                'email' => $request->email,
            ]
        ]);

        return redirect('/customers');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $client = new Client();
        $response = $client->get("http://127.0.0.1:8000/api/customers/{$id}");
        $customer = json_decode($response->getBody()->getContents());
        $customer = $customer->data;

        return view('customers.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $client = new Client();
        $response = $client->get("http://127.0.0.1:8000/api/customers/{$id}");
        $customer = json_decode($response->getBody()->getContents());
        $customer = $customer->data;

        return view('customers.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $client = new Client();
        $response = $client->put("http://127.0.0.1:8000/api/customers/{$id}", [
            'form_params' => [
                'name' => $request->name,
                'id_number' => $request->id_number,
                'TL' => $request->TL,
                'email' => $request->email,
            ]
        ]);

        return redirect('/customers');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $client = new Client();
        $response = $client->delete("http://127.0.0.1:8000/api/customers/{$id}");

        return redirect('/customers');
    }
}
