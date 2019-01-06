<?php

namespace App\Http\Controllers;

use App\area;
use App\pharmacy;
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

    public function arealist(){
        $area=area::all();
        return view('frontEnd.view.areaview',['areas'=>$area]);
    }
    public function pharmacyadd(){
        $area=area::all();
        return view('admin.add.pharmacyList',
            [
                'areas'=>$area
            ]);
    }

public function pharmacylistadd(Request $request){

        //Image
        $imag=$request->file('imagepath');
        $imagename=$imag->getClientOriginalName();
       $directory='pharmacy-images/';
       $url=$directory.$imagename;
       $imag->move($directory,$imagename);

       //EndImage

       $pharmacy=new pharmacy();

       $pharmacy->pharmacyname=$request->pharmacyname;
    $pharmacy->area=$request->area;
    $pharmacy->phone=$request->phone;
    $pharmacy->address=$request->address;
    $pharmacy->imagepath=$url;
      $pharmacy->save();
      return "add successfully";
}
}
