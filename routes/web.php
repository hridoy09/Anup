<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\ContactinfoController;
use App\Http\Controllers\Admin\GallaryController;

use App\Http\Controllers\Admin\SisterConcurnController;
use App\Http\Controllers\Admin\SisterConcurnDetailsController;
use App\Http\Controllers\Admin\SisterConcurnSliderController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UserController;
use App\Models\Sisterconcurnslider;
use Illuminate\Support\Facades\Auth;
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






// User

Route::prefix('/')->group(function(){
	Route::get('', [UserController::class, 'index'])->name('index');
	Route::get('gallery', [UserController::class, 'gallery'])->name('gallery');
	Route::get('contact-us', [UserController::class, 'contact'])->name('contact');
	Route::get('sister-list', [UserController::class, 'sisterList'])->name('sisterlist');
	Route::get('{id}/sister-details', [UserController::class, 'sisterdetails'])->name('sisterdetails');
	Route::get('Sponsor-Directors', [UserController::class, 'Sponsordirectors'])->name('Sponsordirectors');
	
});








Auth::routes();


Route::middleware(['auth'])->group(function () {

Route::get('/dashboard', function () {
    return view('backend.layouts.master');
});



Route::prefix('team')->group(function(){
	Route::get('/add', [TeamController::class, 'addteam'])->name('team.add');
	Route::post('/store', [TeamController::class, 'storeteam'])->name('team.store');
	Route::get('/all-teams', [TeamController::class, 'teamlist'])->name('team.list');
	Route::get('/change_status/{id}', [TeamController::class, 'changeStatus']);
	Route::get('/delete/{id}', [TeamController::class, 'deleteteam']);
	Route::get('/edit/{id}', [TeamController::class, 'edit'])->name('team.edit');
	Route::post('/update/{id}', [TeamController::class, 'update'])->name('team.update');
});
// Route::prefix('product')->group(function(){
// 	Route::get('/add', [ProductController::class, 'addproduct'])->name('product.add');
// 	Route::post('/store', [ProductController::class, 'storeproduct'])->name('product.store');
// 	Route::get('/all-products', [ProductController::class, 'productlist'])->name('product.list');
// 	Route::get('/change_status/{id}', [ProductController::class, 'changeStatus']);
// 	Route::get('/delete/{id}', [ProductController::class, 'deleteproduct']);
// 	Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
// 	Route::post('/update/{id}', [ProductController::class, 'update'])->name('product.update');
// });
Route::prefix('gallary')->group(function(){
	Route::get('/add', [GallaryController::class, 'addgallary'])->name('gallary.add');
	Route::post('/store', [GallaryController::class, 'storegallary'])->name('gallary.store');
	Route::get('/all-gallarys', [GallaryController::class, 'gallarylist'])->name('gallary.list');
	Route::get('/change_status/{id}', [GallaryController::class, 'changeStatus']);
	Route::get('/delete/{id}', [GallaryController::class, 'deletegallary']);
	Route::get('/edit/{id}', [GallaryController::class, 'edit'])->name('gallary.edit');
	Route::post('/update/{id}', [GallaryController::class, 'update'])->name('gallary.update');
});

Route::prefix('banner')->group(function(){
	Route::get('/add', [BannerController::class, 'addbanner'])->name('banner.add');
	Route::post('/store', [BannerController::class, 'storebanner'])->name('banner.store');
	Route::get('/all-banners', [BannerController::class, 'bannerlist'])->name('banner.list');
	Route::get('/change_status/{id}', [BannerController::class, 'changeStatus']);
	Route::get('/delete/{id}', [BannerController::class, 'deletebanner']);
	Route::get('/edit/{id}', [BannerController::class, 'edit'])->name('banner.edit');
	Route::post('/update/{id}', [BannerController::class, 'update'])->name('banner.update');
});


Route::prefix('slider')->group(function(){
	Route::get('/add', [SliderController::class, 'addslider'])->name('slider.add');
	Route::post('/store', [SliderController::class, 'storeslider'])->name('slider.store');
	Route::get('/all-sliders', [SliderController::class, 'sliderlist'])->name('slider.list');
	Route::get('/change_status/{id}', [SliderController::class, 'changeStatus']);
	Route::get('/delete/{id}', [SliderController::class, 'deleteslider']);
	Route::get('/edit/{id}', [SliderController::class, 'edit'])->name('slider.edit');
	Route::post('/update/{id}', [SliderController::class, 'update'])->name('slider.update');
});


Route::prefix('sisterconcurn')->group(function(){
	Route::get('/add', [SisterConcurnController::class, 'addsisterconcurn'])->name('sisterconcurn.add');
	Route::post('/store', [SisterConcurnController::class, 'storesisterconcurn'])->name('sisterconcurn.store');
	Route::get('/all-sisterconcurns', [SisterConcurnController::class, 'sisterconcurnlist'])->name('sisterconcurn.list');
	Route::get('/change_status/{id}', [SisterConcurnController::class, 'changeStatus']);
	Route::get('/delete/{id}', [SisterConcurnController::class, 'deletesisterconcurn']);
	Route::get('/edit/{id}', [SisterConcurnController::class, 'edit'])->name('sisterconcurn.edit');
	Route::post('/update/{id}', [SisterConcurnController::class, 'update'])->name('sisterconcurn.update');
});




Route::prefix('sisterconcurnslider')->group(function(){
	Route::get('/add', [SisterConcurnSliderController::class, 'addsisterconcurnslider'])->name('sisterconcurnslider.add');
	Route::post('/store', [SisterConcurnSliderController::class, 'storesisterconcurnslider'])->name('sisterconcurnslider.store');
	Route::get('/all-sisterconcurnsliders', [SisterConcurnSliderController::class, 'sisterconcurnsliderlist'])->name('sisterconcurnslider.list');
	Route::get('/change_status/{id}', [SisterConcurnSliderController::class, 'changeStatus']);
	Route::get('/delete/{id}', [SisterConcurnSliderController::class, 'deletesisterconcurnslider']);
	Route::get('/edit/{id}', [SisterConcurnSliderController::class, 'edit'])->name('sisterconcurnslider.edit');
	Route::post('/update/{id}', [SisterConcurnSliderController::class, 'update'])->name('sisterconcurnslider.update');
});




Route::resource('contact', ContactinfoController::class);
Route::resource('sisterconcurn', SisterConcurnDetailsController::class);


Route::prefix('mail')->group(function(){
Route::post('/store', [MailController::class, 'store'])->name('mail.store');
Route::get('/all-mail', [MailController::class, 'allmail'])->name('mail.list');
Route::get('/delete/{id}', [MailController::class, 'deletemail'])->name('mail.destroy');
});
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});


