<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Manual;
use Illuminate\Database\Eloquent\Model;

class CategoryController extends Controller

{
    public function showCategory($category)
    {
        // Get brands related to this category
        $brands = Brand::where('category', $category)->get();
        return view('pages.category', compact('brands', 'category'));
    }

    public function showBrand($category, $brandId)
    {
        // Get models related to this brand
        $brand = Brand::findOrFail($brandId);
        $manuals = Manual::where('brand_id', $brand->id)->get();
        return view('pages.brand', compact('brand', 'manuals', 'category'));
    }
}


