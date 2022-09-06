<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Extrakulikuler;
use App\Models\Biodata;
use App\Models\Category;
use App\Models\UserExtra;
use Illuminate\Support\Facades\Auth;

class LandingController extends Controller
{
    public function index()
    {
        $pramuka = Extrakulikuler::where('id', '=', 1)->get();
        $paskibra = Extrakulikuler::where('id', '=', 2)->get();
        $pmr = Extrakulikuler::where('id', '=', 3)->get();
        $basket = Extrakulikuler::where('id', '=', 4)->get();
        $padus = Extrakulikuler::where('id', '=', 5)->get();
        $sepakbola = Extrakulikuler::where('id', '=', 6)->get();
        $futsal = Extrakulikuler::where('id', '=', 7)->get();
        $voli = Extrakulikuler::where('id', '=', 8)->get();
        $teater = Extrakulikuler::where('id', '=', 9)->get();
        $remas = Extrakulikuler::where('id', '=', 10)->get();
        $category = Category::all();
        $extra = Extrakulikuler::all();
        return view('landingpage.landing', [
            "pramuka" => $pramuka,
            "paskibra" => $paskibra,
            "pmr" => $pmr,
            "basket" => $basket,
            "padus" => $padus,
            "sepakbola" => $sepakbola,
            "futsal" => $futsal,
            "voli" => $voli,
            "teater" => $teater,
            "remas" => $remas,
            "category"=>$category,
            "extra"=>$extra
         ]);
    }
}