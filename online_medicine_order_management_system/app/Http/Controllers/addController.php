<?php

namespace App\Http\Controllers;

use App\area;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class addController extends Controller
{
    public function addarea(){
        return view('admin.add.areaAdd');
    }

    public function areaadd(Request $request){
        $area=new area();
        $area->area=$request->area;
        $area->save();
        return redirect('area')->with('messeage','Submit Area Successfully');

    }
}
