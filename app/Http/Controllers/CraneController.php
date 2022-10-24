<?php

namespace App\Http\Controllers;

use App\Models\Crane;
use App\Models\Images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * @param Request $request
 */
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


    public function getCrane(Request $request, int $id) {
        $crane = Crane::firstWhere('id', $id);
        $images = Images::Where('tech_id', $id)->get();

        return view('content.crane', ['crane' => $crane, 'images' => $images]);
    }
}
