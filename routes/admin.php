<?php
use App\Helpers\AdminHelper;
use App\Http\Controllers\admin\faq\FaqCategoryController;
use App\Http\Controllers\admin\faq\FaqController;
use App\Http\Controllers\admin\PageController;
use App\Http\Controllers\AdminMainController;



Route::get('/',[AdminMainController::class,'Dashboard'])->name('admin.Dashboard');

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



Route::get('/Faq/Config',[FaqCategoryController::class,'config'])->name('FAQ.FaqConfig.Config');
Route::get('/Faq/Category',[FaqCategoryController::class,'index'])->name('FAQ.FaqCat.index');
Route::get('/Faq/Category/create',[FaqCategoryController::class,'create'])->name('FAQ.FaqCat.create');
Route::get('/Faq/Category/edit/{id}',[FaqCategoryController::class,'edit'])->name('FAQ.FaqCat.edit');
Route::get('/Faq/Category/destroy/{id}',[FaqCategoryController::class,'destroy'])->name('FAQ.FaqCat.destroy');
Route::post('/Faq/Category/update/{id}',[FaqCategoryController::class,'storeUpdate'])->name('FAQ.FaqCat.update');
Route::get('/Faq/Category/SoftDelete/',[FaqCategoryController::class,'SoftDeletes'])->name('FAQ.FaqCat.SoftDelete');
Route::get('/Faq/Category/restore/{id}',[FaqCategoryController::class,'restored'])->name('FAQ.FaqCat.restore');
Route::get('/Faq/Category/force/{id}',[FaqCategoryController::class,'ForceDeletes'])->name('FAQ.FaqCat.force');
Route::get('/Faq/Category/emptyPhoto/{id}', [FaqCategoryController::class,'emptyPhoto'])->name('FAQ.FaqCat.emptyPhoto');
Route::get('/Faq/Sort/{Categoryid}',[FaqController::class,'Sort'])->name('FAQ.FaqCat.Sort');




Route::get('/Faq',[FaqController::class,'index'])->name('FAQ.FaqList.index');
Route::get('/Faq/ListCategory/{Categoryid}',[FaqController::class,'ListCategory'])->name('FAQ.FaqList.ListCategory');
Route::get('/Faq/create',[FaqController::class,'create'])->name('FAQ.FaqList.create');
Route::get('/Faq/edit/{id}',[FaqController::class,'edit'])->name('FAQ.FaqList.edit');
Route::get('/Faq/destroy/{id}',[FaqController::class,'destroy'])->name('FAQ.FaqList.destroy');
Route::post('/Faq/update/{id}',[FaqController::class,'storeUpdate'])->name('FAQ.FaqList.update');
Route::post('/Faq/SaveSort', [FaqController::class,'SaveSort'])->name('FAQ.FaqList.SaveSort');

Route::get('/Faq/SoftDelete/',[FaqController::class,'SoftDeletes'])->name('FAQ.FaqList.SoftDelete');
Route::get('/Faq/restore/{id}',[FaqController::class,'restored'])->name('FAQ.FaqList.restore');
Route::get('/Faq/force/{id}',[FaqController::class,'ForceDeletes'])->name('FAQ.FaqList.force');
Route::get('/Faq/emptyPhoto/{id}', [FaqController::class,'emptyPhoto'])->name('FAQ.FaqList.emptyPhoto');

Route::get('/Faq/photos/{id}',[FaqController::class,'ListMorePhoto'])->name('FAQ.FaqList.More_Photos');
Route::post('/Faq/saveSort', [FaqController::class,'sortPhotoSave'])->name('FAQ.FaqList.sortPhotoSave');
Route::post('/Faq/AddMore',[FaqController::class,'AddMorePhotos'])->name('FAQ.FaqList.More_PhotosAdd');
Route::get('/Faq/PhotoDel/{id}',[FaqController::class,'More_PhotosDestroy'])->name('FAQ.FaqList.More_PhotosDestroy');
Route::get('/Faq/editPhoto/{id}',[FaqController::class,'EditPhoto'])->name('FAQ.FaqList.EditPhoto');
Route::post('Faq/editPhotoUpdate/{id}', [FaqController::class,'editPhotoUpdate'])->name('FAQ.FaqList.editPhotoUpdate');

Route::get('/Faq/photosList/{faq_id}',[FaqController::class,'ListPhotosEdit'])->name('FAQ.FaqList.ListPhotosEdit');
Route::post('/Faq/photosListUpdate', [FaqController::class,'ListPhotosUpdate'])->name('FAQ.FaqList.ListPhotosUpdate');
