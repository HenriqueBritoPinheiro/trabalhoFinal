<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id', 'id');
    }

    public function client()
    {
        return $this->hasMany(Client::class, 'client_id', 'id');
    }
}
