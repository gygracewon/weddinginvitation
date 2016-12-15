<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

use Request as FormRequest;

class LoginController extends Controller
{
    //
    public function showLoginForm(){
    	//To show login form
		return view('adminlogin');


    }
    public function processLogin(){

    	//To process the form submission

		//1:Get user input to login
		$input = FormRequest::only('username','password');

		//2: Ask Auth to check for correct login input
		if(Auth::attempt($input) == true){
			//go to congrats
			return redirect('users/1');
		}else{
			//go back to login form with errors
			return redirect('login')->with('message','Try again');	
		}
    	
    }

    public function logout(){

    	Auth::logout(); // remove current user from Session

		return redirect('login');
    	
    }
}
