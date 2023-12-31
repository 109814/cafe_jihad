<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;


use Laravel\Sanctum\HasApiTokens;


use Spatie\Permission\Traits\HasRoles;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;
    // public static function roles() {

    //     $role = Role::create(['name' => 'admin']);
    // }
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nik',
        'name',
        'no_hp',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function role(){
        return $this->belongsTo(Role::class, 'role_id');
    }

    // mengambil role pertama untuk di tampilkan
    public function firstRole()
    {
        return $this->roles->first();
    }
}
