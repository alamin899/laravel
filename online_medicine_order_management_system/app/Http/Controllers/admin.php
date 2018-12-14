<?php

namespace App\Http\Controllers;

use App\adminregister;
use App\User;
use Auth;
//use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class admin extends Controller
{
    public function forminsert(Request $request){
   $adminregister=new adminregister();
        $adminregister->name=$request->name;
        $adminregister->email=$request->email;
        $adminregister->phone=$request->phone;
        $adminregister->password=$request->password;
        $adminregister->confirmpassword=$request->confirmpassword;
        $adminregister->role=$request->role;
        $adminregister->save();




        return "successfully update";

    }

    public function loginview(){
        return view('admin.login');
    }
    public function adminlogin(Request $request){
      $admin=adminregister::all();

      foreach ($admin as $adm){
        if (($adm->email==$request->email) && ($adm->password==$request->password) &&($adm->role=='admin')){
            return view('admin.home.home',['admin'=>$adm]);

        }
        elseif (($adm->email==$request->email) && ($adm->password==$request->password) &&($adm->role=='user')){
            return view('frontEnd.user.userpannel');
        }

      }
      return "no";

    }
    public function dashbord(){
        return view('admin.home.home');
    }

}
