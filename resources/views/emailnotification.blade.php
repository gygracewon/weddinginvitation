{{-- @extends('admintemplate')
@section('content') --}}
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Send notification<small> information & letter</small>
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
                     <div class="col-lg-9">
                        <form role="form">
                            <div class="form-group">


                                <label>message</label>
                                <textarea class="form-control email-textarea" rows="3"></textarea>

                                
                               
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
        <!-- /#page-wrapper -->
{{-- 
@endsection --}}