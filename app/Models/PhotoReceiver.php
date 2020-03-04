<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PhotoReceiver extends Model
{
    public $timestamps = true;

    protected $table = 'photo_receivers';

    protected $fillable = [
        'name',
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
