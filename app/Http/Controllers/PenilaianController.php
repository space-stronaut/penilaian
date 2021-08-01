<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use App\Models\Karyawan;
use App\Models\Penilaian;
use Illuminate\Http\Request;

class PenilaianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penilaians = Penilaian::all();

        return view('penilaians.index', compact('penilaians'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $karyawans = Karyawan::all();
        $details = Detail::all();

        return view('penilaians.create', compact('karyawans', 'details'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Penilaian::create([
            "karyawan_id" => $request->karyawan_id,
            "kedisiplinan" => $request->kedisiplinan,
            "komitmen" => $request->komitmen,
            "kepatuhan" => $request->kepatuhan,
            "tanggal" => $request->tanggal,
        ]);

        return redirect('/penilaian');
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
        $penilaian = Penilaian::find($id);
        $karyawans = Karyawan::all();
        $details = Detail::all();

        return view('penilaians.edit', compact('penilaian', 'karyawans', 'details'));
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
      Penilaian::find($id)->update([
          "karyawan_id" => $request->karyawan_id,
          "kedisiplinan" => $request->kedisiplinan,
          "komitmen" => $request->komitmen,
          "kepatuhan" => $request->kepatuhan,
          "tanggal" => $request->tanggal,
      ]);

        return redirect('/penilaian');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Penilaian::find($id)->delete();

        return redirect()->back();
    }

    public function search(Request $request)
    {
      $cari = $request->cari;

      $penilaians = Penilaian::where('tanggal', 'like', '%'.$cari.'%')->get();

      return view('penilaians.index', compact('penilaians'));
    }
}
