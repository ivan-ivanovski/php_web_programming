<head>
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
</head>
<main>
    <h1>Full view of transaction</h1>

    <label for='name_surnamae_employee'></label>
    <input readonly type="text" id='name_surnamae_employee' name='name_surnamae_employee' value="{{$transaction->name_surnamae_employee }}" required>
    <label for='name_surname_sender'></label>
    <input readonly type="text" id='name_surname_sender' name='name_surname_sender' value="{{$transaction->name_surname_sender}}" required>
    <label for='account_number_sender'></label>
    <input readonly type="text" id='account_number_sender' name='account_number_sender' value="{{$transaction->account_number_sender}}"required >
    <label for='name_surname_receiver'></label>
        <input readonly type="text" id='name_surname_receiver' name='name_surname_receiver' value="{{$transaction->name_surname_receiver}}"required >
    <label for='account_number_receiver'></label>
    <input readonly type="text" id='account_number_receiver' name='account_number_receiver' value="{{$transaction->account_number_receiver}}"required >
    <input readonly type="number" id='amount' name='amount' value="{{$transaction->amount}}" required>


    <div>
        <a href="{{route('transaction.index')}}">Back to transaction index page</a>
    </div>
</main>