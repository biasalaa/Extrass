<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Biodata;
use App\Models\Extrakulikuler;
use App\Models\UserExtra;
use App\Models\Berita;

class DashboardController extends Controller
{

    public function dashboard()
    {
        $biodata = Biodata::where('id', '>', 1)->count();
        $extra = Extrakulikuler::all()->count();

        return view('dashboard.dashboard', [
            "biodata" => $biodata,
            "extra" => $extra
        ]);
    }

    public function UserTerdaftar()
    {

        $extra = Extrakulikuler::all();

        $datas = DB::table('extrakulikulers')
                ->join('user_extras', 'extrakulikulers.id', '=', 'user_extras.extrakulikuler_id')
                ->join('biodatas', 'user_extras.biodata_id', '=', 'biodatas.id')
                ->select('extrakulikulers.nama_extra', 'extrakulikulers.id', 'biodatas.*')
                ->get();

        return view('dashboard.userterdaftar', [
            "datas" => $datas,
            "extra" => $extra,
            "no" => $no = 1
        ]);
    }

    public function UserFilter(Request $request)
    {

        $extra = Extrakulikuler::all();

        $datas = DB::table('extrakulikulers')
                ->join('user_extras', 'extrakulikulers.id', '=', 'user_extras.extrakulikuler_id')
                ->join('biodatas', 'user_extras.biodata_id', '=', 'biodatas.id')
                ->select('extrakulikulers.nama_extra', 'extrakulikulers.id', 'biodatas.*')
                ->where('extrakulikulers.id', '=', $request->filter)
                ->get();
        if($request->filter == "all") {

            $datas = DB::table('extrakulikulers')
                ->join('user_extras', 'extrakulikulers.id', '=', 'user_extras.extrakulikuler_id')
                ->join('biodatas', 'user_extras.biodata_id', '=', 'biodatas.id')
                ->select('extrakulikulers.nama_extra', 'extrakulikulers.id', 'biodatas.*')
                ->get();
        }
        return view('dashboard.userterdaftar', [
            "datas" => $datas,
            "extra" => $extra,
            "no" => $no = 1
        ]);
    }

    public function ShowUser($id)
    {

        $extra = DB::table('biodatas')
            ->join('user_extras', 'biodatas.id', '=', 'user_extras.biodata_id')
            ->join('extrakulikulers', 'user_extras.extrakulikuler_id', '=', 'extrakulikulers.id')
            ->select('extrakulikulers.nama_extra', 'biodatas.id')
            ->where('biodatas.id', '=', $id)
            ->get();

        return view('dashboard.showuser', [
            "extra" => $extra,
            "datas" => Biodata::find($id)
        ]);
    }

    public function DeleteUser($id)
    {
        Biodata::destroy('id', '=', $id);

        return redirect('/userterdaftar');
    }

    public function  Extra()
    {
        $category = DB::table('extrakulikulers')
                    ->join('categories', 'extrakulikulers.category_id', '=', 'categories.id')
                    ->select('categories.nama_category', 'extrakulikulers.nama_extra', 'extrakulikulers.penanggung_jawab', 'extrakulikulers.id')
                    ->get();
        return view('dashboard.extra', [
            "no" => $no = 1,
            "extra" => $category
        ]);
    }

    public function ExtraDesc($id)
    {
        return view('dashboard.showextra',[
            "data" => Extrakulikuler::find($id)
        ]);
    }

    public function DeleteExtra($id)
    {
        Extrakulikuler::destroy('id', '=', $id );

        return redirect('/dataextrakulikuler');
    }

    public function UserExtra()
    {
        $datas = DB::table('users')
                ->join('biodatas', 'users.biodata_id', '=', 'biodatas.id')
                ->join('user_extras', 'biodatas.id', '=', 'user_extras.biodata_id')
                ->join('extrakulikulers', 'user_extras.extrakulikuler_id', '=', 'extrakulikulers.id')
                ->select('extrakulikulers.nama_extra')
                ->where('users.id', '=', Auth::user()->id)
                ->get();

        $nama = DB::table('users')
                ->join('biodatas', 'users.biodata_id', '=', 'biodatas.id')
                ->select('biodatas.nama')
                ->where('users.id', '=', Auth::user()->id)
                ->get();

        return view('dashboard.userextra', [
            "extra" => $datas,
            "nama" => $nama
        ]);
    }

    public function pilExtra()
    {
        $id = auth()->user()->biodata_id;
        $extra = DB::table("extrakulikulers")->get();
        $d = DB::table("user_extras")->join("extrakulikulers","user_extras.extrakulikuler_id","extrakulikulers.id")->join("categories","extrakulikulers.category_id","categories.id")->where("biodata_id",$id)->get();
        return view("dashboard.extraPil",[
            "data" => $d,
            "extra" => 
            $extra,
            "no" => $no = 1
        ]);

    }

    public  function pilExtraPost(Request $request)
    {
        $id = auth()->user()->biodata_id;
        $i = UserExtra::where("biodata_id",$id)->where("extrakulikuler_id",$request->extra)->get();
    //    dd($i);
        if (count($i) > 0) {
                return redirect()->back()->with("error","data sudah ada");
        }

        UserExtra::create([
            "biodata_id"=>$id,
            "extrakulikuler_id"=>$request->extra

        ]);
        return redirect()->back();
         
    }

    public function ExtraPost(Request $request)
    {
        dd("a");
    }

}
