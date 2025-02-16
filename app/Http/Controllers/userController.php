<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'nullable',
            'password' => 'required',
        ]);

        $user = User::create($request->all());

        return response()->json(['message' => 'User created'. $user . 'successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::findOrFail($id);

        if(!$user){
            return response()->json(['message' => 'User not found']);
        }
        return response()->json($user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        if(!$user){
            return response()->json(['message' => 'User not found']);
        }
        $dataUser = $request->validate([
            'name' => 'required',
            'email' => 'nullable',
            'password' => 'required',
        ]);

        $user->update($dataUser);

        return response()->json(['message' => 'User updated'. $user . 'successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);

        if(!$user){
            return response()->json(['message' => 'User not found']);
        }

        $user->delete();

        return response()->json(['message' => 'User deleted'. $user . 'successfully']);
    }
}
