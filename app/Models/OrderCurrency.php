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
        'devise_send',
        'amount_send',
        'total',
        'country',
        'fees'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    /**
     * @return BelongsTo
     */
    function user(){
        return $this->belongsTo(User::class);
    }
}
