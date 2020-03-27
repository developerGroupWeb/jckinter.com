<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class StatusOrder extends Model
{
    public $timestamps = true;

    protected $table = "status_orders";

    protected $fillable = [
        'track_order',
        'status'
    ];

    protected $casts = [
        'created_at',
        'updated_at'
    ];

    static function get_status($track_order){
        return self::whereTrack_order($track_order)->first()->status;
    }
}
