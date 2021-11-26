<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Model\State;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $states = State::paginate();
        return view('state.index')->with('states', $states);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('state.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'siglaState' => 'required|max:2|',
        ];
        //..cria um array com mensagens personalizadas
        $messages = [
            'required' => 'O campo :attribute precisa ser preenchido!'
        ];
        //..executa a validação, passando as mensagens
        $request->validate($rules, $messages);
        //..instancia um novo model
        $state = new State();
        //..seta os dados do model a partir do $request
        $state->descstate = $request->input('descState');
        $state->siglastate = $request->input('siglaState');
        //..persiste o objeto no BD
        $state->save();
        //..redireciona para o index
        return redirect(route('state.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $state = State::find($id);
        //..retorna a view contendo o model recuperado
        return view('state.inf')->with('state', $state);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $state = State::find($id);
        //..retorna a view contendo o model recuperado
        return view('state.show')->with('state', $state);
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
        $state = State::find($id);
        $state->descstate = $request->input('descState');
        $state->siglastate = $request->input('siglaState');
        //..persiste o objeto no BD
        $state->save();
        //..redireciona para o index
        return redirect(route('state.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        State::destroy($id);
        return redirect(route('state.index'));
    }
}
