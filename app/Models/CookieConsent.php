<?php

// app/Models/CookieConsent.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CookieConsent extends Model {
    protected $fillable = ['cookie_id','user_id','consent','ip','user_agent'];

    protected $casts = [
        'consent' => 'array',
    ];
}
