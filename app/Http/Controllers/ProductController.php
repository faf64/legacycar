<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function liste()
    {
        return "Liste des produits";
    }
    public function fiche()
    {
        return "Fiche du produit " . request('id');
    }
}
