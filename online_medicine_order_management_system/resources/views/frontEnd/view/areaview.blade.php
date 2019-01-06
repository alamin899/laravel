@extends('frontEnd.master')
@section('title')
    View Area List
    @endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <table border="1">
                    <tr>
                        <th>Area</th>
                        <th>Action</th>
                    </tr>
                    @foreach($areas as $area)

                    <tr>
                        <td>{{$area->area}}</td>
                        <td><a href="{{route('individualpharmacy',['area'=>$area->area])}}" ><span class="glyphicon glyphicon-list"></span></a> </td>
                    </tr>
                        @endforeach

                </table>

            </div>

            <div class="col-md-4">

            </div>
        </div>
    </div>
    @endsection