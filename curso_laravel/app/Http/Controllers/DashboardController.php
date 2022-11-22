<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request) {
        return view('test', [
            'tittle' => $request->query(key:'tittle', default: 'Valor Default')
        ]);
    }
}

