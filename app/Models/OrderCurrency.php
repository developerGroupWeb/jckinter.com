<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderCurrency extends Model
{
    public $timestamps = true;

    protected $table = 'order_currencies';

    protected $fillable = [

        'user_id',
        'amount_receive',
        'devise_receive',
        'exchange',
        'devise_send',
        'amount_send',
        'total',
        'country',
        'fees',
        'name',
        'surname',
        'address',
        'phone',
        'year',
        'question',
        'answer',
        'photo',
        'track_order'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    static function getTrackOrder()
    {
        $code = mt_rand(1000000,9999999);

        if(self::whereTrack_order($code)->count()!= 0)
        {
            return self::getTrackOrder();
        }
        return $code;
    }

    /**
     * @return BelongsTo
     */
    function user(){
        return $this->belongsTo(User::class);
    }
}
