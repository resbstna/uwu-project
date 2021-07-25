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
        $total_tamu = $tamu->count();
        return view('dashboard',compact('pengantin','acara','rangkaian_acara','total_tamu'));
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
