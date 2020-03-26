<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class RoleAdmin extends Model
{
    public $timestamps = true;

    protected $table = "role_admins";

    protected $fillable = [
        'name',
        'description'
    ];

    protected $casts = [
        'created_at',
        'updated_at'
    ];
}
