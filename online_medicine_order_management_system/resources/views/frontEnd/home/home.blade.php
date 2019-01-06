@extends('frontEnd.master')

@section('title')
    Home View
    @endsection()
@section('body')
    <div class="row ullist" style="padding-left: 0px; padding-bottom: 0px" >
        <div class="col-md-3 " style="padding-left: 0px;padding-top: 0px;padding-right: 0px;">
            <ul class="list-group  list-unstyled" style="background-color: #1b4b72;padding-bottom: 0px;">
                <li> <a href="{{route('listpharmacy')}}" class="badge badge-primary">FarmacyList</a></li>
                <li><a href="#" class="badge badge-light">MedicineList</a></li>
                <li><a href="#" class="badge badge-light">Order Now</a></li>
                <li><a href="#" class="badge badge-light">Current Location</a></li>
            </ul>
        </div>
        <div class="col-md-9 ">

        </div>


    </div>


@endsection()