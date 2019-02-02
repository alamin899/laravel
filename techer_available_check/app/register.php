<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    protected $fillable=['status','name','email','phonenumber','password','confirmpassword','image'];
}
