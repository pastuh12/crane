<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    function getService(Request $request, Service $service){

        return view('content.service', ['service' => $service]);
    }
}
