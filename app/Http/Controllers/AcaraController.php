<?php

namespace App\Http\Controllers;

use App\Models\Acara;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AcaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store_akadnikah(Request $request)
    {
        $acara = new Acara; 
        $acara->cidnr = Auth::user()->id;
        $acara->url = Auth::user()->url;
        $acara->tanggal_an = $request->tanggal_an;
        $acara->waktu_awal_an = $request->waktu_awal_an;
        $acara->waktu_akhir_an = $request->waktu_akhir_an;
        $acara->alamat_akadnikah = $request->alamat_akadnikah;
        $acara->save();
        return redirect('/dashboard');
    }

    public function store_resepsi(Request $request)
    {
        if($request->id){
            DB::table('acara')
        ->where('id', $request->id)
        ->update(['tanggal_rs' => $request->tanggal_rs, 'waktu_awal_rs' => $request->tanggal_rs, 'waktu_awal_rs' => $request->waktu_awal_rs, 'waktu_akhir_rs' => $request->waktu_akhir_rs, 'alamat_rs' => $request->alamat_rs ]);
        }else{

            $acara = new Acara; 
            $acara->cidnr = Auth::user()->id;
            $acara->url = Auth::user()->url;
            $acara->tanggal_rs = $request->tanggal_rs;
            $acara->waktu_awal_rs = $request->waktu_awal_rs;
            $acara->waktu_akhir_rs = $request->waktu_akhir_rs;
            $acara->alamat_rs = $request->alamat_rs;
            $acara->save();
        }
        return redirect('/dashboard');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
