<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    protected $fillable = [
        'assignment_id', 'payment_status', 'submission_status',
    ];

    public function assignment()
    {
        return  $this->belongsTo(Assignment::class);
    }
}
