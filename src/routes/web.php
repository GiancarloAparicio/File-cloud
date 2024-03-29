<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Redirect;

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

Route::get("/", function () {
    if (Auth::check()) {
        return Redirect::to("home");
    }

    return view("welcome");
});

Route::middleware(["auth:sanctum", "verified"])
    ->get("/home", [HomeController::class, "index"])
    ->name("home");

Route::post("/store", [HomeController::class, "store"])
    ->name("home.store")
    ->middleware("auth");
