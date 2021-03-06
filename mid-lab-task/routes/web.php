<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\ProductController;

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

Route::get('/', [LoginController::class, 'index'])->name('login.index');
Route::post('/', [LoginController::class, 'verify'])->name('login.verify');

Route::get('/registration', [RegistrationController::class, 'index'])->name('registration.index');
Route::post('/registration', [RegistrationController::class, 'register'])->name('registration.register');

Route::group(['middleware'=>['SessionVerify']], function(){
    Route::get('/admin',[LoginController::class,'superAdminDashboard'])->name('superadmin.dashboard');
    Route::get('/logout', [LogoutController::class, 'logout']);
});



// Route::get('/customer',[LoginController::class,'customerDashboard'])->name('admin.dashboard');
// Route::get('/accountant',[LoginController::class,'accountantDashboard'])->name('author.dashboard');
// Route::get('/vendor',[LoginController::class,'vendorDashboard'])->name('user.dashboard');




Route::group(['prefix' => 'system/sales'], function () {

        Route::get('/physical_store', [SalesController::class,'physicalStore'])->name('SalesController.physicalStore');

        Route::get('physical_store/sales_log', [SalesController::class,'salesLogDetails'])->name('salesLogDetails');
        Route::get('physical_store/upload_data', [SalesController::class,'uploadData'])->name('Sales.excel.upload');

        

        Route::get('physical_store/productsales', [SalesController::class,'salesLog'])->name('SalesController.salesLog');
        Route::post('physical_store/productsales', [SalesController::class,'salesLogData'])->name('SalesController.salesLog');

        Route::get('/social_media', [SalesController::class,'mediaLog'])->name('SalesController.mediaLog');

        Route::get('/ecommerce', [SalesController::class,'ecommerceLog'])->name('SalesController.ecommerceLog');
        
        //export

        Route::get('/physical_store/sold_log', [SalesController::class, 'soldlog'])->name('Sales.sold.log');
        Route::get('/physical_store/pending_log', [SalesController::class, 'loggs'])->name('Sales.pending.log');
        Route::get('/physical_store/pdfdownload', [SalesController::class, 'download'])->name('Sales.pdf.download');
        Route::get('/physical_store/sold/pdfdownload', [SalesController::class, 'downloadSoldProduct'])->name('Sales.sold.download');

        Route::get('/physical_store/pending/pdfdownload', [SalesController::class, 'downloadPendingProduct'])->name('Sales.pdf.pending.download');
    });


    Route::group(['prefix' => 'system/product_management'], function () {

        Route::get('/manage', [ProductController::class,'manage'])->name('product.manage');
        Route::get('/existing_products', [ProductController::class,'existingProducts'])->name('product.existingProducts');
        Route::get('/upcoming_products', [ProductController::class,'upcomingProducts'])->name('product.upcomingProducts');
        Route::get('/add_products', [ProductController::class,'addProducts'])->name('product.addProducts');
        Route::post('/store', [ProductController::class,'productStore'])->name('product.storeProduct');
        //existing
        Route::get('/existing_products/edit/{id}', [ProductController::class,'editExistingProduct'])->name('existingproduct.edit');
        Route::post('/existing_products/update', [ProductController::class,'updateExistingProduct'])->name('product.updateProducts');

        Route::get('/existing_products/delete/{id}', [ProductController::class,'deleteExistingProduct'])->name('existingproduct.delete');
        Route::post('/existing_products/deleted/{id}', [ProductController::class,'deletedExistingProduct'])->name('existingproduct.deleteted');
        Route::get('/existingproduct/{product_id}', [ProductController::class,'DetailsExistingProduct'])->name('existingproduct.details');

        //upcoming

        Route::get('/upcoming_products/edit/{id}', [ProductController::class,'editUpcomingProduct'])->name('upcomingproduct.edit');
        Route::post('/upcoming_products/update', [ProductController::class,'updateUpcomingProduct'])->name('product.updateProducts');

        Route::get('/upcoming_products/delete/{id}', [ProductController::class,'deleteUpcomingProduct'])->name('upcomingproduct.delete');
        Route::post('/upcoming_products/deleted/{id}', [ProductController::class,'deletedUpcomingProduct'])->name('upcomingproduct.deleted');
        
        Route::get('/product/{product_id}', [ProductController::class,'DetailsUpcomingProduct'])->name('upcomingproduct.details');
        
        
    });

