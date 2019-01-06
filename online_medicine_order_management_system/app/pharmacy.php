<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pharmacy extends Model
{
    protected $fillable=['pharmacyname','area','phone','address','imagepath'];
}
