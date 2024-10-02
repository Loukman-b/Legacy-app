<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Manual;

class ManualController extends Controller
{
    public function show($brand_id, $brand_slug, $manual_id )
    {
        $brand = Brand::findOrFail($brand_id);
        $manual = Manual::findOrFail($manual_id);

        return view('pages/manual_view', [
            "manual" => $manual,
            "brand" => $brand,
        ]);
    }

    
    public function incrementViewCount($manual_id)
    {
        $manual = Manual::find($manual_id);
        if ($manual) {
            $manual->increment('view_count'); // Increment the view_count
            // Redirect to the manual's URL
            return redirect()->away($manual->url); // Use redirect()->away to ensure the external URL works
        }
    
        // Handle the case where the manual is not found (optional)
    }
    
}
