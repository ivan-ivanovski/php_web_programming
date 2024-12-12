<?php

namespace App\Http\Controllers;

use App\Models\Transaction;

use Illuminate\Http\Request;


class TransactionController extends Controller
{
    //Listanje na transakcija
    public function index(){
        $transactions = Transaction::all(); // so ovaa kje ni se vrata site tranzakcii 
        $transactionAmount=Transaction::query()->sum('amount'); // opcialno query za vrakjanje na suma od colona amount
        $transactionCount=Transaction::query()->count(); // opcialno query za vrakjanje na broj 
        return view('transaction/index',compact('transactions','transactionAmount','transactionCount')); // ime na ruta koja vrakja podatoci
    }
   
    //Forma za dodavanje
    public function create(){
        return view('transaction/create');
    }
    
    // Dodavanje
    public function store(Request $req){
        //logika za dodavanje i zacuvuvanje na podatoci
        Transaction::query()->create($req->all());
        return redirect()->route('transaction.index');
    }
    
    //Forma za azuriranje
    public function edit(Transaction $transaction){

        return view('transaction/edit',compact('transaction'));
    }
    
    //Azuriranje
    public function update(Request $req, Transaction $transaction){
        $transaction->update($req->all());
        return redirect()->route('transaction.index');
    }

    //Brisenje
    public function destroy(Transaction $transaction){
        $transaction->delete();
        return redirect()->route('transaction.index');
    }
    //Prikaz na edna transakcija
    public function show(Transaction $transaction){
        return view('transaction/show',compact('transaction'));
    }

}
