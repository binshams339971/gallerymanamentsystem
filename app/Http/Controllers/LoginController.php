<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
   function index(){
		return view('login.index');
	}

	function verify(Request $request){
		$users = User::where('username', $request->username)
					->where('password', $request->password)
					->get();
		if(count($users) > 0){
			$request->session()->put('username', $request->username);
			return redirect()->route('home.index');
		}else{
			$request->session()->flash('msg', 'invalid username/password');
			return redirect()->route('login.index');
		}	
	}
}
