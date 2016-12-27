<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
  /**
   * 不可被批量赋值的属性。
   *
   * @var array
   */
  protected $guarded = ['password_digest','remember_token'];
}

// namespace App\Models;
//
// use Illuminate\Notifications\Notifiable;
// use Illuminate\Foundation\Auth\User as Authenticatable;
//
// class User extends Authenticatable
// {
//     use Notifiable;
//
//     /**
//      * 可赋值的属性数组
//      *
//      * @var array
//      */
//     protected $fillable = [
//         'name', 'email', 'password_digest','qq'
//     ];
//
//     /**
//      * 应该隐藏的属性数组
//      *
//      * @var array
//      */
//     protected $hidden = [
//         'password_digest', 'remember_token',
//     ];
// }
