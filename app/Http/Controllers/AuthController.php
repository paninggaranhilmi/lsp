<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
Use Validator;
use Hash;
Use Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $rules = array(
            'email' => 'required|string|email',
            'password' => 'required|string|min:7'
        );

        $cek = Validator::make($request->all(),$rules);

        if ($cek->fails()) {
            $errorString = implode(",",$cek->messages()->all());
            return redirect()->route('awal')->with('warning',$errorString);
        } else {
            if (Auth::attemp($request->only('email','password'))) {
                $user = User::where('email',$request->email)->first();
                // $roles = $user->getRoleNames();
                // if ($roles[0] == 'admin') {
                    return redirect()->route('dashboard');
                // } else {
                //     return redirect()->route('dashboardUser');
                // }
                
            } else {
                return redirect()->route('login')->with('warning', "Email / Password anda salah");
            }
            
        }
        
    }
}
