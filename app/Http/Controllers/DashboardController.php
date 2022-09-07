<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Biodata;
use App\Models\Extrakulikuler;
use App\Models\UserExtra;
use RealRashid\SweetAlert\Facades\Alert;


class DashboardController extends Controller
{

    public function dashboard()
    {
        $biodata = Biodata::where('id', '>', 1)->count();
        $extra = Extrakulikuler::all()->count();
        // $extraAll = Extrakulikuler::all();




        return view('dashboard.dashboard', [
            "biodata" => $biodata,
            "extra" => $extra,
        ]);
    }

    public function UserTerdaftar()
    {

        $extra = Extrakulikuler::all();

        $datas = DB::table('extrakulikulers')
            ->join('user_extras', 'extrakulikulers.id', '=', 'user_extras.extrakulikuler_id')
            ->join('biodatas', 'user_extras.biodata_id', '=', 'biodatas.id')
            ->select('extrakulikulers.nama_extra', 'user_extras.p', 'biodatas.*')
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
            ->select('extrakulikulers.nama_extra', 'extrakulikulers.id', 'biodatas.*', 'user_extras.p')
            ->where('extrakulikulers.id', '=', $request->filter)
            ->get();
        if ($request->filter == "all") {

            $datas = DB::table('extrakulikulers')
                ->join('user_extras', 'extrakulikulers.id', '=', 'user_extras.extrakulikuler_id')
                ->join('biodatas', 'user_extras.biodata_id', '=', 'biodatas.id')
                ->select('extrakulikulers.nama_extra', 'extrakulikulers.id', 'biodatas.*', 'user_extras.p')
                ->get();
        }
        return view('dashboard.userterdaftar', [
            "datas" => $datas,
            "req" => $request->filter,
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

    public function EditUser($p)
    {
        $data = DB::table('user_extras')
            ->join('biodatas', 'user_extras.biodata_id', '=', 'biodatas.id')
            ->join('extrakulikulers', 'user_extras.extrakulikuler_id', '=', 'extrakulikulers.id')
            ->select('biodatas.nama', 'user_extras.extrakulikuler_id', 'user_extras.p')
            ->where('user_extras.p', '=', $p)
            ->first();
        $extra = DB::table('extrakulikulers')->select('extrakulikulers.nama_extra', 'extrakulikulers.id')->get();
        return view('dashboard.edituserterdaftar', [
            "data" => $data,
            "extra" => $extra
        ]);
    }

    public function EditUserTerdaftar(Request $request, $p)
    {
        $validateData = $request->validate([
            "extra" => ['required'],
        ]);
        $e = DB::table("user_extras")->where("p", $p)->where("extrakulikuler_id", $request->extra)->count();
        $idUser = DB::table("user_extras")->where("p", $p)->first();
        $es = DB::table("user_extras")->where("extrakulikuler_id", $request->extra)->where("biodata_id", $idUser->biodata_id)->count();

        if ($e > 0) {
            Alert::alert()->success('Data Sudah Ada');
            return redirect('/userterdaftar');
        } elseif ($es > 0) {
            Alert::alert()->success('Data Sudah Ada');

            return redirect('/userterdaftar');
        } else {

            DB::table('user_extras')->where('p', $p)->update([
                "extrakulikuler_id" => $request->extra
            ]);

            Alert::alert()->success('Data Berhasil Di Edit');

            return redirect('/userterdaftar');
        }
    }

    public function DeleteUser($p)
    {
        DB::table('user_extras')->where('p', $p)->delete();

        return redirect()->back();
    }

    public function Extra()
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
        return view('dashboard.showextra', [
            "data" => Extrakulikuler::find($id)
        ]);
    }

    public function DeleteExtra($id)
    {
        Extrakulikuler::destroy('id', '=', $id);

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
        $d = DB::table("user_extras")->join("extrakulikulers", "user_extras.extrakulikuler_id", "extrakulikulers.id")->join("categories", "extrakulikulers.category_id", "categories.id")->where("biodata_id", $id)->get();

        return view("dashboard.extraPil", [
            "data" => $d,
            "extra" =>
            $extra,
            "no" => $no = 1
        ]);
    }

    public  function pilExtraPost(Request $request)
    {
        $id = auth()->user()->biodata_id;
        $i = UserExtra::where("biodata_id", $id)->where("extrakulikuler_id", $request->extra)->get();
        //    dd($i);
        if (count($i) > 0) {
            Alert::alert()->error('Data Sudah Terdaftar');

            return redirect()->back();
        } else {

            UserExtra::create([
                "biodata_id" => $id,
                "extrakulikuler_id" => $request->extra

            ]);
        }

        Alert::alert()->success('Berhasil Mendaftar');

        return redirect()->back();
    }

    public function editProfil()
    {
        $data = DB::table("biodatas")->where('id', Auth::user()->id)->first();
        return view('dashboard.editprofil', compact("data"));
    }
    public function updateProfil(Request $request, $id)
    {

        $request->validate([]);
        DB::table("biodatas")->where("id", $id)->update([
            "nama" => $request->nama,
            "nohp" => $request->hp,
            "alamat" => $request->alamat
        ]);

        Alert::alert()->success('Berhasil Di Simpan');

        return redirect("/dashboard");
    }
}
