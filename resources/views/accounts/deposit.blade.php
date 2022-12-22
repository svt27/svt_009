@extends('layouts.base')

@section('content')


            <h2>Deposit</h2>

            <form action="{{ route('deposit.store') }}" method="POST">
                @csrf
                @method('POST')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Amount</label>
                    <input name="amount" min="5" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Minimum 5$ deposit for account creation.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Memo</label>
                    <input name="memo" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Enter memo for the transaction</div>
                </div>
                <div class="mb-3">
                <select required name="source_id" class="form-select" aria-label="Default select example">
                    <option selected>To Account</option>
                    @foreach($accounts as $account)
                        <option value="{{$account->id}}">{{$account->account_number}} <b>({{ $account->balance }})</b></option>

                    @endforeach
                </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

@endsection

