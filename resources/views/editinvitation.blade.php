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
                        <form role="form">
                            <div class="form-group">
                                 <label>Location</label>
                                <input class="form-control" placeholder="Enter text">
                                
                                <label>Day</label>
                                <input class="form-control" placeholder="Enter text">

                                <label>Month</label>
                                <input class="form-control" placeholder="Enter text">

                                <label>Time</label>
                                <input class="form-control" placeholder="Enter text">

                                <label>Text area</label>
                                <textarea class="form-control" rows="3"></textarea>

                                <label>Photos for slider</label>
                                <input type="file">

                               
                            </div>
                               <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">Send notification to guests via email
                                    </label>
                                </div>

                              <button type="submit" class="btn btn-primary">Submit</button>
                         </form>
                    </div>     
                </div>
               <!-- /.row-fluid -->

               <!-- content end--> 
            </div>
            <!-- /.container-fluid -->

        </div>
@endsection
