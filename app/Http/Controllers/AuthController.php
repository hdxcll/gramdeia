<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class AuthController extends Controller
{
    //
    //fungsi untuk melakukan proses autentikasi login
public function authenticate(Request $request){
    
  //saat submit, data dimasukkan kedalam array untuk ditata
  $this->validate($request,[
    'email' => 'required|min:10',
    'password' => 'required|min:8|max:12',
  ]);

  $data = [
      'email' => $request->email,
      'password' => $request->password,
      
    ];


//didalam if, terdapat ‘Auth::Attempt($data)’ yang berfungsi    melakukan autentikasi 
  if (Auth::Attempt($data)) {
      return redirect('home');
  }else{
      Session::flash('error', 'Email atau Password Salah');
      return redirect('/');
  }
}

//fungsi untuk melakukan proses logout user
public function logout(Request $request){
  Auth::logout();
  request()->session()->invalidate();
  request()->session()->regenerateToken();
  return redirect('/gramedia');
}


}
