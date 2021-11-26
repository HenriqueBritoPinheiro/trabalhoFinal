<?php

namespace App\Http\Controllers;

use App\Models\Model\Account;
use App\Models\Model\AccountType;
use App\Models\Model\Client;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $account = Account::paginate();
        return view('account.index')->with('account', $account);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client = Client::all();
        $accountType = AccountType::all();
        return view('account.create')->with('client', $client)->with('accountType', $accountType);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $account = new Account();
        $str = $request->input('balanceAccount');

        if (strstr($str, ",")) {
            $str = str_replace(".", "", $str); // replace dots (thousand seps) with blancs
            $str = str_replace(",", ".", $str); // replace ',' with '.'
        }

        if (preg_match("#([0-9\.]+)#", $str, $match)) { // search for number that may contain '.'
            floatval($match[0]);
        } else {
            floatval($str); // take some last chances with floatval
        }
        $account->balanceaccount = $str;
        $account->client_id = $request->input('client');
        $account->account_type_id = $request->input('accountType');
        $account->save();
        return redirect(route('account.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Account = Account::find($id);
        return view('account.inf')->with('account', $Account);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @param double $valor
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $client = Client::all();
        $accountType = AccountType::all();
        $Account = Account::find($id);
        return view('account.show')->with('account', $Account)->with('client', $client)->with('accountType', $accountType);
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
        $account = Account::find($id);
        $str = $request->input('balanceAccount');

        if (strstr($str, ",")) {
            $str = str_replace(".", "", $str); // replace dots (thousand seps) with blancs
            $str = str_replace(",", ".", $str); // replace ',' with '.'
        }

        if (preg_match("#([0-9\.]+)#", $str, $match)) { // search for number that may contain '.'
            floatval($match[0]);
        } else {
            floatval($str); // take some last chances with floatval
        }
        $account->balanceaccount = $str;
        $account->client_id = $request->input('client');
        $account->account_type_id = $request->input('accountType');
        $account->save();
        return redirect(route('account.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Account::destroy($id);
        return redirect(route('account.index'));
    }
}
