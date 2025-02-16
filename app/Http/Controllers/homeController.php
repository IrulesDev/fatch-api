<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    public function users(){
        $data = DB::table('users')->get();

        return view('user', ['users' => $data]);
    }
}
