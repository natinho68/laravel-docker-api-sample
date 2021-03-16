<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (User::create([
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
            'name' => $request->get('name'),
        ])) {
            return response()->json([
                'success' => 'user has been created'
            ], 201);
        }
    }
}
