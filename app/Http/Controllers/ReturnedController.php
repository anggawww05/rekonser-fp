<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReturnedController extends Controller
{
    public function indexreturns()
    {
        return view('users/listReturned');
    }
}
