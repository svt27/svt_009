<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Transaction;
use App\Models\User;
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
//        $fields['account_type'] = 'personal';
        $fields['user_id'] = auth()->id();

        $account = Account::create($fields);

        $account_src = Account::find($fields['account_src']);
        $account_dest = Account::find($account->id);

        $this->makeTransaction($account_src, $account_dest, $fields['deposit'], 'deposit', 'Initial deposit on account opening');

        flash()->success('Account created successfully');

        return redirect()->route('accounts.index');
    }

    public function makeTransaction(Account $account_src, Account $account_dest, $amount, $type, $memo)
    {
        $account_src->balance = $account_src->balance - $amount;
        $account_src->save();
        $account_dest->balance = $account_dest->balance + $amount;
        $account_dest->save();

        Transaction::create([
            'account_src' => $account_src->id,
            'account_dest' => $account_dest->id,
            'balance_change' => "-".$amount,
            'transaction_type' => $type,
            'memo' => $memo,
            'expected_total' => $account_src->balance,
        ]);

        Transaction::create([
            'account_src' => $account_dest->id,
            'account_dest' => $account_src->id,
            'balance_change' => "+".$amount,
            'transaction_type' => $type,
            'memo' => $memo,
            'expected_total' => $account_dest->balance,
        ]);
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

    public function getDepositForm()
    {
        $accounts = auth()->user()->accounts;
        return view('accounts.deposit', compact('accounts'));
    }

    public function storeDeposit(Request $request)
    {
        $fields = $request->all();

        $world_account = Account::where('account_number', '000000000000')->first();
        $account_b = Account::find($fields['source_id']);

        $this->makeTransaction($world_account, $account_b, $fields['amount'], 'deposit',$fields['memo']);


        flash()->success('Deposit done successfully');

        return redirect()->route('accounts.index');
    }

    public function getWithdrawForm()
    {
        $accounts = auth()->user()->accounts;
        return view('accounts.withdraw', compact('accounts'));
    }

    public function storeWithdraw(Request $request)
    {
        $fields = $request->all();

        $world_account = Account::where('account_number', '000000000000')->first();
        $account_b = Account::find($fields['source_id']);

        if ($fields['amount'] > $account_b->balance) {
            flash()->error("Sorry Transaction cannot be done! No enough balance");
            return back();
        }

        $this->makeTransaction($account_b, $world_account, $fields['amount'], 'deposit', $fields['memo']);


        flash()->success('Withdraw done successfully');

        return redirect()->route('accounts.index');
    }


    public function getTransferForm()
    {
        $accounts = auth()->user()->accounts;

        $to_accounts = Account::where('account_number', '!=' , '000000000000')->get();
        return view('accounts.transfer', compact('accounts', 'to_accounts'));
    }

    public function storeTransfer(Request $request)
    {
        $fields = $request->all();

        $dest_account = Account::find($fields['dest_id']);
        $account_b = Account::find($fields['source_id']);

        if ($fields['amount'] > $account_b->balance) {
            flash()->error("Sorry Transaction cannot be done! No enough balance");
            return back();
        }

        $this->makeTransaction($account_b, $dest_account, $fields['amount'], 'deposit', $fields['memo']);


        flash()->success('Transfer done successfully');

        return redirect()->route('accounts.index');
    }

    public function updateUser(Request $request)
    {
        $fields = $request->only(['public', 'name', 'email']);
        if (!isset($fields['public']))
            $fields['public'] = false;
        else
            $fields['public'] = true;


        $user = auth()->user();
        $user->update($fields);


        flash()->success('profile updated');
        return back();
    }

    public function profile(User $user)
    {
        return view('public-profile', compact('user'));
    }


}
