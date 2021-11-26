<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Model\Client;
use App\Models\Model\District;
use App\Models\Model\State;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::paginate(10);
        return view('client.index')->with('clients', $clients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $District = District::all();
        return view('client.create')->with('District', $District);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //..instancia um novo model
        $client = new Client();
        //..seta os dados do model a partir do $request
        $client->nameclient = $request->input('nameClient');
        $client->phoneclient = $request->input('phoneClient');
        $client->numberclient = $request->input('numberClient');
        $client->roadclient = $request->input('roadClient');
        $client->cpfclient = $request->input('cpfClient');
        $client->district_id = $request->input('District');
        //..persiste o objeto no BD
        $client->save();
        //..redireciona para o index
        return redirect(route('client.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //..recupera o objeto pelo $id
        $client = Client::find($id);
        //..retorna a view contendo o model recuperado
        return view('client.inf')->with('client', $client);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //..recupera o objeto pelo $id
        $client = Client::find($id);
        $District = District::all();
        //..retorna a view contendo o model recuperado
        return view('client.show')->with('client', $client)->with('District', $District);
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
        //..recupera o model a ser atualizado
        $client = Client::find($id);
        //..seta os novos dados no model
        $client->nameclient = $request->input('nameClient');
        $client->phoneclient = $request->input('phoneClient');
        $client->numberclient = $request->input('numberClient');
        $client->roadclient = $request->input('roadClient');
        $client->cpfclient = $request->input('cpfClient');
        $client->district_id = $request->input('District');
        //..salva as alterações
        $client->save();
        //..redireciona para o index
        return redirect(route('client.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Client::destroy($id);
        //..redireciona para o index
        return redirect(route('client.index'));
    }
}
