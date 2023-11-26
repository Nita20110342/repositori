<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return "ini adalah halaman user method index";
    }

    public function create(){
        //http://127.0.0.1:8000/user/create
        return "ini adalah halaman create method create";
    }
    public function show()
    {
        return "Ini adalah halaman read method read ";
    }
    public function destroy()
    {
        return "Ini adalah halaman delete method delete";
    }
    public function update()
    {
        return "Ini adalah halaman update method update";
    }
}
