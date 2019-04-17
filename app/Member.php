<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
class Member extends Model
{
    //
    use Searchable;
    protected $table = 'members';
    protected $fillable = ['name', 'gender', 'birthday', 'email', 'phone', 'address'];
}
