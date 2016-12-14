@extends('admintemplate')
@section('content')

                <!-- content--> 
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Create Guest
                        </h1>
                    </div>
                </div>

               <div class="row">
                   <div class="col-lg-3">
                        {!! Form::open(['url' => 'guests']) !!}

                            <div class="form-group">
                                 <label>Usercode</label>
                                 {{ Form::text('usercode','',['class'=>'form-control']) }}
                                <div><button>random code</button></div>
                                
                                
                                <label>Firstname</label>
                                {{ Form::text('first_name','',['class'=>'form-control']) }}

                                <label>Lastname</label>
                                {{ Form::text('last_name','',['class'=>'form-control']) }}

                                {{ Form::hidden('user_id', 1) }}

                            </div>

                              {{ Form::submit('Submit',['class'=>'btn btn-primary']) }}
                         {!! Form::close() !!}
                    </div> 

                    {{-- div class="col-lg-10">
                        
                        <div class="table-responsive">

                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Usercode</th>
                                        <th>Firstname</th>
                                        <th>Lastname</th>
                                        <th>Email</th>
                                  
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#1636964</td>
                                        <td>Jonny</td>
                                        <td>Gabriliah</td>
                                        <td>gy.grace@gnamcil.ocm</td>
                                        <td><button>Delete</button></td>
                                       
                                    </tr>
                                    <tr>
                                        <td>/about.html</td>
                                        <td>261</td>
                                        <td>33.3%</td>
                                        <td>$234.12</td>
                                     
                                    </tr>
                                    <tr>
                                        <td>/sales.html</td>
                                        <td>665</td>
                                        <td>21.3%</td>
                                        <td>$16.34</td>
                                    </tr>
                                    <tr>
                                        <td>/blog.html</td>
                                        <td>9516</td>
                                        <td>89.3%</td>
                                        <td>$1644.43</td>
                                    </tr>
                                    <tr>
                                        <td>/404.html</td>
                                        <td>23</td>
                                        <td>34.3%</td>
                                        <td>$23.52</td>
                                    </tr>
                                    <tr>
                                        <td>/services.html</td>
                                        <td>421</td>
                                        <td>60.3%</td>
                                        <td>$724.32</td>
                                    </tr>
                                    <tr>
                                        <td>/blog/post.html</td>
                                        <td>1233</td>
                                        <td>93.2%</td>
                                        <td>$126.34</td>
                                    </tr>
                                </tbody>
                            </table>
                    </div>        --}}         
                </div>
               <!-- /.row-fluid -->

               <!-- content end--> 
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

 @endsection