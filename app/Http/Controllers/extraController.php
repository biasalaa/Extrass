<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Extrakulikuler;
use RealRashid\SweetAlert\Facades\Alert;

class extraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = DB::table('extrakulikulers')
            ->join('categories', 'extrakulikulers.category_id', '=', 'categories.id')
            ->select('categories.nama_category', 'extrakulikulers.nama_extra', 'extrakulikulers.penanggung_jawab', 'extrakulikulers.id')
            ->get();

        $c = DB::table("categories")->get();

        return view('dashboard.extra', [
            "no" => $no = 1,
            "extra" => $category,
            "category" => $c
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'nama_extra' => ['required'],
            'desc' => ['required',"min:100"],
            'pg' => ['required'],
            'category' => ['required'],
            'file' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        try {
            $name = $request->file('file')->getClientOriginalName();
            //    $path = $request->file('file')->store('public/img');

            $request->file->move(public_path('img'), $name);

            Extrakulikuler::create([
                "nama_extra" => $request->nama_extra,
                "deskripsi" => $request->desc,
                "foto" => $name,
                "penanggung_jawab" => $request->pg,
                "category_id" => $request->category
            ]);


            Alert::alert()->success('Data Berhasil Di Tambahkan');

            return redirect()->back();
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('dashboard.showextra', [
            "data" => Extrakulikuler::where('id', '=', $id)->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('extrakulikulers')->select('extrakulikulers.*')->where('id', $id)->first();
        $category = DB::table('categories')->select('categories.*')->get();

        return view("dashboard.editExtra", [
            "data" => $data,
            "category" => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_extra' => ['required'],
            'desc' => ['required',"max:100"],
            'pg' => ['required'],
            'category' => ['required'],
<<<<<<< HEAD
            'file' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
=======
            'file' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
           ]);
>>>>>>> b80cc331b97d1b6f2aded8189768772dfe7c1c49


        if ($request->file == null) {
            Extrakulikuler::where("id", $id)->update([
                "nama_extra" => $request->nama_extra,
                "deskripsi" => $request->desc,
                "penanggung_jawab" => $request->pg,
                "category_id" => $request->category
            ]);

            Alert::alert()->success('Data Berhasil Di Edit');

            return redirect('/dataextrakulikuler');
        }

        $name = $request->file('file')->getClientOriginalName();
        //    $path = $request->file('file')->store('public/img');

        $request->file->move(public_path('img'), $name);


        Extrakulikuler::where("id", $id)->update([
            "nama_extra" => $request->nama_extra,
            "deskripsi" => $request->desc,
            "foto" => $name,
            "penanggung_jawab" => $request->pg,
            "category_id" => $request->category
        ]);

        Alert::alert()->success('Data Berhasil Di Edit');

        return redirect('/dataextrakulikuler');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        Alert::alert()->success('Data Berhasil Di Hapus');

        DB::table('extrakulikulers')->where('id', $id)->delete();

        return redirect()->back();
    }
}
