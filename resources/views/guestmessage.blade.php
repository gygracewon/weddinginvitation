@extends('admintemplate')
@section('content')
    <div id="page-wrapper">

            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Messages from guests
                        </h1>
                    </div>
                </div>

                <div class="row">
                    @foreach (App\Models\Guest::all() as $guest)

                    <div class="col-lg-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-user"></i> {{$guest->first_name}} {{$guest->last_name}}</h3>
                                
                            </div>
                            <div class="panel-body">
                                <div id="morris-donut-chart">
                                    <p>{{$guest->message}}</p>
                                   
                                </div>
                                
                            </div>
                        </div>
                    </div> 
                    @endforeach

                    
                </div>
               <!-- /.row-fluid -->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

@endsection
