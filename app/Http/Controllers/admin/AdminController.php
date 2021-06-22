<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function dashboard(){
       return view('admin.dashboard');
   }
    public function brand(){
        return view('admin.brand.index');
    }
    public function category(){
        return view('admin.category.index');
    }
    public function product(){
        return view('admin.product.index');
    }

}
