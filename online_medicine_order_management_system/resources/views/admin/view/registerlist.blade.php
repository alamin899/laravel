<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form action="" method="post">
                {{csrf_field()}}
                <table border="2">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                    @foreach($lists as $list)
                    <tr>
                        <td>{{$list->name}}</td>
                        <td>{{$list->email}}</td>
                        <td>{{$list->phone}}</td>
                        <td>{{$list->role}}</td>
                        <td><a href="{{route('individual',['id'=>$list->id])}}">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a></td>
                    </tr>
                        @endforeach

                </table>

            </form>
        </div>
        <div class="col-md-2"></div>

    </div>

</div>