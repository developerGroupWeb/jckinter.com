<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class User extends Model
{
    public $timestamps = true;

    protected $table = 'users';

    protected $fillable = [
        'full_name',
        'email',
        'password',
        'terms',
        'id_confirmation'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];


    static function getUniqueCode()
    {
        $code = Str::random();

        if(self::whereId_confirmation($code)->count()!= 0)
        {
            return self::getUniqueCode();
        }
        return $code;
    }


    /**
     * @return HasMany
     */
    function order_currencies(){

        return $this->hasMany(OrderCurrency::class);
    }

    /**
     * @return HasMany
     */
    function user_receivers(){
        return $this->hasMany(UserReceiver::class);
    }

    /**
     * @return HasMany
     */
    function photo_receivers(){
        return $this->hasMany(PhotoReceiver::class);
    }
}
