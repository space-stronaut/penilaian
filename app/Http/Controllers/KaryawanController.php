<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawans = Karyawan::all();

        return view('karyawans.index', compact('karyawans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('karyawans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $karyawans = Karyawan::create([
            "nik" => $request->nik,
            "nama" => $request->nama,
            "tanggal_lahir" => $request->tanggal_lahir,
            "jenis_kelamin" => $request->jenis_kelamin,
            "alamat" => $request->alamat,
        ]);

        if($request->hasFile('photo')){
          $file = $request->file('photo');

          $imgName = rand().'.'.$file->getClientOriginalExtension();

          $file->move('img', $imgName);

          $karyawans->photo = $imgName;
        }

        $karyawans->save();

        return redirect('/karyawan');
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
        $karyawan = Karyawan::find($id);

        return view('karyawans.edit', compact('karyawan'));
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
        Karyawan::find($id)->update([
            "nik" => $request->nik,
            "nama" => $request->nama,
            "tanggal_lahir" => $request->tanggal_lahir,
            "jenis_kelamin" => $request->jenis_kelamin,
            "alamat" => $request->alamat,
        ]);

        if($request->hasFile('photo')){
          $file = $request->file('photo');

          $imgName = rand().'.'.$file->getClientOriginalExtension();

          $file->move('img', $imgName);

          $karyawans->photo = $imgName;
        }

        $karyawans->save();

        return redirect('/karyawan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Karyawan::find($id)->delete();

        return redirect()->back();
    }
}
