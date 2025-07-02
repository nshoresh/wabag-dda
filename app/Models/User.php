<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Filament\Models\Contracts\FilamentUser;
use Spatie\Permission\Traits\HasRoles;
use Filament\Panel;

class User extends Authenticatable implements FilamentUser
{
    use HasRoles;

    protected $fillable = [
    'name',
    'email',
    'password',
    ];

    public function canAccessPanel(Panel $panel): bool
    {
        return $this->hasAnyRole(['admin', 'editor']);
    }

//public function roles()
    //{
        //return $this->belongsToMany(\Spatie\Permission\Models\Role::class);
    //}
}
