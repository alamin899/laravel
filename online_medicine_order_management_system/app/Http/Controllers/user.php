<?php

namespace App\Http\Controllers;

use App\pharmacy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class user extends Controller
{
    public function registration(Request $request){
        return view('frontEnd.user.userRegistration');
    }

public function individualpharmacy($area){

        $pharmacies=DB::table('pharmacies')->where('area','=',$area)->get();

        return view('frontEnd.view.individualpharmacy',[
            'pharmacies'=>$pharmacies
        ]);

}
}
