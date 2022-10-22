<?php

namespace App\Http\Controllers;

use App\Models\Crane;
use Illuminate\Http\Request;

class CraneController extends Controller
{

    public function getAllCranes(Request $request) {
        $cranes = Crane::all()->all();
        foreach ($cranes as $crane) {
            switch ($crane->tipe) {
                case 1:
                    $crane->tipe = "Без оголовка";
                    break;
                case 2:
                    $crane->tipe = "C оголовком";
                default:
                    $crane->tipe = "Тип крана";
                    break;
            }
        }
        return view('content.cranes', ['cranes' => $cranes]);
    }
}
