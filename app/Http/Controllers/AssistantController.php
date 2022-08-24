<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Writer;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AssistantController extends Controller
{
    public function index()
    {
        $data["title"] = "Asistan Anasayfa";
        $data["page_title"] = "Asistan Anasayfa";
        $data["content"] = view("users.assistant.anasayfa.anasayfa");
        return view("users.assistant.main", $data);
    }
    public function books()
    {
        $data1["books"] = DB::table("books as t1")
            ->select("t1.id", "t1.book_img", "t1.book_name", "t1.publication_year", "t1.page_number", "t1.volume_number", "t3.category_name", "t5.writer_name", "t6.publisher_name")
            ->join("category_intermediate_table as t2", "t1.id", "=", "t2.category_intermediate_book_id")
            ->join("categories as t3", "t3.id", "=", "t2.category_intermediate_id")
            ->join("writer_intermediate_table as t4", "t1.id", "=", "t4.writer_intermediate_book_id")
            ->join("writers as t5", "t5.id", "=", "t4.writer_intermediate_id")
            ->join("publishers as t6", "t1.publisher_id", "=", "t6.publisher_id")
            ->paginate(25);

        $data1["categories"] = Category::all();
        $data1["publishers"] = Publisher::all();
        $data1["writers"] = Writer::all();
        $data["title"] = "Kitap Ekle";
        $data["page_title"] = "Kitap Ekle";
        $data["content"] = view("users.assistant.books.books", $data1);
        return view("users.assistant.main", $data);
    }
    public function addBook(Request $request)
    {

        $error_message = [
            "required" => ":attribute alanı boş geçmeyiniz.",
            "unique" => "Aynı :attribute kitap ismi ile birden fazla kayıt oluşturulamaz!!",

        ];

        Validator::make($request->all(), [
            "book_name" => "required", "unique:books",
            "book_img" => "required",
            "publication_year" => "required",
            "page_number" => "required",
            "volume_number" => "required",
            "category_name" => "required",
            "publisher_name" => "required",
            "writer_name" => "required"


        ], $error_message)->validate();
        $book = new Book();

        $book->book_name = $request->book_name;

        $book->book_img = Storage::put("public/book_img", $request->book_img);

        $book->publication_year = $request->publication_year;
        $book->page_number = $request->page_number;
        $book->volume_number = $request->volume_number;
        $book->publisher_id = $request->publisher_name;
        $book->save();

        DB::table("category_intermediate_table")->insert([
            "category_intermediate_book_id" => $book->id,
            "category_intermediate_id" => $request->category_name
        ]);

        DB::table("writer_intermediate_table")->insert([
            "writer_intermediate_book_id" => $book->id,
            "writer_intermediate_id" => $request->writer_name
        ]);

        return redirect()->route("assistant.books");
    }

    public function getBook($id)
    {
        $data1["book"] = Book::find($id);
        $data["title"] = "Kitap Düzenle";
        $data["page_title"] = "Kitap Düzenle";
        $data["content"] = view("users.assistant.books.book", $data1);
        return view("users.assistant.main", $data);
    }
    public function updateBook(Request $request)
    {
        $mesaj = [
            "required" => ":attribute zorunlu alandır.",
            "min" => ":attribute alanında eksik değer",
            "max" => ":attribute alanında fazla değer",
            "integer" => ":attribute alanına sayısal değer girilmeli"
        ];

        Validator::make($request->all(), [
            "id" => ["required", "min:1", "max:9999999999999", "integer"],
            "book_name" => ["required", "min:1", "max:20"],
            "publication_year" => ["required", "min:1", "max:4"],
            "page_number" => ["required"],
            "volume_number" => ["required"],
        ], $mesaj)->validate();

        $book = Book::find($request->book_id);
        $book->id = $request->id;
        $book->book_name = $request->book_name;
        $book->publication_year = $request->publication_year;
        $book->page_number = $request->page_number;
        $book->volume_number = $request->volume_number;
        $book->save();
        return redirect()->route("assistant.books", $request->book_id);
    }
    public function deleteBook($id)
    {
        Book::where("id", $id)->delete();
        return redirect()->route("assistant.books");
    }

    public function writers()
    {
        $data1["writers"] = Writer::all();
        $data["title"] = "Yazar Ekle";
        $data["page_title"] = "Yazar Ekle";
        $data["content"] = view("users.assistant.writers.writers", $data1);
        return view("users.assistant.main", $data);
    }
    public function addWriter(Request $request)
    {

        $error_message = [
            "required" => ":attribute alanı boş geçmeyiniz.",
            "unique" => "Aynı :attribute kitap ismi ile birden fazla kayıt oluşturulamaz!!",
        ];

        Validator::make($request->all(), [
            "writer_name" => "required", "unique:writers",
            "email" => "required", "unique:writers",
            "birth_year" => "required", "integer",
            "writer_img" => "required",
            "phone" => "required", "unique:writers",

        ], $error_message)->validate();
        $writer = new Writer();
        $writer->writer_name = $request->writer_name;

        $writer->writer_img = Storage::put("public/writer_img", $request->writer_img);

        $writer->phone = $request->phone;
        $writer->email = $request->email;
        $writer->birth_year = $request->birth_year;
        $writer->save();
        return redirect()->route("assistant.writers");
    }
    public function getWriter($id)
    {
        $data1["writer"] = Writer::find($id);
        $data["title"] = "Yazar Düzenle";
        $data["page_title"] = "Yazar Düzenle";
        $data["content"] = view("users.assistant.writers.writer", $data1);
        return view("users.assistant.main", $data);
    }
    public function updateWriter(Request $request)
    {
        $mesaj = [
            "required" => ":attribute zorunlu alandır.",
            "min" => ":attribute alanında eksik değer",
            "max" => ":attribute alanında fazla değer",
            "unique" => "Aynı :attribute email  ile birden fazla kayıt oluşturulamaz!!",
            "integer" => ":attribute alanına sayısal değer girilmeli"
        ];

        Validator::make($request->all(), [
            "writer_name" => ["required", "min:1", "max:25"],
            "writer_img" => ["required"],
            "birth_year" => ["required", "min:1", "max:2999", "integer"],
            "phone" => ["required", "min:1", "max:11"],
            "email" => ["required"],
            "id" => ["required", "min:1", "max:9999999999999"],
        ], $mesaj)->validate();

        $writer = Writer::find($request->writer_id);
        $writer->writer_name = $request->writer_name;
        $writer->phone = $request->phone;
        $writer->email = $request->email;
        $writer->birth_year = $request->birth_year;
        $writer->id = $request->id;
        $writer->save();
        return redirect()->route("assistant.writers", $request->id);
    }

    public function deleteWriter($id)
    {
        Writer::where("id", $id)->delete();
        return redirect()->route("assistant.writers");
    }
    public function categories()
    {
        $data1["categories"] = Category::all();
        $data["title"] = "Kategori Ekle";
        $data["page_title"] = "Kategori Ekle";
        $data["content"] = view("users.assistant.categories.categories", $data1);
        return view("users.assistant.main", $data);
    }
    public function addCategory(Request $request)
    {

        $error_message = [
            "required" => ":attribute alanı boş geçmeyiniz.",
            "unique" => "Aynı :attribute kitap ismi ile birden fazla kayıt oluşturulamaz!!",
        ];

        Validator::make($request->all(), [
            "category_name" => "required",
            "category_img" => "required",

        ], $error_message)->validate();
        $category = new Category();
        $category->category_name = $request->category_name;
        $category->category_img = Storage::put("public/category_img", $request->category_img);
        $category->save();
        return redirect()->route("assistant.categories");
    }
    public function getCategory($id)
    {
        $data1["category"] = Category::find($id);
        $data["title"] = "Kategori Düzenle";
        $data["page_title"] = "Kategori Düzenle";
        $data["content"] = view("users.assistant.categories.category", $data1);
        return view("users.assistant.main", $data);
    }
    public function updateCategory(Request $request)
    {
        $mesaj = [
            "required" => ":attribute zorunlu alandır.",
            "min" => ":attribute alanında eksik değer",
            "max" => ":attribute alanında fazla değer",
            "unique" => "Aynı :attribute email  ile birden fazla kayıt oluşturulamaz!!",
            "integer" => ":attribute alanına sayısal değer girilmeli"
        ];

        Validator::make($request->all(), [
            "category_name" => ["required", "min:1", "max:25"],
            "id" =>["required","integer"],
        ], $mesaj)->validate();

        $category = Category::find($request->category_id);
        $category->category_name = $request->category_name;
        $category->id = $request->id;
        $category->save();
        return redirect()->route("assistant.categories", $request->id);
    }

    public function deleteCategory($id)
    {
        Category::where("id", $id)->delete();
        return redirect()->route("assistant.categories");
    }

    public function publishers()
    {
        $data1["publishers"] = Publisher::all();
        $data["title"] = "Yayınevi Ekle";
        $data["page_title"] = "Yayınevi Ekle";
        $data["content"] = view("users.assistant.publishers.publishers", $data1);
        return view("users.assistant.main", $data);
    }
    public function addPublisher(Request $request)
    {

        $error_message = [
            "required" => ":attribute alanı boş geçmeyiniz.",
            "unique" => "Aynı :attribute kitap ismi ile birden fazla kayıt oluşturulamaz!!",
        ];

        Validator::make($request->all(), [
            "publisher_name" => "required",
            "publisher_img" => "required",
            "address" => "required",
            "phone" => "required",
            "email" => "required",

        ], $error_message)->validate();
        $publisher = new Publisher();
        $publisher->publisher_name = $request->publisher_name;
        $publisher->publisher_img = Storage::put("public/publisher_img", $request->publisher_img);
        $publisher->phone = $request->phone;
        $publisher->address = $request->address;
        $publisher->email = $request->email;
        $publisher->save();
        return redirect()->route("assistant.publishers");
    }
    public function getPublisher($id)
    {
        $data1["publisher"] = Publisher::find($id);
        $data["title"] = "Yayınevi Düzenle";
        $data["page_title"] = "Yayınevi Düzenle";
        $data["content"] = view("users.assistant.publishers.publisher", $data1);
        return view("users.assistant.main", $data);
    }
    public function updatePublisher(Request $request)
    {
         $mesaj = [
            "required" => ":attribute zorunlu alandır.",
            "min" => ":attribute alanında eksik değer",
            "max" => ":attribute alanında fazla değer",
            "unique" => "Aynı :attribute email  ile birden fazla kayıt oluşturulamaz!!",
            "integer" => ":attribute alanına sayısal değer girilmeli"
        ];

        Validator::make($request->all(), [
            "publisher_name" => ["required", "min:1", "max:25"],
            "address" => ["required"],
            "phone" => ["required","unique:publishers"],
            "email" => ["required","unique:publishers"],
        ], $mesaj)->validate();

        $publisher = Publisher::find($request->publisher_id);
        $publisher->publisher_name = $request->publisher_name;
        $publisher->phone = $request->phone;
        $publisher->address = $request->address;
        $publisher->email = $request->email;
        $publisher->save();
        return redirect()->route("assistant.publishers", $request->publisher_id);
    }

    public function deletePublisher($id)
    {
        Publisher::where("publisher_id", $id)->delete();
        return redirect()->route("assistant.publishers");
    }
}
