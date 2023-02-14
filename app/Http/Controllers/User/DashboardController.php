<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Bavix\Wallet\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::where('id', Auth::user()->id)->first();
        $wallets = $users->balance;

        // $historyOuts = Transaction::where('type', 'withdraw')->get();

        // $historyIns = Transaction::where('type', 'deposit')->get();
        $histories = Transaction::where('payable_id', Auth::user()->id)->orderBy('id', 'DESC')->paginate(3);
        $totalHistoryIn = Transaction::where('payable_id', Auth::user()->id)->where('type', 'deposit')->sum('amount');
        $totalHistoryOut = Transaction::where('payable_id', Auth::user()->id)->where('type', 'withdraw')->sum('amount');



        // dd($totalHistoryOut);
        // return view('dashboard', compact('wallets', 'historyOuts', 'historyIns'));
        return view('dashboard', compact('wallets', 'histories', 'totalHistoryIn', 'totalHistoryOut'));
    }
}
