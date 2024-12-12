<head>
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
</head>
<main>
<h1>Edit current transaction</h1>

<form action="{{ route('transaction.update',$transaction->id) }}" method="POST" class="addNewTransactionForm">
    @csrf
    @method('PUT')
    <label for='name_surnamae_employee'></label>
    <input type="text" id='name_surnamae_employee' name='name_surnamae_employee' value="{{$transaction->name_surnamae_employee }}" required>
    <label for='name_surname_sender'></label>
    <input type="text" id='name_surname_sender' name='name_surname_sender' value="{{$transaction->name_surname_sender}}" required>
    <label for='account_number_sender'></label>
    <input type="text" id='account_number_sender' name='account_number_sender' value="{{$transaction->account_number_sender}}"required >
    <label for='name_surname_receiver'></label>
        <input type="text" id='name_surname_receiver' name='name_surname_receiver' value="{{$transaction->name_surname_receiver}}"required >
    <label for='account_number_receiver'></label>
    <input type="text" id='account_number_receiver' name='account_number_receiver' value="{{$transaction->account_number_receiver}}"required >
    <input type="number" id='amount' name='amount' value="{{$transaction->amount}}" required>
    <input type="submit" value="Update this transaction">
</form>

<div>
    <a href="{{route('transaction.index')}}">Back to transaction index page</a>
</div>
</main>