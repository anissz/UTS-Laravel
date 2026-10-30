<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminUiController extends Controller
{
    public function index()
    {
        return view ('admin.ui');
    }
}
