<html>
<title>home page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<body>
<div class="container">
    <div class="row" style="min-height: 80px;background-color: #4e555b; text-decoration: red">
        <div class="col-md-10"></div>
        <div class="col-md-2">
            <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Insert Fruit</a>
            {{--//<input type="submit" onclick="" name="piechart" value="Insert Fruit">--}}
        </div>
    </div>
    <div class="row" style="min-height: 120px;background-color: #1b4b72;color: red">
        <div class="col-md-3">
            <a href="{{route('piechart')}}" style="color: red">Pie Chart</a>
            {{--<input type="submit" name="piechart" value="Pie Chart">--}}
            </div>
        <div class="col-md-9">

        </div>

    </div>
    <div class="row" style="min-height: 50px"></div>
</div>




{{--Modal insert Fruit--}}

<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">

        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Fruit Insert</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <form action="{{route('fruitinsert')}}" method="post">
                        {{csrf_field()}}
                    <div class="md-form mb-5">
                        <i class="fas fa-envelope prefix grey-text"></i>
                        <input type="text" id="fruit" class="form-control validate" name="fruit">
                        <label data-error="wrong" data-success="right" >Fruit</label>
                    </div>
                    <input type="submit" name="btn" value="Insert">
                     </form>
                </div>

                <div class="modal-footer d-flex justify-content-center">

                </div>
            </div>
        </div>



</div>


</body>
</html>