<?php
use App\Helpers\AdminHelper;
use App\Http\Controllers\admin\BannerCategoryController;
use App\Http\Controllers\admin\BannerController;
use App\Http\Controllers\admin\BlogPostController;
use App\Http\Controllers\admin\FaqCategoryController;
use App\Http\Controllers\admin\FaqController;
use App\Http\Controllers\admin\OurClientController;
use App\Http\Controllers\admin\PageController;
use App\Http\Controllers\AdminMainController;



Route::get('/',[AdminMainController::class,'Dashboard'])->name('admin.Dashboard');

Route::get('/OurClient',[OurClientController::class,'index'])->name('OurClient.index');
Route::get('/OurClient/create',[OurClientController::class,'create'])->name('OurClient.create');
Route::get('/OurClient/edit/{id}',[OurClientController::class,'edit'])->name('OurClient.edit');
Route::get('/OurClient/destroy/{id}',[OurClientController::class,'destroy'])->name('OurClient.destroy');
Route::post('/OurClient/update/{id}',[OurClientController::class,'storeUpdate'])->name('OurClient.update');
Route::get('/OurClient/emptyPhoto/{id}', [OurClientController::class,'emptyPhoto'])->name('OurClient.emptyPhoto');
Route::get('/OurClient/Sort',[OurClientController::class,'Sort'])->name('OurClient.Sort');
Route::post('/OurClient/SaveSort', [OurClientController::class,'SaveSort'])->name('OurClient.SaveSort');
Route::get('/OurClient/Config',[OurClientController::class,'config'])->name('OurClient.Config');



Route::get('/Banner/Config',[BannerCategoryController::class,'config'])->name('Banners.Config');
Route::get('/Banner/Category',[BannerCategoryController::class,'index'])->name('Banners.BannerCat.index');
Route::get('/Banner/Category/create',[BannerCategoryController::class,'create'])->name('Banners.BannerCat.create');
Route::get('/Banner/Category/edit/{id}',[BannerCategoryController::class,'edit'])->name('Banners.BannerCat.edit');
Route::get('/Banner/Category/destroy/{id}',[BannerCategoryController::class,'destroy'])->name('Banners.BannerCat.destroy');
Route::post('/Banner/Category/update/{id}',[BannerCategoryController::class,'storeUpdate'])->name('Banners.BannerCat.update');
Route::get('/Banner/Category/SoftDelete/',[BannerCategoryController::class,'SoftDeletes'])->name('Banners.BannerCat.SoftDelete');
Route::get('/Banner/Category/restore/{id}',[BannerCategoryController::class,'restored'])->name('Banners.BannerCat.restore');
Route::get('/Banner/Category/force/{id}',[BannerCategoryController::class,'ForceDeletes'])->name('Banners.BannerCat.force');

Route::get('/Banner',[BannerController::class,'index'])->name('Banners.Banner.index');
Route::get('/Banner/ListCategory/{Categoryid}',[BannerController::class,'ListCategory'])->name('Banners.Banner.ListCategory');
Route::get('/Banner/create',[BannerController::class,'create'])->name('Banners.Banner.create');
Route::get('/Banner/edit/{id}',[BannerController::class,'edit'])->name('Banners.Banner.edit');
Route::get('/Banner/destroy/{id}',[BannerController::class,'destroy'])->name('Banners.Banner.destroy');
Route::post('/Banner/update/{id}',[BannerController::class,'storeUpdate'])->name('Banners.Banner.update');
Route::get('/Banner/Sort/{Categoryid}',[BannerController::class,'Sort'])->name('Banners.Banner.Sort');
Route::post('/Banner/SaveSort', [BannerController::class,'SaveSort'])->name('Banners.Banner.SaveSort');


Route::get('/Faq/Config',[FaqCategoryController::class,'config'])->name('FAQ.Config');
Route::get('/Faq/Category',[FaqCategoryController::class,'index'])->name('FAQ.FaqCat.index');
Route::get('/Faq/Category/create',[FaqCategoryController::class,'create'])->name('FAQ.FaqCat.create');
Route::get('/Faq/Category/edit/{id}',[FaqCategoryController::class,'edit'])->name('FAQ.FaqCat.edit');
Route::get('/Faq/Category/destroy/{id}',[FaqCategoryController::class,'destroy'])->name('FAQ.FaqCat.destroy');
Route::post('/Faq/Category/update/{id}',[FaqCategoryController::class,'storeUpdate'])->name('FAQ.FaqCat.update');
Route::get('/Faq/Category/SoftDelete/',[FaqCategoryController::class,'SoftDeletes'])->name('FAQ.FaqCat.SoftDelete');
Route::get('/Faq/Category/restore/{id}',[FaqCategoryController::class,'restored'])->name('FAQ.FaqCat.restore');
Route::get('/Faq/Category/force/{id}',[FaqCategoryController::class,'ForceDeletes'])->name('FAQ.FaqCat.force');
Route::get('/Faq/emptyPhoto/{id}', [FaqCategoryController::class,'emptyPhoto'])->name('FAQ.FaqCat.emptyPhoto');
Route::get('/Faq/Sort/{Categoryid}',[FaqController::class,'Sort'])->name('FAQ.FaqCat.Sort');


Route::get('/Faq',[FaqController::class,'index'])->name('FAQ.FaqList.index');
Route::get('/Faq/ListCategory/{Categoryid}',[FaqController::class,'ListCategory'])->name('FAQ.FaqList.ListCategory');
Route::get('/Faq/create',[FaqController::class,'create'])->name('FAQ.FaqList.create');
Route::get('/Faq/edit/{id}',[FaqController::class,'edit'])->name('FAQ.FaqList.edit');
Route::get('/Faq/destroy/{id}',[FaqController::class,'destroy'])->name('FAQ.FaqList.destroy');
Route::post('/Faq/update/{id}',[FaqController::class,'storeUpdate'])->name('FAQ.FaqList.update');
Route::post('/Faq/SaveSort', [FaqController::class,'SaveSort'])->name('FAQ.FaqList.SaveSort');


Route::get('/Pages', [PageController::class,'index'])->name('Pages.pageList.index');
Route::get('/Pages/create', [PageController::class,'create'])->name('Pages.pageList.create');
Route::get('/Pages/edit/{id}', [PageController::class,'edit'])->name('Pages.pageList.edit');
Route::post('/Pages/Update/{id}', [PageController::class,'storeUpdate'])->name('Pages.pageList.update');
Route::get('/Pages/delete/{id}', [PageController::class,'delete'])->name('Pages.pageList.destroy');
Route::get('/Pages/config', [PageController::class,'config'])->name('Pages.pageList.config');
Route::get('/Pages/SoftDelete/',[PageController::class,'SoftDeletes'])->name('Pages.pageList.SoftDelete');
Route::get('/Pages/restore/{id}',[PageController::class,'restored'])->name('Pages.pageList.restore');
Route::get('/Pages/force/{id}',[PageController::class,'ForceDeletes'])->name('Pages.pageList.force');
Route::get('/Pages/emptyPhoto/{id}', [PageController::class,'emptyPhoto'])->name('Pages.pageList.emptyPhoto');
Route::get('/Pages/Sort',[PageController::class,'Sort'])->name('Pages.pageList.Sort');
Route::post('/Pages/SaveSort', [PageController::class,'SaveSort'])->name('Pages.pageList.SaveSort');
