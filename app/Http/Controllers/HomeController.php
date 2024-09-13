<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\SubCategory;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::paginate(4);
        $data['subcategories'] = SubCategory::all();
        $data['products'] = $products;

        return view('index')->with($data);
    }
}
