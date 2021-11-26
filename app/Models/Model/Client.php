<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public function district()
    {
        return $this->belongsTo(District::class, 'district_id', 'id');
    }

    public function account()
    {
        return $this->hasMany(Account::class, 'account_id', 'id');
    }
}
