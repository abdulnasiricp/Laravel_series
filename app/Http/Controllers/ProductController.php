<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function createProduct()
    {
        $categories = Category::all();
        $sub_categories = SubCategory::all();
        return view('admin-panel.products.product_create', compact('categories', 'sub_categories'));
    }

    public function productList()
    {
        $products = Product::paginate(10);
        return view('admin-panel.products.product_list', compact('products'));
    }

    public function productStore(Request $request)
    {
        if ($request->file('image'));
        {
            $image = $request->file('image');
            $img_name = time() . rand(10000, 99999) . $image->getClientOriginalName();
            $image->move('upload/products/', $img_name);
            $img_name = 'upload/products/' . $img_name;
        }

        $product = new Product;
        $product->title = $request->title;
        $product->price = $request->price;
        $product->discount_price = $request->discount_price;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->subcategory_id = $request->subcategory_id;
        $product->image = $img_name ?? null;
        $product->save();

        return redirect('product/list');

    }
}
