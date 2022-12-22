@extends('layouts.base')


@section('content')
    <br>
    <br>

    <h2>Account Detail</h2>
    <div><b>Account number</b>: {{$account->account_number}}</div>
    <div><b>Account Balance</b>: {{$account->balance}}</div>
    <div><b>Account Type</b>: {{$account->account_type}}</div>
    <div><b>Opened </b>: {{$account->created_at}}</div>

    <br>
    <br>
    <table id="dt" class="table">
        <thead>
        <tr>
            <th scope="row">Destination account</th>
            <td>Source account</td>
            <td>Balance change</td>
            <td>Type</td>
            <td>Expected Total</td>
        </tr>
        </thead>
        <tbody>
        @foreach($account->transactions as $transaction)
            <tr>
                <td>{{ $transaction->dest->account_number }}</td>
                <th>{{ $transaction->source->account_number }}</th>
                <td>{{ $transaction->balance_change }}</td>
                <td>{{ $transaction->transaction_type }}</td>
                <td>{{ $transaction->expected_total }}</td>
            </tr>
        @endforeach

        </tbody>
    </table>

@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#dt').DataTable(
                {
                    "pageLength": 10,
                    "lengthMenu": [ 5, 10, 15 ]
                }
            );
        });
    </script>
@endsection

