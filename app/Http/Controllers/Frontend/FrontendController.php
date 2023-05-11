<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Slider;

class FrontendController extends Controller
{
    public function index()
    {
        $sliders =  Slider::where('status', '0')->get();
        return view('pages.frontend.index', compact('sliders'));
    }

    public function categories()
    {
        $categories = Category::where('status', '0')->get();
        return view('pages.frontend.collections.category.index', compact('categories'));
    }

    public function products($category_slug)
    {
        $category = Category::where('slug', $category_slug)->first();
        if ($category) {
            $products = $category->products()->get();
            return view('pages.frontend.collections.products.index', compact('products', 'category'));
        } else {
            return redirect()->back();
        }
    }
}
