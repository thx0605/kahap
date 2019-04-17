<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Member extends Model
{
    //
    protected $table = 'members';
    protected $fillable = ['name', 'gender', 'birthday', 'email', 'phone', 'address'];
}
