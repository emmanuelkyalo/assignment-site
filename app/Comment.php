<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['user_id', 'assignment_id', 'comment'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function assignment()
    {
      return   $this->belongsTo(Assignment::class);
    }
}
