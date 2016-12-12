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
use Illuminate\Http\Request;
//imports the post model so that we can use it in the /save route
use App\Post;

Route::get('/', function () {
    return view('adminprofile');
});


Route::get('edit-invitation', function () {
    return view('editinvitation');
});




Route::get('/email-noti', function () {
    return view('emailnotification');
});



Route::get('/test', function (){
	

	// $guest = App\Models\Guest::all();
	// return $guest;

	$invitation = App\Models\Invitation::all();
	return $invitation;
	// return view('invitation');

	// //pagination
	// $guest = App\Models\guest::paginate(1);
	// //view data binding inside view
 //    return view('invitation', ['invitations'=>$invitation]);

});

// Route::get('/1', function (){

// 	//comment test
// 	$guest = App\Models\Guest::where('id','=',1)->get();
// 	return $guest;
// 	//post test
// 	$invitation = App\Models\Invitation::all();
// 	return $invitation;
	
// 	// test comment of post 1
// 	return App\Models\Post::find(1)->invitation;


	
// });

Route::get('invitation/{id}', function($id) {

   	$invitation = App\Models\Invitation::find($id);

    return view('invitation',['invitation'=>$invitation]);
});

Route::get('')



