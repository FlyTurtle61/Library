<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AssistantController extends Controller
{
    public function index(){
        $data["title"]="Asistan Anasayfa";
        $data["page_title"]="Asistan Anasayfa";
        $data["content"]=view("users.assistant.anasayfa.anasayfa");
        return view("users.assistant.main",$data);
    }
    public function books(){
        $data1["books"] = Book::all();
        $data["title"] = "Kitaplar";
        $data["page_title"] = "Kitaplar";
        $data["content"] = view("users.assistant.books.books", $data1);
        return view("users.assistant.main", $data);
    }
    public function addBook(Request $request){

        $error_message = [
            "required" => ":attribute alanı boş geçmeyiniz.",
            "unique" => "Aynı :attribute kitap ismi ile birden fazla kayıt oluşturulamaz!!",

        ];

        Validator::make($request->all(), [
            "book_name" => "required","unique:books",
            "yazar_adi" => "required",
            "basim_yili" => "required",
            "kitap_turu" => "required",

        ], $error_message)->validate();
        $book = new Book();
        $book->book_name=$request->book_name;
        $book->yazar_adi=$request->yazar_adi;
        $book->kitap_turu=$request->kitap_turu;
        $book->basim_yili=$request->basim_yili;
        $book->save();
        return redirect()->route("assistant.books");
    }
    public function getBook($id){
        $data1["book"]=Book::find($id);
        $data["title"]="Kitap Bilgileri";
        $data["page_title"]="Kitap Düzenleme İşlemi";
        $data["content"]=view("users.assistant.books.book",$data1);
        return view("users.assistant.main",$data);
    }
    public function updateBook(Request $request){
        $mesaj = [
            "required" => ":attribute zorunlu alandır.",
            "min"=>":attribute alanında eksik değer",
            "max"=>":attribute alanında fazla değer",
            "integer"=>":attribute alanına sayısal değer girilmeli"
        ];

        Validator::make($request->all(), [

            "book_name" =>["required","min:1","max:20"],
            "kitap_turu" =>["required","min:1","max:20"],
            "yazar_adi" =>["required","min:5","max:50"],
            "basim_yili" =>["required","integer","min:1200","max:2100"],
        ], $mesaj)->validate();

        $book=Book::find($request->book_id);
        $book->book_name=$request->book_name;
        $book->kitap_turu=$request->kitap_turu;
        $book->yazar_adi=$request->yazar_adi;
        $book->basim_yili=$request->basim_yili;

        $book->save();
        return redirect()->route("assistant.book",$request->book_id);
       }




       public function deleteBook($id){
            Book::where("id",$id)->delete();
            return redirect()->route("assistant.books");
       }


}
