<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
    	/*dd(\Auth::user()->isAdmin()); - у вошедшего пользователя вызываем метод ->isAdmin(), если админ - true */
        return view('admin.index');
    }
}
