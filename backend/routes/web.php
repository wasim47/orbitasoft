<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\CommonController;
use App\Http\Controllers\admin\ArticleController;
use App\Http\Controllers\admin\MenusController;
use App\Http\Controllers\admin\ContentController;
use App\Http\Controllers\admin\BannerController;
use App\Http\Controllers\admin\UsefulllinkController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\admin\PortfolioController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\ClientController;
use App\Http\Controllers\admin\PackageController;
use App\Http\Controllers\admin\FeedbackController;
use App\Http\Controllers\admin\FaqController;
use App\Http\Controllers\admin\PackageCategoryController;
use App\Http\Controllers\admin\ImportExportController;

Route::middleware('guest')->group(function () {
    // Show the login form
    Route::get('/', [AuthController::class, 'showLogin'])->name('admin.login');
    
    // Handle login form submission
    Route::post('login', [AuthController::class, 'login'])->name('admin.login.submit');
    
    // Password reset request page
    Route::get('password/reset', [AuthController::class, 'showLinkRequestForm'])->name('password.request');
    
    // Send password reset link to the user's email
    Route::post('password/email', [AuthController::class, 'sendResetLinkEmail'])->name('password.email');
});

Route::prefix('admin')->middleware('auth:administration')->group(function () {
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('logout', [AuthController::class, 'logout'])->name('admin.logout');

    // CommonController routes
    Route::any('masterdelete', [CommonController::class, 'deletedata'])->name('common.masterdelete');
    Route::any('permissions', [CommonController::class, 'permissions'])->name('common.permissions');
    Route::any('permissionsuser', [CommonController::class, 'permissionsUser'])->name('common.permissionsuser');

    // Resource routes
    Route::resource('admins', AdminController::class);
    Route::resource('menu', MenusController::class);
    Route::resource('contents', ContentController::class);
    Route::resource('banner', BannerController::class);
    Route::resource('usefulllink', UsefulllinkController::class);
    Route::resource('service', ServiceController::class);
    Route::resource('package', PackageController::class);
    Route::resource('package_category', PackageCategoryController::class);
    Route::resource('portfolio', PortfolioController::class);
    Route::resource('product', ProductController::class);
    Route::resource('clients', ClientController::class);
    Route::resource('feedback', FeedbackController::class);
    Route::resource('faq', FaqController::class);
	Route::get('menu/ajaxmenu', [MenusController::class, 'searchmenu'])->name('menus.ajaxmenu');

    // ImportExportController routes
    Route::get('/export', [ImportExportController::class, 'export'])->name('importexport.export');
    Route::get('/importExportView', [ImportExportController::class, 'importExportView'])->name('importexport.view');
    Route::post('/import', [ImportExportController::class, 'import'])->name('importexport.import');
});
