<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tamu;
use Auth;
use Ramsey\Uuid\Uuid;
use App\Exports\TamuExport;
use App\Exports\TemplateExport;
use App\Imports\TamuImport;
use Maatwebsite\Excel\Facades\Excel;

class TamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Tamu::latest()->get();

        return view('tamu', compact('data'));
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
        $uuid1 = Uuid::uuid1();
        $uuid = $uuid1->toString();
        $id = Auth::user()->id;
        $tamu = new Tamu; 
        $tamu->cidnr = Auth::user()->id;
        $tamu->uuid = $uuid1->toString();
        $tamu->name = $request->nama;
        $tamu->email = $request->email;
        $tamu->telph = $request->no_telp;
        $tamu->addrs = $request->alamat;
        $tamu->status = 'Belum Konfirmasi';
        $tamu->save();
        // menangkap file excel
		$file = $request->file('file');
 
		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();
 
		// upload ke folder file_siswa di dalam folder public
		$file->move('index/images/tamu/',$nama_file);
 
		// import data
		Excel::import(new TamuImport($uuid,$id), public_path('index/images/tamu/'.$nama_file));
        return redirect('/tamu');
    }

    public function export() 
    {
        $id =  Auth::user()->id;
        return Excel::download(new TamuExport($id), 'tamu.xlsx');
    }

    public function export_template() 
    {
        return Excel::download(new TemplateExport, 'tamu.xlsx');
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
