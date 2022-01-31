<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cases extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'c_name','d_name', 'subject','phone','d_phone','id_num','d_address','c_address', 'case_type','status','j_comment','case_date',
        'created_by', 'deleted_by', 'updated_by'
        
    ];

    protected $dates = ['deleted_at'];

}
