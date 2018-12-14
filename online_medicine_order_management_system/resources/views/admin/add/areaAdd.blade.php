<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<div class=" container-fluid">
    <div class="row" style="min-height: 200px">

    </div>
    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4" style="background-color: #2b2b2b;">
            <form action="{{route('areaadd')}}" method="post">
                @csrf
                <label>Area</label><br>
                <input type="text" name="area" placeholder="Enter Area"><br>
                <input type="submit" name="btn" value="submit">
            </form>


        </div>



        <div class="col-md-4">

        </div>
    </div>
</div>