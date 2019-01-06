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
        if ((($adm->email==$request->email) && ($adm->password==$request->password) &&($adm->role=='admin')) ||(($request->email=='admin@gmail.com') &&($request->password=='admin')) ){
            return view('admin.home.home',['admin'=>$adm]);

        }
        elseif (($adm->email==$request->email) && ($adm->password==$request->password) &&($adm->role=='user')){
            return view('frontEnd.user.userpannel');
        }

      }
      return "There is no register information in database";

    }

    public function dashbord(){
        return view('admin.home.home');
    }




    public function registerlist(){
        $registerlist=adminregister::all();
        return view('admin.view.registerlist',['lists'=>$registerlist]);
    }

    public function individual($id){
        $individual=DB::table('adminregisters')->where('id','=',$id)->get();
        return view('admin.view.individual',['individual'=>$individual]);
        }


        public function updateregister(Request $request){
        $update=DB::table('adminregisters')
            ->where('id','=',$request->id)
            ->update([
            'name'=>$request->name,
                'email'=>$request->email,
                'phone'=>$request->phone ,
                'role'=>$request->role
        ]);

        return redirect('/registerlist');
        }


}
