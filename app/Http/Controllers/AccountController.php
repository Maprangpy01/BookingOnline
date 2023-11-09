<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    // Account
    public function account()
    {
        return view('components.Account.profile');
    }
}
