<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AssistantController;


Route::get('/', function(){
    return redirect()->Route("login");
});

Route::get('/dashboard', function () {
   return view('dashboard');
})->middleware(['auth',"verified"])->name('dashboard');

Route::get('welcome',function(){
    return view("welcome");
});

Route::get("/guest", [GuestController::class, "index"])->name("guest");



Route::group(["prefix" => "admin", "middleware" => ["auth", "verified", "can:isAdmin"]], function () {
    Route::get("main",[AdminController::class,"index"])->name("admin.main");
    Route::get("users",[AdminController::class,"users"])->name("admin.users");
    Route::post("users",[AdminController::class,"addUser"])->name("admin.addUser");
    Route::get("user/{id}",[AdminController::class,"getUser"])->name("admin.user");
    Route::post("user",[AdminController::class,"updateUser"])->name("admin.updateUser");
    Route::delete("user/{id}",[AdminController::class,"deleteUser"])->name("admin.deleteUser");
});

Route::group(["prefix" => "assistant", "middleware" => ["auth", "verified", "can:isAssistant"]], function () {
    Route::get("main",[AssistantController::class,"index"])->name("assistant.main");
    Route::get("books",[AssistantController::class,"books"])->name("assistant.books");
    Route::post("books",[AssistantController::class,"addBook"])->name("assistant.addBook");
    Route::get("book/{id}",[AssistantController::class,"getBook"])->name("assistant.book");
    Route::post("book",[AssistantController::class,"updateBook"])->name("assistant.updateBook");
    Route::delete("book/{id}",[AssistantController::class,"deleteBook"])->name("assistant.deleteBook");

    








});




require __DIR__ . '/auth.php';
