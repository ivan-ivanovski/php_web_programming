<head>
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
</head>
<main>
    <h1>Transaction Page</h1>
    <div>
        <a href="{{ route('transaction.create') }}">Create new transaction</a>
    </div>
    @if($transactions->isEmpty())
        <p>
            No transactions found.
        </p>
    @else
        <div>
            <table>        
                <tr>
                    <th>Employee Name</th>
                    <th>Sende name</th>
                    <th>Sender Account number</th>
                    <th>Receiver Name</th>
                    <th>Receiver Account number</th>
                    <th>Amount</th>
                    <th>Created at</th>
                    <th>Actions</th>
                </tr>
        
                @foreach($transactions as $t)
                <tr>
                    <td>{{ $t->name_surnamae_employee }}</td>
                    <td>{{ $t->name_surname_sender }}</td>
                    <td>{{ $t->account_number_sender }}</td>
                    <td>{{ $t->name_surname_receiver }}</td>
                    <td>{{ $t->account_number_receiver }}</td>
                    <td>{{ $t->amount }}</td>
                    <td>{{ $t->created_at }}</td>
                    <td id="inline">
                        <a class="btn" href="{{ route('transaction.show',$t->id) }}">Show</a>
                        <form action="{{ route('transaction.edit', $t->id) }}" method="get">
                            @csrf
                            <input type="submit" class="btn" value="Update">
                        </form>
                        <form action="{{ route('transaction.destroy', $t->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn" value="Delete">
                        </form>
                    </td>
                </tr>
                @endforeach
                
            </table>
        </div>
    @endif
</main>
