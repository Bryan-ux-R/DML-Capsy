<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display Company Profile & Homepage (PBI 04, PBI 07, PBI 08)
     */
    public function index()
    {
        $featuredProducts = Product::with('category')
            ->where('is_featured', true)
            ->take(6)
            ->get();

        $categories = ProductCategory::withCount('products')->get();

        $stats = [
            ['value' => '500+', 'label' => 'KLIEN PABRIK & TAMBANG'],
            ['value' => '1,200+', 'label' => 'SPESIFIKASI KOMPONEN'],
            ['value' => '15+ Thn', 'label' => 'PENGALAMAN FABRIKASI'],
            ['value' => 'SNI & ISO', 'label' => 'GARANSI MUTU LAB'],
        ];

        return view('pages.home', compact('featuredProducts', 'categories', 'stats'));
    }

    /**
     * Tentang Pabrik & Fasilitas Produksi (PBI 04)
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * Panduan Spesifikasi Teknis Kompon Karet
     */
    public function technicalSpecs()
    {
        return view('pages.technical-specs');
    }

    /**
     * Kontak Perusahaan & Penawaran RFQ
     */
    public function contact()
    {
        $products = Product::select('id', 'name')->orderBy('name')->get();
        return view('pages.contact', compact('products'));
    }
}
