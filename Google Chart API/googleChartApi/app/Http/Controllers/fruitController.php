<?php

namespace App\Http\Controllers;

use App\fruit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class fruitController extends Controller
{
    public function fruit(Request $request){
        $fruits=new fruit();
        $fruits->fruit=$request->fruit;
        $fruits->save();

            return "save successfully";


    }
    public function piechart(){
        $data=DB::table('fruits')->select(
            DB::raw('fruit as fruit'),
            DB::raw('count(*) as number')
        )->groupBy('fruit')->get();



        return view('piechart',['datas'=>$data]);
    }
}
