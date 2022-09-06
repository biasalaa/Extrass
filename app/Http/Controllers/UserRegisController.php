<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserRegisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = DB::table('biodatas')
                    ->join('users', 'biodatas.id', '=', 'users.biodata_id')
                    ->where('biodatas.id', '>', 1)
                    ->select('biodatas.*', 'users.username')
                    ->get();

        return view('dashboard.userregis', [
            "datas" => $datas,
            "no" => $no = 1
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('biodatas')
                    ->join('users', 'biodatas.id', '=', 'users.biodata_id')
                    ->where('biodatas.id', $id)
                    ->select('biodatas.*', 'users.username')
                    ->first();
        return view('dashboard.edituser', [
            "data" => $data
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
        $validateData = $request->validate([
            "nama" => ['required'],
            "nohp" => ['required'],
            "alamat" => ['required'],
            "username" => ['required'],
        ]);
        $username = DB::table('users')->select('username')->where('biodata_id', $id)->first();

        if($request->password == null) {
           if (!($request->username == $username)) {
                DB::table('users')->where('biodata_id', $id)->update([
                    "username" => $validateData['username']
            ]);
           }
        }

        if(!($request->password == null)) {
            $password = bcrypt($request->password);

            if (!($request->username == $username)) {
                DB::table('users')->where('biodata_id', $id)->update([
                    "username" => $validateData['username'],
                    "password" => $password
               ]);
           }

           DB::table('users')->where('biodata_id', $id)->update([
            "password" => $password
            ]);
         }

        DB::table('biodatas')->where('id', $id)->update([
            "nama" => $request->nama,
            "nohp" => $request->nohp,
            "alamat" => $request->alamat
        ]);


        return redirect('userregister');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('biodatas')->where('id', $id)->delete();

        return redirect()->back();
    }
}
