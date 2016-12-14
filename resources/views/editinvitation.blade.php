@extends('admintemplate')
@section('content')

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Edit Invitation <small> Content</small>
                </h1>

              <!--   <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-dashboard"></i> Dashboard
                    </li>
                </ol> -->
            </div>
        </div>

        <!-- content--> 

        <div class="row">
            <div class="col-lg-3">

                {!! Form::open(['url' => 'invitation/'.$invitation->id, 'method'=>'put', 'role'=>'form']) !!}
{{-- 
                <form role="form"> --}}

                    <div class="form-group">

                         <label>Location</label>
                         {{ Form::text('location' ,$invitation->location, ['class'=>'form-control']) }}
                                               
                        <label>Day</label>
                        {{ Form::text('day', $invitation->day ,['class'=>'form-control']) }}

                        <label>Month</label>
                        {{ Form::text('month', $invitation->month,['class'=>'form-control']) }}

                        <label>Time</label>
                        {{ Form::text('time', $invitation->time,['class'=>'form-control']) }}

                        <label>Letter</label>
                        {{ Form::text('letter', $invitation->letter,['class'=>'form-control' , 'rows'=>'3']) }}

                        <label>Photos for slider</label>
                       {{ Form::file('photos', null, ['class'=>'form-control']) }}

                       
                    </div>
                       <div class="checkbox">
                            <label>
                                 {{ Form::checkbox('name', 'value' )}} <p>Notify the changes to guests via email</p>
                            </label>
                            {{ Form::hidden('user_id', 1) }}
                        </div>

                      {{ Form::submit('Submit',['class'=>'btn btn-primary']) }}
                    {{--   <button type="submit" class="btn btn-primary">Submit</button> --}}
                 {!! Form::close() !!}

            </div>     
        </div>
       <!-- /.row-fluid -->

       <!-- content end--> 
    </div>
    <!-- /.container-fluid -->

</div>
@endsection
