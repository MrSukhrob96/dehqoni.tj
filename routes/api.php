<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\WishlistController;

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\LogoutController;
use App\Http\Controllers\Api\Auth\RefreshController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\ImageController;
use App\Http\Controllers\Api\ProductsController;
use App\Http\Controllers\Api\ProfileController;
use App\Http\Controllers\MainController;

Route::get("/", [MainController::class, "index"]);

Route::apiResource("category/{slug}/products", ProductsController::class)->only("index", "show");

Route::post("login", [LoginController::class, "store"]);
Route::post("register", [RegisterController::class, "store"]);

Route::middleware(['auth:api'])->group(function () {
    Route::apiResource("category/{slug}/products", ProductsController::class)->only("store", "update", "destroy");

    Route::apiResource("profile", ProfileController::class);
    Route::apiResource("profile/products", ProductController::class);
    Route::apiResource("profile/wishlists", WishlistController::class);

    Route::post("upload/image", [ImageController::class, "uploadImage"]);

    Route::apiResource("logout", LogoutController::class);
    Route::apiResource("refresh/token", RefreshController::class);
});


Route::middleware(["auth:api"])->group(function () {
    Route::prefix("admin")->group(function () {
    });
});
