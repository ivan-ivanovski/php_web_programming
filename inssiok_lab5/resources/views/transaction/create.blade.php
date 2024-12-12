<head>
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
</head>
<main>
<h1>Add new transaction</h1>

<form action="{{ route('transaction.store') }}" method="POST" class="addNewTransactionForm">
    @csrf
    <label for='name_surnamae_employee'></label>
    <input type="text" id='name_surnamae_employee' name='name_surnamae_employee' placeholder="Enter employee name" required>
    <label for='name_surname_sender'></label>
    <input type="text" id='name_surname_sender' name='name_surname_sender' placeholder="Enter sender name" required>
    <label for='account_number_sender'></label>
    <input type="text" id='account_number_sender' name='account_number_sender' placeholder="Enter sender account number"required >
    <label for='name_surname_receiver'></label>
    <input type="text" id='name_surname_receiver' name='name_surname_receiver' placeholder="Enter receiver name"required >
    <label for='account_number_receiver'></label>
    <input type="text" id='account_number_receiver' name='account_number_receiver' placeholder="Enter receiver account number"required >
    <input type="number" id='amount' name='amount' placeholder="Enter account number" required>
    <input type="submit" value="Add new">
</form>

<div>
    <a href="{{route('transaction.index')}}">Back to transaction index page</a>
</div>
</main>