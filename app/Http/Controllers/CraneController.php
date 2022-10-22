<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CraneController extends Controller
{
    public function getAllCranes(Request $request) {
        $cranes =
        return view('content.cranes', ['cranes' => $cranes]);
    }
}
