<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable = [
        'id',
        'cust_id',
        'type',
        'notes',
    ];

    public function customer() {
        return $this->belongsTo(Customer::class, 'cust_id', 'id');
    }
}
