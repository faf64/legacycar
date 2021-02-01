<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function liste()
    {
        return view('product-list');
    }
    public function fiche($id)
    {
        return view('product-details', [
            'id'=>$id
        ]);
    }
}
