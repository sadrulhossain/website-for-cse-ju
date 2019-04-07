<?php

namespace App\model\cse;

use Illuminate\Database\Eloquent\Model;

class teacher_experience extends Model
{
    public function teachers(){
    	return $this->belongsTo('App\model\cse\teacher', 'teacher_id');
    }
}
