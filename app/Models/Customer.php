<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use UConverter;

class Customer extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "customer";
    protected $primarykey = "id";

    //Mutator methods
    function setNameAttribute($value){
        $this->attributes['name'] = ucwords($value);
        // strtolower
    }

    //Accessor methods

// function getDobAttribute($value){
//        return date("d-m-y ",strtotime($value));
//     }

}