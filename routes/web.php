<?php

use App\Http\Controllers\indexController;
use Illuminate\Support\Facades\Route;

Route::get("/",[indexController::class , "index"])->name("post.index");

Route::get("/posts/create",[indexController::class , "create"])->name("post.create");

Route::post("/posts",[indexController::class , "store"])->name("post.store");

Route::get("/posts/{posts}/edit",[indexController::class , "edit"])->name("post.edit");

Route::get("/posts/{post}",[indexController::class , "show"])->name("post.show");

Route::put("/posts/{post}",[indexController::class , "update"])->name("post.update");

Route::delete("/posts/{post}",[indexController::class , "destroy"])->name("post.destroy");

