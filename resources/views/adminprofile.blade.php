@extends('admintemplate')
@section('content')  

         <div id="page-wrapper">

            <div class="container-fluid"> 

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Edit Profile <small> Grace & John</small>
                        </h1>
  
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3">
                        {!! Form::open(['url' => 'user/'.$user->id, 'method'=>'put' , 'role'=>'form']) !!}

                            <div class="form-group">
                                 <label>Username</label>
                                {{ Form::text('username' ,$user->username, ['class'=>'form-control']) }}
                                
                                <label>Password</label>
                                {{ Form::text('password' ,$user->password, ['class'=>'form-control']) }}
                                
                                <label>Bride's Firstname</label>
                                {{ Form::text('bride_firstname' ,$user->bride_firstname, ['class'=>'form-control']) }}

                                <label>Bride's Lastname</label>
                                {{ Form::text('bride_lastname' ,$user->bride_lastname, ['class'=>'form-control']) }}

                                <label>Groom's Firstname</label>
                                {{ Form::text('groom_firstname' ,$user->groom_firstname, ['class'=>'form-control']) }}

                                <label>Groom's Lastname</label>
                                {{ Form::text('groom_lastname' ,$user->groom_lastname, ['class'=>'form-control']) }}

                                 <label>Bride's Mobile</label>
                                {{ Form::text('bride_mobile' ,$user->bride_mobile, ['class'=>'form-control']) }}

                                 <label>Groom's Mobile</label>
                                {{ Form::text('groom_mobile' ,$user->groom_mobile, ['class'=>'form-control']) }}
                                
                                <label>Email</label>
                                {{ Form::text('email' ,$user->email, ['class'=>'form-control']) }}

                            </div>
                                {{ Form::submit('Submit',['class'=>'btn btn-primary']) }}

                          {!! Form::close() !!}
                    </div>         
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->


  @endsection