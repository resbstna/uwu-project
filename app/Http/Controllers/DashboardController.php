<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (!empty(Auth::user()->id)){
        $pengantin = DB::table('pengantin')->where('url', Auth::user()->url)->get();
        $acara = DB::table('acara')->where('cidnr', Auth::user()->id)->first();
        $rangkaian_acara = DB::table('rangkaian_acara')->where('cidnr', Auth::user()->id)->get();
        $tamu = DB::table('tamu')->where('cidnr', Auth::user()->id)->get();
        $belum_konfirmasi = DB::table('tamu')->where('cidnr', Auth::user()->id)->where('status', 'Belum Konfirmasi')->count();
        $hadir = DB::table('tamu')->where('cidnr', Auth::user()->id)->where('status', 'Hadir')->count();
        $tidak_hadir = DB::table('tamu')->where('cidnr', Auth::user()->id)->where('status', 'Tidak Hadir')->count();
        $pesan = DB::table('pesan')->where('cidnr', Auth::user()->id)->get();
        $total_tamu = $tamu->count();
        return view('dashboard',compact('pengantin','acara','rangkaian_acara','total_tamu','hadir','tidak_hadir','belum_konfirmasi','pesan'));
        }else{
            return redirect('/login');
        }
    }

    public function generate (){
        
        $image = QrCode::format('png')->merge('https://www.w3adda.com/wp-content/uploads/2019/07/laravel.png', 0.3, true)
            ->size(200)->errorCorrection('H')
            ->generate('W3Adda Laravel Tutorial');
return response($image)->header('Content-type','image/png');
    
    }
}
