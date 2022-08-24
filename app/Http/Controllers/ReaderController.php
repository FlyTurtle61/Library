<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Writer;
use App\Models\Category;
use App\Models\Publisher;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class ReaderController extends Controller
{
    public function index()
    {
        $data1["categories"] = Category::all();
        $data1["users"] = User::all();
        $data["title"] = "Kütüphane";
        $data["page_title"] = "Kütüphane";
        $data["content"] = view("users.reader.anasayfa.anasayfa",$data1);
        return view("users.reader.main", $data);
    }
    public function readers()
    {
        $data1["books"] = Book::all();
        $data["title"] = "Kütüphane";
        $data["page_title"] = "Kütüphane";
        $data["content"] = view("users.reader.books.books",$data1);
        return view("users.reader.main", $data);
    }
    public function reader()
    {
        $data1["books"] = Book::all();
        $data["title"] = "Kütüphane";
        $data["page_title"] = "Kütüphane";
        $data["content"] = view("users.reader.books.book",$data1);
        return view("users.reader.main", $data);
    }
}
