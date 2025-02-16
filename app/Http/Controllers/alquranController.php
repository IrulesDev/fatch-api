<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class alquranController extends Controller
{
    public function getalquran(){
        $ayat = Http::get('https://api.myquran.com/v2/quran/ayat/acak');

        if($ayat->failed()){
            return response()->json(['message' => 'terjadi kesalahan']);
        }

        return view('alquran', ['ayat' => $ayat['data']]);
    }

}
