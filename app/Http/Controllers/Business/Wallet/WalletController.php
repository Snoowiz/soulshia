<?php
/*
|--------------------------------------------------------------------------
| Soulshia - The Social Network Web Application.
|--------------------------------------------------------------------------
| Copyright (c)  Snoowiz. All rights reserved.
|--------------------------------------------------------------------------
*/

namespace App\Http\Controllers\Business\Wallet;

use App\Http\Controllers\Controller;

class WalletController extends Controller
{
    public function index()
    {
        $cashouts = me()->cashouts()->latest()->paginate(10);

        return view('business::wallet.overview.index', [
            'walletData' => me()->wallet,
            'cashouts' => $cashouts
        ]);
    }

    public function createCashout()
    {
        return view('business::wallet.cashout.create');
    }
}
