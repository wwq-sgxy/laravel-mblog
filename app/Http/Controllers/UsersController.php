<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class UsersController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth')->only(['edit','update','show','destroy']);
      $this->middleware('guest')->only(['create']);
  }

  public function index()
  {
      // $users = User::all();
      $users = User::paginate(8);
      return view('users.index', compact('users'))->with([
        'title' => '所有用户',
        'shape'=>"img-rounded",
        'size' => 80
      ]);
  }

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
        'size' => 140,
        'name' => true]);
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
            'qq' => 'noset'
        ]);

      Auth::login($user);
      session()->flash('success', '注册成功，欢迎您！');
      return redirect()->route('users.show', [$user]);
  }

  public function edit($id)
  {
      $user = User::findOrFail($id);
      // $canEdit = (Auth::user()->id == $user->id);
      //
      // if (!$canEdit) {
      //   session()->flash('warning', '对不起，你不能编辑他人的资料！');
      //   return redirect()->route('users.edit',Auth::user()->id);
      // }

      $this->authorize('update', $user);
      // $user = Auth::user();
      return view('users.edit', compact('user'))->with([
        'title' => '更新个人资料',
        'shape'=>"img-circle",
        'size' => 100,
        'name' => false]);

  }

  public function update(Request $request,$id)
  {
      $user = User::findOrFail($id);
      $this->authorize('update', $user);
      // $canUpdate = (Auth::user()->id == $user->id);
      //
      // if (!$canUpdate) {
      //   session()->flash('warning', '对不起，你不能更新他人的资料！');
      //   return redirect()->route('home');
      // }

      $this->validate($request, [
          'name' => 'bail|required|max:50',
          'email' => 'bail|required|email|max:255|unique:users,email,' . $user->id,
          'qq' => 'numeric',
          'password' => 'min:6'
      ]);

      $data = array_filter([
          'name' => $request->name,
          'email' => $request->email,
          'qq' => $request->qq,
          'password' => $request->password
      ]);
      $user->update($data);

      session()->flash('success', '个人资料更新成功！');
      return redirect()->route('users.show', $id);
  }

  //删除用户
  public function destroy($id)
  {
      $user = User::findOrFail($id);
      $this->authorize('destroy', $user);
      $user->delete();
      session()->flash('success', '成功删除用户！');
      return back();
  }

}
