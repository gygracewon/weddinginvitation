
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Grace & John</title>

    <!-- Bootstrap Core CSS -->
     <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('assets/css/sb-admin.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">


</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"> Hello, Grace & John</a>

            </div>
           

            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="adminprofile.html"><i class="fa fa-user"></i> Edit Profile</a>
                    </li>

                    <li class="active">
                        <a href="{{url('invitations/create')}}"><i class="fa fa-plus"></i> Create Invitation</a>
                    </li>

                    {{--  <li>
                        <a href="{{url('invitations/'.$invitation->id.'/edit')}}"><i class="fa fa-fw fa-wrench"></i> Edit Inivitation</a>
                    </li>
              
                    <li>
                        <a href="{{url('guests/'.$invitation->id)}}"><i class="fa fa-fw fa-eye"></i> View Guests</a>
                    </li> --}}
                    <li>
                        <a href="{{url('guests/create')}}"><i class="fa fa-fw fa-users"></i> Create Guests</a>
                    </li>

                    <li>
                       {{--  @foreach(App\Models\Invitation::all() as $Invitation)
 --}}
                        <a href="{{url('message/'.$invitation->id)}}"><i class="fa fa-fw fa-comment"></i> Message from Guests</a>
                    </li>
                     
                    </li>
                    <li>
                        <a href="sendemail.html"><i class="fa fa-fw fa-envelope"></i> Send Notification</a>
                    </li>

                    @if (Auth::check())
                        <li>
                            <a href="{{url('logout')}}">Logout</a> 
                        </li> 
                    @else 
                        <li>    
                            <a href="{{url('adminlogin')}}">Login</a>
                        </li>
                    @endif    

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        
        <!-- /#page-wrapper -->
        @yield('content')

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


</body>

</html>