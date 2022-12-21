@extends('layouts.base')


@section('content')


            <h2>Create List</h2>

            <table id="dt" class="table">
                <thead>
                <tr>
                    <th scope="row">Account Number</th>
                    <td>Balance</td>
                    <td>Account Type</td>
                    <td>Modified</td>
                </tr>
                </thead>
                <tbody>
                    @foreach($accounts as $account)
                        <tr>
                            <th scope="row"><a href="{{ route('accounts.show', $account->id) }}">{{ $account->account_number }}</a></th>
                            <td>{{ $account->balance }}</td>
                            <td>{{ $account->account_type }}</td>
                            <td>{{ $account->updated_at }}</td>
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
                    "pageLength": 5,
                    "lengthMenu": [ 5, 10, 15 ]
                }
            );
        });
    </script>
@endsection

