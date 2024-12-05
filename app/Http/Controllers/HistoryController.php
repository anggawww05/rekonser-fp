<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function indexhistorys()
    {
        return view('users/listHistory');
    }
}
