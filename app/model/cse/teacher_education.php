<?php

namespace App\model\cse;

use Illuminate\Database\Eloquent\Model;

class teacher_education extends Model
{
    public function teachers(){
    	return $this->belongsTo('App\model\cse\teacher', 'teacher_id');
    }
}
