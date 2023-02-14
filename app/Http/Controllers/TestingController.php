<?php

namespace App\Http\Controllers;

use App\Models\User;
use Bavix\Wallet\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class TestingController extends Controller
{
    public function index()
    {
        $user = User::where('id', 1)->first();
        $pengguna = $user->deposit(50000, ['transfer' => 'Hutang']);

        // $user = User::where('id', 1)->first();
        // $pengguna = $user->withdraw(50000, ['transfer' => 'Hutang']);

        // Transfer
        // $pengirim = User::first();
        // $penerima = User::where('id', 10)->first();
        // $pengirim->getKey() !== $penerima->getKey();

        // $pengirim->balance; // 100
        // $penerima->balance;

        // $pengirim->transfer($penerima, 25, ['description' => 'Bayar Hutang Lagi']);
        // $pengirim->balance; // 95
        // $penerima->balance;

        return 'ok';
        // dd($pengguna);
        return view('testing', compact('historyIns', 'json'));
    }
}
