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

        $category = Category::all();
        $extra = Extrakulikuler::all();
        return view('landingpage.landing', [

            "category"=>$category,
            "extra"=>$extra
         ]);
    }
}