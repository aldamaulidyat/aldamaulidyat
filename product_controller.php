<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
   //
   public function showAll() {
      $dataDariModel = "Data Product";
      return view ('product.display', ["products" =>
      $dataDariModel]);
   }
}
Route ::get('/',function() {
   return view('welcome');
})

Route ::get('/helo', function() {
   return "Hello World";
})


use App\Http\Controllers\ProductController;
Route ::get('product/display',[ProductController::class,'showAll']);
