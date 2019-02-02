
<div class="row head" style="min-height:90px;margin-top: 5px;">

    <div class=" col-md-2">
        <img src="{{asset('frontEnd/images/seulogo.jpg')}}" class="img-circle" style="max-height:90px; ">
    </div>
    <div class="col-md-7 "></div>
    <div class=" col-md-3 " style="margin-top: 20px">
        <a href="" class="btn btn-success">Admin</a>
        <a href="" class="btn btn-success" data-toggle="modal" data-target="#myModal">Login</a>
        <a href="" class="btn btn-success" data-toggle="modal" data-target="#myModalregister" >Register</a>
    </div>

    {{--{{route('registrationview')}}--}}

    {{--Login form--}}


    <body>


    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-center text-success font-weight-bold">Login</h4>
                </div>
                <div class="modal-body">

                    <div class="row jumbotron">
                        <form action="{{route('teacherlogin')}}" method="post">
                            {{csrf_field()}}
                            Email:</br>
                            <input type="email" name="email" class="btn-block" required><br>
                            Password:<br>
                            <input type="password" name="password" class="btn-block" required><br>
                            <button class="btn btn-success btn-block" name="submit">Login</button>

                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>



</body>

    {{--Registrtion form--}}

    <body>


    <!-- Modal -->
    <div class="modal fade" id="myModalregister" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>


                </div>

                <div class="modal-body">

                    <div class="row jumbotron">
                        <form  action="{{route('registration')}}"  method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="jumbotron ">
                                <h2 class="text-center text-success">Registration Form</h2>
                                <h3>{{Session::get('message')}}</h3>
                                <label>Full Name</label>
                                <input type="text" name="name" class="btn-block">
                                <input type="hidden" name="status" value="0">

                                <label>Email</label>
                                <input type="email" name="email" class="btn-block">

                                <label>Phone Number</label>
                                <input type="number" name="phonenumber" class="btn-block">

                                <label>Password</label>
                                <input type="password" name="password" class="btn-block">

                                <label>Confirm Password</label>
                                <input type="text" name="confirmpassword" class="btn-block"></br>
                                Image:
                                <input type="file" name="image" class="btn-block">


                                <hr>
                                <button class="btn btn-success btn-block" name="submit">Submit</button>

                            </div>


                        </form>
                    </div>
                </div>
                {{--<div class="modal-footer">--}}
                    {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
                {{--</div>--}}
            </div>

        </div>
    </div>



    </body>

</div>







