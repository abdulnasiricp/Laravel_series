<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function createProduct()
    {
        return view('admin-panel.products.product_create');
    }

    public function productList()
    {
        return view('admin-panel.products.product_list');
    }
}
