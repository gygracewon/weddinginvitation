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
					<h2>Grace</h2>
					<h2>and</h2>
					<h2>John</h2>
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
							<p>PM</p>
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
							
							<p class="letterby">Grace & John</p>
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

						<form class="rsvp-form" action="demo_form.asp" method="get">
							<div>
								<p>Attendance :</p>			
								<input type="checkbox" name="attendance" class="checkbox" value="yes"><label for="">Yes</label>
								<input type="checkbox" class="checkbox" name="attendance" value="no"><label for="">No</label>
						  	</div>

						  	<div>	
						  		<input type="checkbox" name="vegeterian" class="checkbox" value="yes"> 
								<label for=""> + one </label>
						  		  		
							</div>

							<div>
							
								<input type="checkbox" name="vegeterian" class="checkbox" value="yes"> 

								<label for="">Vegeterian</label>
							</div>

							<div id="rsvp-msg">
								<label for="">Message to Grace & John : </label>
							 	<textarea name="comment" form="userform"></textarea>
							</div>
				
						   <input class="button" type="submit" value="Submit">  
						</form>

						<img class="squirly-b" src="{{asset('assets/img/deco/squirly-b.png')}}" alt="">	
					</div>

				</div>	


				<div class="photo-frame">
					<img class="frame" src="{{asset('assets/img/deco/frame.png')}}" alt="">


						<img class="wedding-photo0 wedding-photo" src="{{asset('assets/photo/wedding0.jpg')}}" alt="">

				</div>	
					<div class="arrows">
						<img class="arrow-l side-arrow" src="{{asset('assets/img/deco/arrow-l.png')}}" alt="">

						<img class="arrow-r side-arrow" src="{{asset('assets/img/deco/arrow-r.png')}}" alt="">
					</div>	

					<div class="contact">
		<!-- 				
						<img class="arrow" src="assets/img/deco/arrow.png" alt=""> -->
						<div class="bride-groom">
							<img class="heart1" src="{{asset('assets/img/deco/heart.png')}}" alt="">
							<img class="heart2" src="{{asset('assets/img/deco/heart.png')}}" alt="">
							<div>
								<img class="groom-face" src="{{asset('assets/img/deco/groom-face.png')}}" alt=""><p>021-054-0156</p>
							</div>
							<div>
							<img class="bride-face" src="{{asset('assets/img/deco/bride-face.png')}}" alt=""><p>{{Auth::user()->groom_mobile}}</p>
							</div>	
						</div>						
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