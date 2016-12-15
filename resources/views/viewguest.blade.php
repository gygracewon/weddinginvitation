@extends('admintemplate')
@section('content')

                <!-- content--> 
    <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           View guests
                        </h1>

                          <ol class="breadcrumb">
                            <li class="active">
                                 Total guests you invited : {{$invitation->guests()->count()}}
                            </li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">

                        <div class="table-responsive">
                        
                        <div class="col-lg-9">
                            <h3>12 guest have seen invitation</h3>
                            <h3>{{$invitation->guests()->where('invitee',1)->count()}} invitees are coming </h3>
                            <h3>{{$invitation->guests()->where('attendance',1)->count()}} guests are coming</h3>
                            <h3>{{$invitation->guests()->where('vegeterian',1)->count()}} guests are vegeterian</h3>

                          
                        </div>

                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Seen or not</th>
                                        <th>Usercode</th>
                                        <th>Firstname</th>
                                        <th>Lastname</th>
                                        {{-- <th>Email</th> --}}
                                        <th>Attendance</th>
                                        <th>+ one</th>
                                        <th>Vegeterian</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach (App\Models\Guest::all() as $guest)
                                    <tr>
                                        <td></td>
                                        <td>#{{$guest->usercode}}</td>
                                        <td>{{$guest->first_name}}</td>
                                        <td>{{$guest->last_name}}</td>
                                       {{--  <td>{{$guest->email}}</td> --}}
                                        <td>{{$guest->attendance}}</td>
                                        <td>{{$guest->invitee}}</td>
                                        <td>{{$guest->vegeterian}}</td>
                                        <td><a href=""><i class="fa fa-times"></i></a></td> 
                                    </tr>
                                @endforeach    
                                    
                                </tbody>
                            </table>
                        </div>  

                         <button class="btn btn-default"><a href="{{url('guests/create')}}">Add new guest</a></button>
                    

                       
                    </div>
                </div>
               <!-- /.row-fluid -->

               <!-- content end--> 
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
@endsection