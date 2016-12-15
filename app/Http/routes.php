<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// imports the post model so that we can use it in the /save route
// use App\Post;



Route::get('users/{id}', function ($id) {

	$user = App\Models\User::find($id);

    return view('adminprofile', ['user'=>$user]);
});

Route::get('invitations/create',function(){
    return view('createinvitation');
});

// Route::get('invitations/{id}', function($id) {

// 	$userCode = '76535786';

// 	$guest = App\Models\Guest::where('usercode',$userCode)->first();

//    	$invitation = App\Models\Invitation::find($id);

//     return view('invitation',['invitation'=>$invitation,'guest'=>$guest]);
// });

Route::get('invitations/{id}', function($id) {

	$userCode = '76535786';

	$guest = App\Models\Guest::where('usercode',$userCode)->first();

   	$invitation = App\Models\Invitation::find($id);

    return view('invitation',['invitation'=>$invitation,'guest'=>$guest]);
});

Route::post('invitations',function(){
	//1: Getting input
	$input = Request::all();
	//2: Create Validation rules
	$rules = [
		'location'=>'required',
		'day'=>'required', 
		'month'=>'required',
		'time'=>'required',
		'letter'=>'required',
	
	];
	//3:Create validator
	$validator = Validator::make($input,$rules);

	//4: Use validator to check for input
	if($validator->passes() == true){

		$invitation = App\Models\Invitation::create($input);

		if(Request::hasFile('photos')){

			$newName = 'wedding'.$invitation->id.'.jpg';
		 	Request::file('photos')->move('assets/photo',$newName);

            $photo = new App\Models\Photo();
            $photo->url = $newName;
            $photo->invitation_id = $invitation->id;
            $photo->save();
		}

		return redirect ('/invitations/'.$invitation->id);

	}else{

		return redirect('invitations/create')->withInput()->withErrors($validator);
	}

});

Route::get('invitations/{id}/edit', function ($id) {

	$invitation = App\Models\Invitation::find($id);

    return view('editinvitation',['invitation'=>$invitation]);
});

Route::put('invitations/{id}', function ($id) {

	//1: Getting input
	$input = Request::all();
	//2: Create Validation rules
	$rules = [
		'location'=>'required',
		'day'=>'required', 
		'month'=>'required',
		'time'=>'required',
		'letter'=>'required',
		'photo'=>'required',
	];
	//3:Create validator
	$validator = Validator::make($input,$rules);

	//4: Use validator to check for input
	if($validator->passes() == true){

		$invitation = App\Models\Invitation::find($id);


		if(Request::hasFile('photos')){

			$newName = 'wedding'.$invitation->id.'.jpg';
		 	Request::file('photos')->move('assets/photo',$newName);

            $photo = new App\Models\Photo();
            $photo->url = $newName;
            $photo->invitation_id = $invitation->id;
            $photo->save();
		}

		$invitation->fill($input);

		$invitation->save();

		return redirect ('/invitations/'.$invitation->id);
		// ->with('message', 'Try again');

	}else{
		return redirect('invitations/'.$invitation->id.'edit')->withInput()->withErrors($validator);
	}

});


Route::put('invitations/{id}', function ($id){

	//1: Getting input
	$input = Request::all();
	//2: Create Validation rules
	$rules = [
		'attendance'=>'required',
		'invitee'=>'required', 
		'vegeterian'=>'required',
		'message'=>'required',
	];
	//3:Create validator
	$validator = Validator::make($input,$rules);

	//4: Use validator to check for input
	if($validator->passes() == true){

		$guest = App\Models\Guest::find($id);

		$guest->save();

		return redirect ('/invitations/'.$invitation->id);
		// ->with('message', 'Try again');

	}else{
		return redirect('invitations/'.$invitation->id)->withInput()->withErrors($validator);
	}
});


Route::get('guests/create', function(){

	return view('createguest');
});

Route::post('guests', function(){

	//1: Getting input
	$input = Request::all();
	//2: Create Validation rules
	$rules = [
		'usercode'=>'required',
		'first_name'=>'required', 
		'last_name'=>'required',
	];
	//3:Create validator
	$validator = Validator::make($input,$rules);

	//4: Use validator to check for input
	if($validator->passes() == true){

		$guest = App\Models\Guest::create($input);

		$guest->save();

		return redirect ('guests/1');

		// return redirect ('guests/'.$invitation->guest->id);

	}else{

		return redirect('guests/create')->withInput()->withErrors($validator);
	}
});



Route::get('guests/{id}', function($id){
	
	$invitation = App\Models\Invitation::find($id);

	return view('viewguest', ['invitation'=>$invitation]);
});

// Route::put('invitation/{id}', function($id){

// 	$input = Request::all();

// 	$invitation = App\Invitation::find($id);

// 	$invitation->fill($input);

// 	$invitation->save();

// 	return redirect('/invitation/'.$id);
	
// 	$newname = 'photo_'.$photo->id.'.jpg';

// 	Request::file('photo')->move 
// });


// Route::get('login', function(){
// 	//To show login form
// 	return view('adminlogin');

// });

// Route::post('login', function(){
// 	//1.Get user input to login
// 	$input = Request::only('username','password');

// 	//2.Ask Auth to check for correct login input
// 	if(Auth::attempt($input) == true){

// 		return redirect('user/1');
// 	}else{
// 		return redirect('login');
// 	};
// });
// // ->with('message', 'Try again');



// Route::put('invitations/{id}/{usercode}', function($id,$usercode) {

// 	return ''
// });

Route::get('messages/{id}', function($id){

	$invitation = App\Models\Invitation::find($id);
	return view('guestmessage', ['invitation'=>'$invitation']);
});
//---------------------------LOGIN-------------------------------------//


Route::get('login','LoginController@showLoginForm');
Route::post('login','LoginController@processLogin');
Route::get('logout','LoginController@logout');







