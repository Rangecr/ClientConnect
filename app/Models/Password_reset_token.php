<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Password_reset_token extends Model
{
    protected $fillable = [
        'email',
        'token',
        'expires_at',
    ];
}
