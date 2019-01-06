<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<div class="container">
    <div class="row">
        <div class="col-md-2"></div>

        <div class="col-md-8">
            <div class="row" style="min-height: 150px"></div>
            <form action="{{route('updateregister')}}" method="post">
                {{csrf_field()}}
                <table border="2">

                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>

                    @foreach($individual as $list)
                        <tr>
                            <input type="hidden" name="id" value=" {{$list->id}}">
                            <td><input type="text" name="name" value=" {{$list->name}}"></td>
                            <td><input type="email" name="email" value=" {{$list->email}}"></td>
                            <td><input type="text" name="phone" value=" {{$list->phone}}"></td>
                            <td><input type="text" name="role" value=" {{$list->role}}"></td>
                            <td><input type="submit" name="btn" value="Update"></td>
                        </tr>
                    @endforeach

                </table>

            </form>
        </div>
        <div class="col-md-2"></div>

    </div>

</div>