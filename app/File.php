<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = [
        'file_name', 'assignment_id',
    ];

    public function assignment()
    {
        return    $this->belongsTo(Assignment::class);

    }
}
