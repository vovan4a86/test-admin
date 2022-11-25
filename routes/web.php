<?php

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    //    $products = Product::all();
//        $products = Product::with('brand')->get();
//
//        foreach ($products as $prod) {
//            echo $prod->brand->name . "<br>";
//        }


//    $brand = Brand::find(2);

//    $alias = $brand->getMorphClass();
//    $class = Relation::getMorphedModel($alias);
//    $created = \App\Models\Image::create([
//        'url' => '7777.jpg',
//        'imageable_id' => $brand->id,
//        'imageable_type' => $alias,
//    ]);
//    dd($brand->image);

    $product = Product::find(1);
    dd($product->thumb());



    return view('welcome');
});
