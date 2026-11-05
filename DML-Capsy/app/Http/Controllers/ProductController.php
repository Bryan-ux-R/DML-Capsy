<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display Product Catalog with Search & Filter (PBI 05, PBI 06)
     */
    public function index(Request $request)
    {
        $query = Product::with('category');

        // Search by keyword in name, material, description, or standards
        if ($request->filled('q')) {
            $keyword = trim($request->input('q'));
            $query->where(function ($q) use ($keyword) {
                $q->where('name', 'like', "%{$keyword}%")
                  ->orWhere('material', 'like', "%{$keyword}%")
                  ->orWhere('short_description', 'like', "%{$keyword}%")
                  ->orWhere('standards', 'like', "%{$keyword}%");
            });
        }

        // Filter by Category slug
        if ($request->filled('kategori')) {
            $categorySlug = $request->input('kategori');
            $query->whereHas('category', function ($q) use ($categorySlug) {
                $q->where('slug', $categorySlug);
            });
        }

        // Filter by Material
        if ($request->filled('material')) {
            $material = $request->input('material');
            $query->where('material', 'like', "%{$material}%");
        }

        // Sorting
        $sort = $request->input('sort', 'latest');
        if ($sort === 'name_asc') {
            $query->orderBy('name', 'asc');
        } elseif ($sort === 'name_desc') {
            $query->orderBy('name', 'desc');
        } else {
            $query->latest();
        }

        $products = $query->paginate(9)->withQueryString();
        $categories = ProductCategory::withCount('products')->get();

        // Get unique materials for filter pill
        $materials = [
            'NBR' => 'NBR (Nitrile)',
            'EPDM' => 'EPDM',
            'Silicone' => 'Silicone',
            'Neoprene' => 'Neoprene (CR)',
            'Natural Rubber' => 'Natural Rubber (NR)',
            'Viton' => 'Viton (FKM)',
        ];

        return view('pages.catalog', compact('products', 'categories', 'materials'));
    }

    /**
     * Display Single Product Detail with Specifications & Inquire CTA (PBI 05, PBI 07)
     */
    public function show($slug)
    {
        $product = Product::with('category')->where('slug', $slug)->firstOrFail();

        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->take(3)
            ->get();

        return view('pages.product-detail', compact('product', 'relatedProducts'));
    }
}

