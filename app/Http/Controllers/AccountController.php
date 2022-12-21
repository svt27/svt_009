<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Psy\Util\Str;
use function GuzzleHttp\Promise\all;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $accounts = auth()->user()->accounts;
        return view('accounts.list', compact('accounts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $accounts = Account::where('account_type', 'world')->get();
        return view('accounts.create', compact('accounts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function store(Request $request)
    {
        $fields = $request->all();

        $fields['account_number'] = bin2hex(random_bytes(5));
        $fields['account_type'] = 'personal';
        $fields['user_id'] = auth()->id();

        $account = Account::create($fields);

        $account_src = Account::find($fields['account_src']);
        $account_dest = Account::find($account->id);

        $account_src->balance = $account_src->balance - $fields['deposit'];
        $account_src->save();
        $account_dest->balance = $account_dest->balance + $fields['deposit'];
        $account_dest->save();

        Transaction::create([
            'account_src' => $account_src->id,
            'account_dest' => $account_dest->id,
            'balance_change' => "-".$fields['deposit'],
            'transaction_type' => 'deposit',
            'memo' => 'initial deposit',
            'expected_total' => $account_src->balance,
        ]);

        Transaction::create([
            'account_src' => $account_dest->id,
            'account_dest' => $account_src->id,
            'balance_change' => "+".$fields['deposit'],
            'transaction_type' => 'deposit',
            'memo' => 'initial deposit',
            'expected_total' => $account_dest->balance,
        ]);

        flash()->success('Account created successfully');

        return redirect()->route('accounts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function show(Account $account)
    {
        return view('accounts.show', compact('account'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit(Account $account)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Account $account)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account $account)
    {
        //
    }
}
