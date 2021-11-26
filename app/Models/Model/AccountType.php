<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountType extends Model
{
    use HasFactory;

    public function account()
    {
        return $this->hasMany(Account::class, 'account_id', 'id');
    }
}
