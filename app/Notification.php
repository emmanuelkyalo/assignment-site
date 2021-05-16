<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = [
        'assignment_id',
        'description',
        'url',
        'target',
        'read_status'
    ];
}
