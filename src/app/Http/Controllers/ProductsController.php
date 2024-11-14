<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function detail()
    {
        return view('detail');
    }

    public function update()
    {
        return view('update');
    }

    public function register()
    {
        return view('register');
    }

    public function search()
    {
        return view('search');
    }

    public function delete()
    {
        return view('delete');
    }

}
