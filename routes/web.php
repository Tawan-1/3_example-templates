<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });


//Start Promote อาจารย์เดียร์//
Route::view('/', 'promotepage.home')->name('home');
// Route::view('/house-blend', 'promotepage.house-blend')->name('house-blend');
Route::get('/new',  [App\Http\Controllers\Newpromotecontrollers::class, 'index'])->name('promotepage.new');
Route::get('/product',  [App\Http\Controllers\Productpromotecontrollers::class, 'index'])->name('promotepage.product');
Route::get('/content',  [App\Http\Controllers\Contentcontrollers::class, 'index'])->name('promotepage.content');

//End Promote อาจารย์เดียร์//



//Start Admin//

Route::get('/admin/home',  [App\Http\Controllers\Homecontroller::class, 'index'])->name('adminpage.adminhome');

Route::get('/admin/type_product',  [App\Http\Controllers\Type_productcontrollers::class, 'index'])->name('adminpage.admintype_product');

Route::get('/admin/type_product/formadd',
    [App\Http\Controllers\Type_productcontrollers::class, 'formadd'])
->name('adminpage.admintype_product_add');

 Route::post('/admin/type_product/add',
    [App\Http\Controllers\Type_productcontrollers::class, 'add'])
->name('adminpage.admintype_product_add');

Route::post('/admin/type_product/formedit',
[App\Http\Controllers\Type_productcontrollers::class, 'edit'])
->name('adminpage.admintype_product_edit');
// Route::get('/admin/type_product/add',  [App\Http\Controllers\Type_productcontrollers::class, 'formadd'])->name('adminpage.admintype_productadd');
// Route::get('/admin/type_product/edit',  [App\Http\Controllers\Type_productcontrollers::class, 'formadd'])->name('adminpage.admintype_productedit');

Route::get('/admin/product',  [App\Http\Controllers\Productcontrollers::class, 'index'])->name('adminpage.adminproduct');
Route::get('/admin/product/add',  [App\Http\Controllers\Productcontrollers::class, 'formadd'])->name('adminpage.adminproductadd');
Route::get('/admin/product/edit',  [App\Http\Controllers\Productcontrollers::class, 'formadd'])->name('adminpage.adminproductedit');

Route::get('/admin/new',  [App\Http\Controllers\Newcontrollers::class, 'index'])->name('adminpage.adminnew');
Route::get('/admin/new/add',  [App\Http\Controllers\Newcontrollers::class, 'formadd'])->name('adminpage.adminnewadd');
Route::get('/admin/new/edit',  [App\Http\Controllers\Newcontrollers::class, 'formadd'])->name('adminpage.adminnewedit');

Route::get('/admin/content1',  [App\Http\Controllers\Content1controllers::class, 'index'])->name('adminpage.admincontent1');
Route::get('/admin/content2',  [App\Http\Controllers\Content2controllers::class, 'index'])->name('adminpage.admincontent2');
Route::get('/admin/employee',  [App\Http\Controllers\Employeecontrollers::class, 'index'])->name('adminpage.adminemployee');


Auth::routes();


//End Admin//



