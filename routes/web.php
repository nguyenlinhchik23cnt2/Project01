<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


#views
Route::get('/nlc-view1',function(){
    return view('nlc-view1',['name'=>"k23cnt -project1 -linh chi"]);
});
Route::get('/nlc-view2',function(){
    return view('nlc-view2',[
        'name'=>"k23cnt -project1 -linh chi",
        'array'=>[1,2,3,4]
    ]);
});

Route::get('/nlc-view3',function(){
    return view('nlc-view3',[
        'name'  =>["linh chi"],
        'arr'   =>[12,13,14,15],
        'users'   =>[]
    ]);
});
Route::get('/',function (){
    return view ('welcom');
});
Route::get('test',[nlcproductcontroller::class,'nlcindex']
);