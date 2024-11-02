<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable = [
        'id',
        'type',
        'notes',
    ];

    public function customer() {
        return $this->belongsTo(Customer::class, 'id', 'id');
    }
}
