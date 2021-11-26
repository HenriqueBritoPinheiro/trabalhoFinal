<?php

namespace App\Http\Controllers;

use App\Models\Model\City;
use App\Models\Model\State;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::paginate();
        return view('city.index')->with('cities', $cities);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $State = State::all();

        return view('city.create')->with('State', $State);
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
        $city = new City();
        //..seta os dados do model a partir do $request
        $city->desccity = $request->input('descCity');
        $city->state_id = $request->input('State');
        //..persiste o objeto no BD
        $city->save();
        //..redireciona para o index
        return redirect(route('city.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $city = City::find($id);
        return view('city.inf')->with('city', $city);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $State = State::all();
        $city = City::find($id);
        return view('city.show')->with('State', $State)->with('city', $city);
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
        $city = City::find($id);
        //..seta os dados do model a partir do $request
        $city->desccity = $request->input('descCity');
        $city->state_id = $request->input('State');
        //..persiste o objeto no BD
        $city->save();
        //..redireciona para o index
        return redirect(route('city.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        City::destroy($id);
        return redirect(route('city.index'));
    }
}
