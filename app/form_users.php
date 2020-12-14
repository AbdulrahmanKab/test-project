<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class form_users extends Model
{
    protected $table = 'form_users';
    protected $fillable =['username','email','name','password','bio','image','age'];
}
