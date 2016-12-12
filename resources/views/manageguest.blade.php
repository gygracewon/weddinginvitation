@extends('admintemplate')
@section('content')

                <!-- content--> 

               <div class="row">
                   <div class="col-lg-3">
                        <form role="form">
                            <div class="form-group">
                                <h3>Register Guest</h3>
                                 <label>Usercode</label>
                                <input class="form-control" placeholder="Enter text"><div><button>random code</button></div>
                                
                                
                                <label>Firstname</label>
                                <input class="form-control" placeholder="Enter text">

                                <label>Lastname</label>
                                <input class="form-control" placeholder="Enter text">

                            </div>

                              <button type="submit" class="btn btn-primary">Register</button>
                         </form>
                    </div> 

                    <div class="col-lg-10">
                        
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
                    </div>                
                </div>
               <!-- /.row-fluid -->

               <!-- content end--> 
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

 @endsection