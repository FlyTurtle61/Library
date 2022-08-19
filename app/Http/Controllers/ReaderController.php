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
        $data["title"] = "Kütüphane";
        $data["page_title"] = "Kütüphane";
        $data["content"] = view("users.reader.anasayfa.anasayfa");
        return view("users.reader.main", $data);
    }
}
