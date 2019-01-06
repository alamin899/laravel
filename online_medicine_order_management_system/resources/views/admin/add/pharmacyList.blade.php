<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">


@extends('admin.dashboard')

@section('body')
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="row" style="min-height: 150px;"></div>

            <form enctype="multipart/form-data" action="{{route('pharmacyadd')}}" method="post" >
                {{csrf_field()}}
                <table>
                    <tr>
                        <td>
                            Pharmacy name:
                    </td>
                    <td>
                        <input type="text" name="pharmacyname">
                        </td>

                    </tr>



                    <tr>
                        <td>
                            Pharmacy Area:
                        </td>
                        <td>
                            <select name="area">
                                <option>--area--</option>
                                @foreach($areas as $area)
                                <option value="{{$area->area}}">{{$area->area}}</option>
                                @endforeach
                            </select>
                        </td>

                    </tr>


                    <tr>
                        <td>
                            Contact Number::
                        </td>
                        <td>
                           <input type="number" name="phone">
                        </td>

                    </tr>


                    <tr>
                        <td>
                            Pharmacy   Address::
                        </td>
                        <td>
                            <textarea cols="23" name="address"></textarea>
                        </td>

                    </tr>

                    <tr>
                        <td>
                            Pharmacy   image:
                        </td>
                        <td>
                            <input type="file" name="imagepath">
                        </td>

                    </tr>

                    <tr>
                        <td></td>
                        <td> <input type="submit" value="Submit"></td>
                    </tr>



                </table>





            </form>
        </div>
        <div class="col-md-3"></div>
    </div>

</div>
    @endsection