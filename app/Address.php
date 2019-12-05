<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['street_address', 'region', 'city', 'country', 'postcode'];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
