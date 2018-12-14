<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class adminregister extends Model
{
   protected $fillable=['name','email','phone','password','confirmpassword','role'];
}
