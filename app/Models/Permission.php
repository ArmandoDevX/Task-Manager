<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    //

    protected $fillable = [
        'name',
    ];

    function users(){

        return $this->belongsToMany(User::class, 'permission_user');
    }

}
