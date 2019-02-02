
@extends("frontEnd.master")
@section('title')
    This is Home
    @endsection()

@section('logo')
    <div class="row">
        <div class="col-md-12" style="margin-top: 0px">
            <img src="{{asset('frontEnd/images/seu.jpg')}}" style="min-width:100%;max-height: 250px;" class="rounded">
        </div>
    </div>
    @endsection()

@section('body')
    <div class="row" style="min-height: 170px">
        <div class="col-md-12">
            <h1 style="text-align: center;" class="text-success font-weight-bolder">Teacher are availabe now</h1>
            <table class="table table-bordered table-hover  text-dark table-success">
                <tr>
                    <th>Serial No</th>
                    <th>Teacher Name</th>
                    <th>Email</th>
                    <th>Phone</th>

                    <th>Image</th>
                </tr>
                @php($i=1)
                @foreach($registers as $register)
                @if($register->status=='1')
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$register->name}}</td>
                    <td>{{$register->email}}</td>
                    <td>{{$register->phonenumber}}</td>

                    <td></td>


                </tr>
                    @endif()
                    @endforeach

            </table>

        </div>

    </div>
    @endsection