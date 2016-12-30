<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
  /**
   * 不可被批量赋值的属性。
   *
   * @var array
   */
  // protected $guarded = ['password','remember_token'];
  protected $hidden = ['password', 'remember_token'];
  protected $fillable = ['name', 'email', 'qq', 'password'];

  //获取全球头像链接
  public function gravatar($size = '100')
  {
    $hash = md5(strtolower(trim($this->attributes['email'])));
    return "https://www.gravatar.com/avatar/$hash?s=$size";
  }

  //获取qq头像链接
  public function gravatar_qq()
  {
    $qq = $this->attributes['qq'];
    $ret1 = "/img/ungravatar.png";
    $ret2 = "http://q1.qlogo.cn/g?b=qq&nk=$qq&s=100&t=" . time();
    return empty($qq)? $ret1 : $ret2;
  }

  //密码修改器
  public function setPasswordAttribute($password)
  {
      $this->attributes['password'] = bcrypt($password);
  }

  //qq号修改器
  public function setQqAttribute($qq)
  {
    if ($qq == 'noset') {
      $this->attributes['qq'] = $this->get_qqnumber($this->attributes['email']);
    } else {
      $this->attributes['qq'] = $qq;
    }
  }

  //从qq邮箱提取qq号
  private function get_qqnumber($email) {
    $qq = explode('@',$email);
    if (preg_match('/\d+/', $qq[0]) && $qq[1] == "qq.com") {
      return $qq[0];
    } else {
      return '';
    }
  }

}
