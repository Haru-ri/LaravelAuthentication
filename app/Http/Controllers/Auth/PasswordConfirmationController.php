<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PasswordConfirmationController extends Controller
{
    public function show()
    {
        return view('auth.confirmPassword');
    }
}
