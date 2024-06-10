<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CmsBaseController extends Controller
{

  public function index()
  {
    return view('cms.content.dashboard');
  }

  public function store()
  {
    return view('cms.content.dashboard');
  }

  public function login()
  {
    return view('cms.content.login');
  }

  public function slider()
  {
    return view('cms.content.slider');
  }

  public function card()
  {
    return view('cms.content.card');
  }
}
