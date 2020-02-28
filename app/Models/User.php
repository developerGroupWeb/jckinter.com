<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    public $timestamps = true;

    protected $table = 'users';

    protected $fillable = [
        'full_name',
        'email',
        'password',
        'terms'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    /**
     * @return HasMany
     */
    function order_currencies(){

        return $this->hasMany(OrderCurrency::class);
    }
}
