<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/",[PageController::class,'home'])->name("page.home");

Route::get("/inventory",[ItemController::class,'index'])->name("inventory.index");

Route::get("/inventory/create",[ItemController::class,'create'])->name("inventory.create");

Route::post("/inventory",[ItemController::class,'store'])->name("inventory.store");

Route::get("/inventory/{id}",[ItemController::class,'show'])->name("inventory.show");

Route::delete("/inventory/{id}",[ItemController::class,'destroy'])->name("inventory.destroy");

Route::get("/inventory/{id}/edit",[ItemController::class,'edit'])->name("inventory.edit");

Route::put("/inventory/{id}",[ItemController::class,'update'])->name("inventory.update");


Route::resource("category",CategoryController::class);




