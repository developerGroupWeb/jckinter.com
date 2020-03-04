<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UserReceiver extends Model
{
    public $timestamps = true;

    protected $table = 'user_receivers';

    protected $fillable = [
        'name',
        'surname',
        'address',
        'phone',
        'year',
        'question',
        'answer',
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
