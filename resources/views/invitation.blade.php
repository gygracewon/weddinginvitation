<!DOCTYPE html>
<html class="html1"lang="en">
<head>
	<meta charset="UTF-8">
	<title>hi</title>
	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,700" rel="stylesheet">

	<link href="{{asset('/css/app.css')}}" rel="stylesheet">

</head>
<body class="border-deco">
		<img id="border-br" class="borders" src="{{asset('assets/img/border/border_BR.png')}}" alt="">
		<img id="border-bl" class="borders" src="{{asset('assets/img/border/border_BL.png')}}" alt="">
		<img id="border-tr" class="borders" src="{{asset('assets/img/border/border_TR.png')}}" alt="">
		<img id="border-tl" class="borders" src="{{asset('assets/img/border/border_TL.png')}}" alt="">
	
	<div id="container">
				<img class="welcome-deco font-deco deco" src="{{asset('assets/img/deco/font-deco.png')}}" alt="">

				<h2 id="welcome-text">you are invited to the<br>wedding of</h2>
			<img class="characters deco" src="{{asset('assets/img/deco/characters.png')}}" alt="">

			<div class="carpet1">
				<div class="names">
					<h2>{{$invitation->user->bride_firstname}}</h2>
					<h2>and</h2>
					<h2>{{$invitation->user->groom_firstname}}</h2>
				</div>

				<div class="save-date">
					<div class="save-date-title">

						<img class="deco-line" src="{{asset('assets/img/deco/doubleline-cut')}}.png" alt="">

						<img class="heart" src="{{asset('assets/img/deco/heart.png')}}" alt="">

					
						<p class="sub-title">Save the date!</p>

						<img class="heart" src="{{asset('assets/img/deco/heart.png')}}" alt="">
						<img class="deco-line" src="{{asset('assets/img/deco/doubleline-cut.png')}}" alt="">
					</div>	

					<div class="l-t-d">
						<div class="location">
							<p>{{$invitation->location}}</p>
						</div>

						<div class="divider-line"></div>

						<div class="date">

							<p>The</p>
							<p>{{$invitation->day}}</p>
							<p>rd</p>
							<p>of</p>
							<p>{{$invitation->month}}</p>	
						</div>
						
						<div class="divider-line"></div>

						<div class="time">
							<p>{{$invitation->time}}</p>
						
						</div>						
					</div>	
				</div>
				<img class="double-line" src="{{asset('assets/img/deco/doubleline.png')}}" alt="">

				<div class="dear">
					<div class="center">
						
						<img class="woodboard" src="{{asset('assets/img/deco/woodboard.png')}}" alt="">

						<h3 class="sub-title">DEAR MY FRIENDS</h3>
							
						<div class="letter">	
							<div class="letter-inside">
							<img class="sprinkle1" src="{{asset('assets/img/deco/sprinkle.png')}}" alt="">
								<p>{{$invitation->letter}}</p>
								<img class="sprinkle2" src="{{asset('assets/img/deco/sprinkle.png')}}" alt="">

							</div>
							
							<p class="letterby">{{$invitation->user->bride_firstname}} & {{$invitation->user->groom_firstname}}</p>
						</div>
					</div>		

				</div>

			</div>	

			<div class="carpet2">
				<div class="center">
					<div class="rsvp">
						<img class="squirly-l" src="{{asset('assets/img/deco/squirly-l.png')}}" alt="">
						<h2>RSVP</h2>
						<img class="squirly-r" src="{{asset('assets/img/deco/squirly-r.png')}}" alt="">

						 {!! Form::open(['url' => 'invitations/'.$invitation->id.'/'.$guest->usercode, 'method'=>'put' , 'role'=>'form' , 'class'=>'rsvp-form']) !!}
							<div>
								<p>Attendance :</p>	
								{{ Form::checkbox('attendance','1' ,['class'=>'checkbox', 'value'=>'yes']) }}
								<label for="">Yes</label>

								{{ Form::checkbox('attendance' ,'0',['class'=>'checkbox', 'value'=>'no']) }}
								<label for="">No</label>
	
						  	</div>

						  	<div>
						  		{{ Form::checkbox('invitee' ,'$guest->invitee',['class'=>'checkbox', 'value'=>'no']) }}
								<label for=""> + one </label>
						  		  		
							</div>

							<div>
							
								{{ Form::checkbox('vegeterian' ,'$guest->vegeterian',['class'=>'checkbox', 'value'=>'no']) }}

								{{-- {{ Form::checkbox('isAdmin', '1', Input::old('isAdmin'), $roles->isAdmin)) }} --}}

								<label for="">Vegeterian</label>
							</div>

							<div id="rsvp-msg">
								<label for="">Message to {{$invitation->user->bride_firstname}} & {{$invitation->user->groom_firstname}} : 
								</label>
							 	
							 	{{ Form::text('message' ,$guest->message,['form'=>'userform', 'value'=>'no']) }}

							 {{-- 	<textarea name="comment" form="userform">{{$guest->message}}</textarea>

							 	  {{ Form::text('location' ,$invitation->location, ['class'=>'form-control']) }} --}}
							</div>
				
						   <button class="button" type="submit">Submit</button>
						</form>

						<img class="squirly-b" src="{{asset('assets/img/deco/squirly-b.png')}}" alt="">	
					</div>

				</div>	


				<div class="photo-frame">
					<img class="frame" src="{{asset('assets/img/deco/frame.png')}}" alt="">


						<img class="wedding-photo0 wedding-photo" src="{{asset('assets/photo/'.$invitation->photos[0]->url)}}" alt="">

				</div>	
					<div class="arrows">
						<img class="arrow-l side-arrow" src="{{asset('assets/img/deco/arrow-l.png')}}" alt="">

						<img class="arrow-r side-arrow" src="{{asset('assets/img/deco/arrow-r.png')}}" alt="">
					</div>	

					<div class="contact">
						
					
						<div class="bride-groom">
							<img class="heart1" src="{{asset('assets/img/deco/heart.png')}}" alt="">
							<img class="heart2" src="{{asset('assets/img/deco/heart.png')}}" alt="">
							<div>
								<img class="groom-face" src="{{asset('assets/img/deco/groom-face.png')}}" alt=""><p>{{$invitation->user->groom_mobile}}</p>
							</div>
							<div>
							<img class="bride-face" src="{{asset('assets/img/deco/bride-face.png')}}" alt=""><p>{{$invitation->user->bride_mobile}}</p>
							</div>	
						</div>
						
				{{-- 		@if (Auth::check()) --}}
		                        
		                        
		                        <div style="margin-top:3em;">
		                        	 <button class="edit" type="submit">
		                        	 <a href="{{url('invitations/'.$invitation->id.'/edit')}}">
		                        	 Edit Invitation
		                        	 </a></button>
		                        </div>
		                          
		                   	 
		            {{--     @endif   --}}		
						<div class="see-you">
							<img class="leaf-l" src="{{asset('assets/img/deco/leaf-l.png')}}" alt="">

							<p>See you all there!</p>
							<img class="leaf-r" src="{{asset('assets/img/deco/leaf-r.png')}}" alt="">
						</div>	

					</div>

		

			</div>


		
	</div>	
</body>
</html>