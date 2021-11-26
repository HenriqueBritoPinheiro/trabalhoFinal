<?php

namespace App\Http\Controllers;

use App\Models\Model\City;
use App\Models\Model\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $District = District::paginate(10);
        return view('district.index')->with('District', $District);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $City = City::all();
        return view('district.create')->with('City', $City);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $district = new District();
        //..seta os dados do model a partir do $request
        $district->descdistrict = $request->input('descDistrict');
        $district->city_id = $request->input('City');
        //..persiste o objeto no BD
        $district->save();
        //..redireciona para o index
        return redirect(route('district.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $district = District::find($id);
        return view('district.inf')->with('district', $district);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $city = City::all();
        $district = District::find($id);
        return view('district.show')->with('district', $district)->with('city', $city);
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
        $district = District::find($id);
        //..seta os dados do model a partir do $request
        $district->descdistrict = $request->input('descDistrict');
        $district->city_id = $request->input('City');
        //..persiste o objeto no BD
        $district->save();
        //..redireciona para o index
        return redirect(route('district.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        District::destroy($id);
        return redirect(route('district.index'));

    }
}
