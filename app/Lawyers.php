<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lawyers extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name','address', 'email','phone','created_by', 'deleted_by', 'updated_by'
        
    ];

    protected $dates = ['deleted_at'];

}
