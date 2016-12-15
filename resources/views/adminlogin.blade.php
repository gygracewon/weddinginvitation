@extends('admintemplate')
@section('content')

	<div id="page-wrapper">

            <div class="container-fluid"> 

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            login 
                        </h1>
  
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3">
                       {!! Form::open(['url' => 'login']) !!}

                            <div class="form-group">
                                 <label>Username</label>
                                {{ Form::text('username','',['class'=>'form-control']) }}
                                
                                <label>Password</label>
                                {{ Form::password('password','',['class'=>'form-control']) }}
                                
                            </div>
                                {{ Form::submit('Submit',['class'=>'btn btn-primary']) }}

                          {!! Form::close() !!}

                          {{Session::get('message')}}
                    </div>         
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
	

@endsection