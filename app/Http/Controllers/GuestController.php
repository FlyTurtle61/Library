<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuestController extends Controller
{
    public function __construct()
    {
        $this->middleware(["auth","verified"]);
    }
    public function index()
    {
        if(Auth::user()->role==env("ADMIN")){
            return redirect()->route("admin.main");

        }
        else if(Auth::user()->role==env("SUPER_ADMIN")){
            return redirect()->route("super_admin");
        }
        else if(Auth::user()->role==env("ASSISTANT")){
            return redirect()->route("assistant.main");
        }
    }
}
