<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * 可赋值的属性数组
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password_digest','qq'
    ];

    /**
     * 应该隐藏的属性数组
     *
     * @var array
     */
    protected $hidden = [
        'password_digest', 'remember_token',
    ];
}
