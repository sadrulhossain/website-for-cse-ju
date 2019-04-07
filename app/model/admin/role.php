<?php

namespace App\model\admin;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    public function admin(){
        return $this->belongsToMany(admin::class, 'admin_roles');
    }
}
