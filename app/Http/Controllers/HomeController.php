<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * @param Request $request
 */
class HomeController extends Controller
{
    function getIndex(Request $request){
        $services = DB::table('services')->get()->all();
        return view('content.index', ['services' => $services]);
    }
}
