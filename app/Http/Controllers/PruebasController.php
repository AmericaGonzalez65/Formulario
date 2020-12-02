<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Suport\Facades\Hash;

class PruebasController extends Controller
{
    //
    public function login (){
        return view ('index')
    }

    public function validarLogin (Request $request){
        $user = $request->input ('user');
        $pass = $request->input('password');
        $key = Hash::make($request->input('key'));

        if ($user === 'AmericaGonzalez'){
            $url='login';
        } else {
            $url='error';
        }
        return view ($url, [
            'user'=>$request->input('user'),
            'key'=>$key
        ]);
}
