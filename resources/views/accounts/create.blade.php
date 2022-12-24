@extends('layouts.base')

@section('content')


    <h2>Create Account</h2>

    <form action="{{ route('accounts.store') }}" method="POST">
        @csrf
        @method('POST')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Deposit</label>
            <input name="deposit" min="5" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Minimum 5$ deposit for account creation.</div>
        </div>
        <div class="mb-3">
            <select required name="account_src" class="form-select" aria-label="Default select example">
                <option selected>Source Account</option>
                @foreach($accounts as $account)
                    <option value="{{$account->id}}">{{$account->account_number}}</option>

                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <select required name="account_type" class="form-select" aria-label="Default select example">
                <option selected>Account Type</option>

                    <option value="current">Current</option>
                    <option value="savings">Savings</option>


            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection

