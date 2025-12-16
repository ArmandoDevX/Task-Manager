<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    use HasFactory;
    //

    protected $fillable = [
        'title',
        'description',
        'status',
        'assigned_to',
        'created_by',
    ];


    function deadline(): Carbon {

        return $this->created_at->addHours(24);

    }

    function isExpired(): bool {

        return Carbon::now()->greaterThan($this->deadline());

    }

    function assignedUser() {
        return $this->belongsTo(User::class, 'assigned_to');
    }

    function creatorUser() {
        return $this->belongsTo(User::class, 'created_by');
    }


}
