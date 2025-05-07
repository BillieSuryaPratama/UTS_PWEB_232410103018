<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengelolaanController extends Controller
{
    public function showPagePengelolaan()
    {
        return view('pengelolaan');
    }
}
