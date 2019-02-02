<?php

namespace App\Http\Controllers;

use App\register;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    public function insert(Request $request)
    {

        $imag=$request->file('image');
        $productname=$imag->getClientOriginalName();
        $directory='product_images/';
        $imageurl=$directory.$productname;
        $imag->move($directory,$productname);


        $user = new register();

        $user->status = $request->status;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phonenumber = $request->phonenumber;
        $user->password = $request->password;
        $user->confirmpassword = $request->confirmpassword;
        $user->image = $imageurl;
        $user->save();
        return redirect('/')->with('message', 'Insert Data successfully');

    }

    public function home()
    {
        $reg = register::all();
        return view('frontEnd.home.home', ['registers' => $reg]);

    }

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $results = register::all();
          foreach ($results as $result){
              if (($email==$result['email'])&&($password==$result['password'])){
                  $update=DB::table('registers')->where('email','=',$email)
                      ->update([
                          'status'=>'1'
                      ]);



               return view('admin.home.home',['data'=>$email]);
              }

          }
          echo "there is no recorded file";



}
public function logout($email){
        $mail=$email;
        $update=DB::table('registers')->where('email','=',$email)
        ->update([
            'status'=>'0'
        ]);

        return redirect('/');
}
}
