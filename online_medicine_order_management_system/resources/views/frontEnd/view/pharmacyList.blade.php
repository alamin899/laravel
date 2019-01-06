<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

@extends('frontEnd.master')


@section('tytle')
    Pharmacy List
    @endsection()

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table border="1">
                    <tr>
                        <th>Pharmacy Name</th>
                        <th>Pharmacy Location</th>
                        <th>Contact Number</th>
                        <th>Pharmacy Address</th>
                        <th>Pharmacy Image</th>
                    </tr>
                    @foreach($pharmacies as $pharmacy)
                        <tr>
                            <td style="text-align: center">{{$pharmacy->pharmacyname}}</td>
                            <td style="text-align: center">{{$pharmacy->area}}</td>
                            <td style="text-align: center">{{$pharmacy->phone}}</td>
                            <td style="text-align: center">{{$pharmacy->address}}</td>
                            <td style="text-align: center"><img src="{{asset($pharmacy->imagepath)}}" height="100px" width="100px" /></td>



                        </tr>

                        @endforeach
                      {{--@foreach($pharmacies as $pharmacy)--}}
                    {{--<tr>--}}
                        {{--<td>{{$pharmacy->pharmacyname}}</td>--}}
                        {{--<td>{{$pharmacy->area}}</td>--}}
                        {{--<td>{{$pharmacy->address}}</td>--}}
                        {{--<td>{{asset('$pharmacy->imagepath')}}/</td>--}}

                    {{--</tr>--}}
                          {{--@endforeach--}}

                </table>

            </div>

        </div>

    </div>
    @endsection()
