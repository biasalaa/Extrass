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
<<<<<<< HEAD

=======
>>>>>>> 78045a2deda02dcf8a91d9325b307ab9d7d128bc
        $category = Category::all();
        $extra = Extrakulikuler::all();
        return view('landingpage.landing', [

<<<<<<< HEAD
            "category"=>$category,
            "extra"=>$extra
         ]);
=======
            "category" => $category,
            "extra" => $extra
        ]);
>>>>>>> 78045a2deda02dcf8a91d9325b307ab9d7d128bc
    }
}
