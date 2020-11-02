<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ProductCategory;

class ProuctCategoryController extends Controller
{
    public function index(){
    	$data=ProductCategory::get();
    	return view('dashboard.product-category.index',compact('data'));
    }
}
