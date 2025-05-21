<?php

use App\Http\Controllers\api\v1\HomepageController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => '/', 'namespace' => 'api\v1',], function($route) {

    $route->get('/menus', [HomepageController::class,'menus']);
    $route->get('/contents/{slug}', [HomepageController::class,'contents']);
    $route->get('/banners', [HomepageController::class,'banners']);
    $route->get('/clients', [HomepageController::class,'clients']);
    $route->get('/products', [HomepageController::class,'products']);
    $route->get('/portfolio', [HomepageController::class,'portfolio']);
    $route->get('/services', [HomepageController::class,'services']);
    $route->get('/services/{category}', [HomepageController::class,'services']);
    $route->get('/service/{slug}', [HomepageController::class,'serviceDetails']);

    $route->get('/packages', [HomepageController::class,'packages']);
    $route->get('/feedbacks', [HomepageController::class,'feedbacks']);
    $route->get('/faqs', [HomepageController::class,'faqs']);

});
