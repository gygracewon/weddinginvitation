@extends('admintemplate')
@section('content')

	
<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Create Invitation <small> Content</small>
                </h1>
            </div>
        </div>

        <!-- content--> 

        <div class="row">
            <div class="col-lg-3">

                {!! Form::open(['url' => 'invitations', 'files'=>true]) !!}

                <form role="form">

                    <div class="form-group">

                        <label>Location</label>
                        {{ Form::text('location','',['class'=>'form-control']) }}
                                               
                        <label>Day</label>
                        {{ Form::text('day','',['class'=>'form-control']) }}

                        <label>Month</label>
                        {{ Form::text('month','',['class'=>'form-control']) }}

                        <label>Time</label>
                        {{ Form::text('time','',['class'=>'form-control']) }}

                        <label>Letter</label>
                        {{ Form::text('letter','',['class'=>'form-control' , 'rows'=>'3']) }}

                        <label>Photos for slider</label>
                       {{ Form::file('photos', null,['class'=>'form-control']) }}
                        
                       {{ Form::hidden('user_id', 1) }}
                    </div>
                
                      {{ Form::submit('Submit',['class'=>'btn btn-primary']) }}
                    
                 {!! Form::close() !!}

            </div>     
        </div>
       <!-- /.row-fluid -->

       <!-- content end--> 
    </div>
    <!-- /.container-fluid -->

</div>

@endsection