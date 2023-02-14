<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\UserTopup;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TopupController extends Controller
{
    public function index()
    {
        return view('user.topup.index');
    }

    public function topUpCash()
    {
        return view('user.topup.cash');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nominal_topup' => 'required|numeric'
        ]);

        UserTopup::create([
            'amount' => $request->nominal_topup,
            'user_id' => Auth::user()->id,
            'date' => Carbon::now(),
            'note' => 'Topup Cash',
            'status' => 'Diproses'
        ]);

        return redirect()->route('user.topup.konfirmasi');
    }

    public function konfirmasi()
    {
        return view('user.topup.konfirmasi');
    }
}
