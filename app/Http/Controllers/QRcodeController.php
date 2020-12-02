<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class QRcodeController extends Controller
{
    public function index()
    {
        $user = Auth::user()->name;
        return view('qrcode.index', compact('user'));
    }
}
