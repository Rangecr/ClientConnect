<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'id',
        'title',
        'description',
        'status',
        'priority',
    ];

    public function customer() {
        return $this->belongsTo(Customer::class);
    }
}
