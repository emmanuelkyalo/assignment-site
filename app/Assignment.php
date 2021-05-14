<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $fillable = [
        'userEmail', 'userName','level', 'userPhone','title', 'pages', 'instructions', 'paymentStatus', 'completionStatus','referencing', 'deadline','no_of_references','subject_area'
    ];

    public function files()
    {
        return $this->hasMany(File::class);
    }
    public function solutions()
    {
        return $this->hasMany(Solution::class);
    }
    public function user()
    {
        $this->belongsTo(User::class);
    }

}
