<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
  public function create()
  {
      return view('users.create', ['title' => '注册']);
  }

  public function show($id)
  {
      $user = User::findOrFail($id);
      return view('users.show', compact('user'))->with([
        'title' => $user->name,
        'shape'=>"img-circle",
        'size' => 140]);
  }

  public function store(Request $request)
  {
      $this->validate($request, [
          'name' => 'bail|required|max:50',
          'email' => 'bail|required|email|unique:users|max:255',
          'password' => 'bail|required|min:6|confirmed'
      ]);

      $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'qq' => ''
        ]);
      session()->flash('success', '注册成功，欢迎您！');
      return redirect()->route('users.show', [$user]);
  }

}
