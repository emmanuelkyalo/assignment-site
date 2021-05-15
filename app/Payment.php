<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable=[
        'assignment_id','transaction_id','amount','payment_mode','payment_date'
    ];
}
