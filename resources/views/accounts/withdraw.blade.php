@extends('layouts.base')

@section('content')


            <h2>Withdraw</h2>

            <form action="{{ route('withdraw.store') }}" method="POST">
                @csrf
                @method('POST')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Amount</label>
                    <input name="amount" min="35" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Minimum 5$ withdraw for account creation.</div>
                </div>
                <div class="mb-3">
                    <select required name="source_id" class="form-select" aria-label="Default select example">
                        <option selected>From Account</option>
                        @foreach($accounts as $account)
                            <option value="{{$account->id}}">{{$account->account_number}} <b>({{ $account->balance }})</b></option>

                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

@endsection
