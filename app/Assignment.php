<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $fillable = [
        'userEmail', 'userName', 'userPhone', 'pages', 'instructions', 'paymentStatus', 'completionStatus', 'deadline',
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
