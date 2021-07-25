<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tampilan;
use App\Models\Acara;
use Illuminate\Support\Facades\DB;
use Auth;

class TampilanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $tampilan = DB::table('tampilan')->where('user_id', Auth::user()->id)->first();
        $acara = DB::table('acara')->where('cidnr', Auth::user()->id)->first();
        $maps = DB::table('tampilan')->where('user_id',Auth::user()->id)->value('maps');
        $myArray = explode(',', $maps);
      $lat =(float)$myArray[0];
      $long = (float)$myArray[1];
        return view('edit_undangan',compact('tampilan','acara','lat','long'));
    }

    public function index2(Request $request, $url)
    {

        $tampilan = DB::table('tampilan')->where('url', $url)->first();
        $acara = DB::table('acara')->where('url', $url)->first();
        $maps = DB::table('tampilan')->where('url', $url)->value('maps');
        return view('template-undangan', compact('tampilan','acara','maps'));
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
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $imageName = time().'.'.$request->background->extension();  
     
        $request->background->move(public_path('index/images/tamu/'), $imageName);

      $tampilan = new Tampilan; 
      $tampilan->judul = $request->judul;
      $tampilan->background_header = $request->background;
      $tampilan->teks_atas = $request->teks_atas;
      $tampilan->teks_bawah = $request->teks_bawah;
      $tampilan->countdown = $request->countdown;
      $tampilan->story_judul = $request->story_judul;
      $tampilan->story_subjudul = $request->story_subjudul;
      $tampilan->gallery = $request->gallery;
      $tampilan->CPP = $request->CPP;
      $tampilan->CPW = $request->CPW;
      $tampilan->user_id = Auth::user()->id;
      $tampilan->save();
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
        
        $tampilan = Tampilan::find($id);
        if ($request->hasFile('image')) {
        $file = $request->file('image');
 
        // nama file
  echo 'File Name: '.$file->getClientOriginalName();
  echo '<br>';

        // ekstensi file
  echo 'File Extension: '.$file->getClientOriginalExtension();
  echo '<br>';

        // real path
  echo 'File Real Path: '.$file->getRealPath();
  echo '<br>';

        // ukuran file
  echo 'File Size: '.$file->getSize();
  echo '<br>';

        // tipe mime
  echo 'File Mime Type: '.$file->getMimeType();

        // isi dengan nama folder tempat kemana file diupload
  $tujuan_upload = 'index/images/background/';
  $file->move($tujuan_upload,$file->getClientOriginalName());
  $tampilan->background_header = $file->getClientOriginalName();
        }


        if ($request->hasFile('foto_cpp')) {
  $foto_cpp = $request->file('foto_cpp');
 
  // nama file
echo 'File Name: '.$foto_cpp->getClientOriginalName();
echo '<br>';

  // ekstensi file
echo 'File Extension: '.$foto_cpp->getClientOriginalExtension();
echo '<br>';

  // real path
echo 'File Real Path: '.$foto_cpp->getRealPath();
echo '<br>';

  // ukuran file
echo 'File Size: '.$foto_cpp->getSize();
echo '<br>';

  // tipe mime
echo 'File Mime Type: '.$foto_cpp->getMimeType();

  // isi dengan nama folder tempat kemana file diupload
$tujuan_upload = 'index/images/pasangan/';
$foto_cpp->move($tujuan_upload,$foto_cpp->getClientOriginalName());
$tampilan->foto_cpp = $foto_cpp->getClientOriginalName();
}


if ($request->hasFile('foto_cpw')) {
    $image_cpw = $request->file('foto_cpw');
   
    // nama file
  echo 'File Name: '.$image_cpw->getClientOriginalName();
  echo '<br>';
  
    // ekstensi file
  echo 'File Extension: '.$image_cpw->getClientOriginalExtension();
  echo '<br>';
  
    // real path
  echo 'File Real Path: '.$image_cpw->getRealPath();
  echo '<br>';
  
    // ukuran file
  echo 'File Size: '.$image_cpw->getSize();
  echo '<br>';
  
    // tipe mime
  echo 'File Mime Type: '.$image_cpw->getMimeType();
  
    // isi dengan nama folder tempat kemana file diupload
  $tujuan_upload = 'index/images/pasangan/';
  $image_cpw->move($tujuan_upload,$image_cpw->getClientOriginalName());
  $tampilan->foto_cpw = $image_cpw->getClientOriginalName();
  }

        $tampilan->judul_header = $request->judul_header;
        $tampilan->judul_hero = $request->judul_hero;
        $tampilan->sub_judul_hero = $request->sub_judul_hero;
        $tampilan->CPP = $request->CPP;
        $tampilan->keterangan_cpp = $request->keterangan_cpp;
        $tampilan->CPW = $request->CPW;
        $tampilan->keterangan_cpw = $request->keterangan_cpw;
        $tampilan->countdown = $request->countdown;
        $tampilan->maps = $request->lat . ',' . $request->long ;
        $tampilan->user_id = Auth::user()->id;
        $tampilan->save();

		DB::table('acara')
        ->where('id', $request->id_acara)
        ->update(['alamat_akadnikah' => $request->alamat_akadnikah, 'waktu_awal_an' => $request->waktu_awal_an, 'waktu_akhir_an' => $request->waktu_akhir_an, 'alamat_rs' => $request->alamat_rs, 'waktu_awal_rs' => $request->waktu_awal_rs, 'waktu_akhir_rs' => $request->waktu_akhir_rs ]);

        return redirect('/undangan');
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
