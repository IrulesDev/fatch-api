<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class jadwalController extends Controller
{
    public function jadwal(){
        $jadwal = Http::get('https://api.myquran.com/v2/doa/acak');

        if($jadwal->successful()){
            return view('jadwal', ['jadwal' => $jadwal['data']]);
        }
        
        return response()->json(['message' => 'terjadi kesalahan']);

    }
}
