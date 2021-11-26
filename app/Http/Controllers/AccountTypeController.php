<?php

namespace App\Http\Controllers;

use App\Models\Model\AccountType;
use Illuminate\Http\Request;

class AccountTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $AType = AccountType::paginate();
        return view('accountType.index')->with('accountType', $AType);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('accountType.create');
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
        $accountType = new AccountType();
        //..seta os dados do model a partir do $request
        $accountType->descaccounttype = $request->input('descAccountType');
        //..persiste o objeto no BD
        $accountType->save();
        //..redireciona para o index
        return redirect(route('accountType.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $accountType = AccountType::find($id);
        //..retorna a view contendo o model recuperado
        return view('accountType.inf')->with('accountType', $accountType);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $accountType = AccountType::find($id);
        //..retorna a view contendo o model recuperado
        return view('accountType.show')->with('accountType', $accountType);
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
        $accountType = AccountType::find($id);
        $accountType->descaccounttype = $request->input('descAccountType');
        //..persiste o objeto no BD
        $accountType->save();
        //..redireciona para o index
        return redirect(route('accountType.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AccountType::destroy($id);
        return redirect(route('accountType.index'));
    }
}
