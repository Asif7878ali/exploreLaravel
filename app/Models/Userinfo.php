<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Userinfo extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table ='userinfo';
    protected $primaryKey = 'User_ID';

    //Mutator is set to the value to database
    function setNameAttribute($value)
    {
        $this->attributes['name'] = ucwords($value);
        // dd($value);
    }
    // Accesosor is set the value from the database
    function getBirtdayAttribute($value)
    {
         return date('d-M-Y', strtotime($value));
    }
}
