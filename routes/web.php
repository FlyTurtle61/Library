<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AssistantController;
use App\Http\Controllers\ReaderController;
use Illuminate\Support\Facades\DB;


Route::get('/', function () {
    return redirect()->Route("login");
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', "verified"])->name('dashboard');

Route::get('welcome', function () {
    return view("welcome");
});

Route::get("/guest", [GuestController::class, "index"])->name("guest");



Route::group(["prefix" => "admin", "middleware" => ["auth", "verified", "can:isAdmin"]], function () {
    Route::get("main", [AdminController::class, "index"])->name("admin.main");
    Route::get("users", [AdminController::class, "users"])->name("admin.users");
    Route::post("users", [AdminController::class, "addUser"])->name("admin.addUser");
    Route::get("user/{id}", [AdminController::class, "getUser"])->name("admin.user");
    Route::post("user", [AdminController::class, "updateUser"])->name("admin.updateUser");
    Route::delete("user/{id}", [AdminController::class, "deleteUser"])->name("admin.deleteUser");
});

Route::group(["prefix" => "assistant", "middleware" => ["auth", "verified", "can:isAssistant"]], function () {
    Route::get("main", [AssistantController::class, "index"])->name("assistant.main");

    Route::get("books", [AssistantController::class, "books"])->name("assistant.books");
    Route::post("books", [AssistantController::class, "addBook"])->name("assistant.addBook");
    Route::get("book/{id}", [AssistantController::class, "getBook"])->name("assistant.book");
    Route::post("book", [AssistantController::class, "updateBook"])->name("assistant.updateBook");
    Route::delete("book/{id}", [AssistantController::class, "deleteBook"])->name("assistant.deleteBook");

    Route::get("writers", [AssistantController::class, "writers"])->name("assistant.writers");
    Route::post("writers", [AssistantController::class, "addWriter"])->name("assistant.addWriter");
    Route::get("writer/{id}", [AssistantController::class, "getWriter"])->name("assistant.writer");
    Route::post("writer", [AssistantController::class, "updateWriter"])->name("assistant.updateWriter");
    Route::delete("writer/{id}", [AssistantController::class, "deleteWriter"])->name("assistant.deleteWriter");

    Route::get("categories", [AssistantController::class, "categories"])->name("assistant.categories");
    Route::post("categories", [AssistantController::class, "addCategory"])->name("assistant.addCategory");
    Route::get("category/{id}", [AssistantController::class, "getCategory"])->name("assistant.category");
    Route::post("category", [AssistantController::class, "updateCategory"])->name("assistant.updateCategory");
    Route::delete("category/{id}", [AssistantController::class, "deleteCategory"])->name("assistant.deleteCategory");

    Route::get("publishers", [AssistantController::class, "publishers"])->name("assistant.publishers");
    Route::post("publishers", [AssistantController::class, "addPublisher"])->name("assistant.addPublisher");
    Route::get("publisher/{id}", [AssistantController::class, "getPublisher"])->name("assistant.publisher");
    Route::post("publisher", [AssistantController::class, "updatePublisher"])->name("assistant.updatePublisher");
    Route::delete("publisher/{id}", [AssistantController::class, "deletePublisher"])->name("assistant.deletePublisher");
});

    Route::group(["prefix" => "Reader", "middleware" => ["auth", "verified", "can:isReader"]], function () {
        Route::get("main", [ReaderController::class, "index"])->name("reader.main");
    });


Route::get("test", function () {
    $data["kategoriler"] = DB::table("categories")->get();
    return view("test", $data);
});


Route::post("kategoriler", function (Request $request) {

    $id = DB::table("categories")->insertGetId([
        "category_name" => $request->category_name
    ]);
    if ($id) {
        return response()->json([
            "result" => true,
            "kategori_id" => $id
        ]);
    } else {
        return response()->json([
            "result" => false
        ]);
    }
})->name("kategori.ekle");




require __DIR__ . '/auth.php';
