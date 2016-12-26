<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
  public function home()
  {
      return view('static_pages.home', ['title' => '主页']);
  }

  public function help()
  {
      return view('static_pages.help', ['title' => '帮助页']);
  }

  public function about()
  {
      return view('static_pages.about', ['title' => '关于页']);
  }
}
