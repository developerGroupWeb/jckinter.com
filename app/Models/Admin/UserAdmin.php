<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class UserAdmin extends Model
{
    public $timestamps = true;

    protected $table = "user_admins";

    protected $fillable = [
        'name',
        'email',
        'role',
        'photo',
        'password',
    ];

    protected $casts = [
        'created_at',
        'updated_at'
    ];
}
