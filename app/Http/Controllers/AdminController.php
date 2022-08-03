<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        $data["title"] = "Admin Anasayfa";
        $data["page_title"] = "Admin Anasayfa";
        $data["content"] = view("users.admin.anasayfa.anasayfa");
        return view("users.admin.main", $data);
    }
    public function users(){
        $data1["users"] = User::all();

        $data["title"] = "Kullanıcılar";
        $data["page_title"] = "Kullanıcılar";
        $data["content"] = view("users.admin.users.users", $data1);
        return view("users.admin.main", $data);
    }
    public function addUser(Request $request){

        $error_message = [
            "required" => ":attribute alanı boş geçmeyiniz.",
            "unique" => "Aynı :attribute ile birden fazla kayıt oluşturulamaz!!",
            "email" => ":attribute uygun formatta değil."
        ];

        Validator::make($request->all(), [
            "first_name" => "required",
            "last_name" => "required",
            "phone" => "required",
            "address" => "required",
            "email" => ["required", "unique:users", "email"]
        ], $error_message)->validate();
        
        $user = new User();
        $user->first_name=$request->first_name;
        $user->last_name=$request->last_name;
        $user->phone=$request->phone;
        $user->address=$request->address;
        $user->email = $request->email;
        $user->email_verified_at = now();
        $user->password = Hash::make("12345678");
        $user->role = env("ASSISTANT");
        $user->save();
        return redirect()->route("admin.users");
    }
    public function getUser($id){
        $data1["user"]=User::find($id);
        $data["title"]="Üye Bilgileri";
        $data["page_title"]="Üye Güncelleme İşlemi";
        $data["content"]=view("users.admin.users.user",$data1);
        return view("users.admin.main",$data);
    }
    public function updateUser(Request $request){
        $mesaj = [
            "required" => ":attribute zorunlu alandır.",
            "min"=>":attribute alanında eksik değer",
            "max"=>":attribute alanında fazla değer",
            "integer"=>":attribute alanına sayısal değer girilmeli"
        ];

        Validator::make($request->all(), [

            "first_name" =>["required","min:2","max:255"],
            "last_name" =>["required","min:2","max:100"],
            "phone" =>["required","min:5000000000","max:5559999999","integer"],
            "address"=>"required",
            "role"=>"required",
            "user_id"=>"required"
        ], $mesaj)->validate();
        $user=User::find($request->user_id);

        $user->first_name=$request->first_name;
        $user->last_name=$request->last_name;
        $user->phone=$request->phone;
        $user->address=$request->address;
        $user->role=$request->role;
        $user->save();
        return redirect()->route("admin.user",$request->user_id);
       }

       public function deleteUser($id){
            User::where("id",$id)->delete();
            return redirect()->route("admin.users");
       }
    }
