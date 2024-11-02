<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'id',
        'cust_id',
        'user_id',
        'title',
        'description',
        'status',
        'priority',
    ];

    public function customer() {
        return $this->belongsTo(Customer::class, 'cust_id', 'id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
