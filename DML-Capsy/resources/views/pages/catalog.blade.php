@extends('layouts.app')

@section('title', 'Katalog Produk Karet Industri - PT Duta Mitra Luhur')
@section('meta_description', 'Katalog lengkap material karet industri: NBR Rubber Sheet, Conveyor Belt EP, Flange Gasket, Silicone Food Grade, Marine Fender, dan Custom Molded Seal.')

@section('content')
<div class="py-12 bg-[#0b0f19]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header & Breadcrumbs -->
        <div class="mb-8">
            <nav class="flex items-center gap-2 text-xs text-slate-400 mb-3">
                <a href="{{ route('home') }}" class="hover:text-white transition-colors">Beranda</a>
                <span>/</span>
                <span class="text-red-400 font-semibold">Katalog Produk</span>
            </nav>
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                <div>
                    <h1 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        Katalog Produk Karet Industri
                    </h1>
                    <p class="text-slate-400 text-sm mt-1">
                        Temukan spesifikasi teknis, varian ukuran, dan minta penawaran harga resmi (RFQ).
                    </p>
                </div>
                <div class="flex items-center gap-2">
                    <a href="{{ route('inquiry.create') }}" class="inline-flex items-center gap-2 px-4 py-2 text-xs font-bold text-white bg-red-600 hover:bg-red-500 rounded-xl shadow-lg shadow-red-600/30 transition-all">
                        <span>Form Ketersediaan / RFQ Cepat</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- SEARCH & FILTER TOOLBAR (PBI 06) -->
        <div class="bg-slate-900/80 border border-slate-800 rounded-2xl p-5 mb-8 backdrop-blur-md">
            <form action="{{ route('catalog.index') }}" method="GET" class="space-y-4">
                
                <div class="grid grid-cols-1 md:grid-cols-12 gap-3">
                    
                    <!-- Search Input -->
                    <div class="md:col-span-5 relative">
                        <input type="text" 
                               name="q" 
                               value="{{ request('q') }}" 
                               placeholder="Cari nama produk, material (misal: NBR, EP 200, Silicone)..." 
                               class="w-full bg-slate-950/80 border border-slate-700 rounded-xl px-4 py-2.5 text-sm text-white placeholder-slate-500 focus:outline-none focus:border-red-500 transition-colors">
                        @if(request('q'))
                            <a href="{{ route('catalog.index', request()->except('q')) }}" class="absolute right-3 top-2.5 text-xs text-slate-400 hover:text-white">✕</a>
                        @endif
                    </div>

                    <!-- Category Filter Dropdown -->
                    <div class="md:col-span-3">
                        <select name="kategori" class="w-full bg-slate-950/80 border border-slate-700 rounded-xl px-3 py-2.5 text-sm text-slate-200 focus:outline-none focus:border-red-500 transition-colors">
                            <option value="">Semua Kategori ({{ $categories->sum('products_count') }})</option>
                            @foreach($categories as $cat)
                                <option value="{{ $cat->slug }}" {{ request('kategori') == $cat->slug ? 'selected' : '' }}>
                                    {{ $cat->name }} ({{ $cat->products_count }})
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Sort Dropdown -->
                    <div class="md:col-span-2">
                        <select name="sort" class="w-full bg-slate-950/80 border border-slate-700 rounded-xl px-3 py-2.5 text-sm text-slate-200 focus:outline-none focus:border-red-500 transition-colors">
                            <option value="latest" {{ request('sort') == 'latest' ? 'selected' : '' }}>Terbaru</option>
                            <option value="name_asc" {{ request('sort') == 'name_asc' ? 'selected' : '' }}>Nama A - Z</option>
                            <option value="name_desc" {{ request('sort') == 'name_desc' ? 'selected' : '' }}>Nama Z - A</option>
                        </select>
                    </div>

                    <!-- Filter Button & Reset -->
                    <div class="md:col-span-2 flex items-center gap-2">
                        <button type="submit" class="flex-1 py-2.5 px-4 text-xs font-bold text-white bg-red-600 hover:bg-red-500 rounded-xl transition-all shadow-md">
                            Terapkan
                        </button>
                        @if(request()->hasAny(['q', 'kategori', 'material', 'sort']))
                            <a href="{{ route('catalog.index') }}" class="px-3 py-2.5 text-xs font-medium text-slate-400 hover:text-white bg-slate-800 rounded-xl border border-slate-700" title="Reset Filter">
                                Reset
                            </a>
                        @endif
                    </div>

                </div>

                <!-- Material Quick Filter Badges -->
                <div class="pt-3 border-t border-slate-800/80 flex flex-wrap items-center gap-2 text-xs">
                    <span class="text-slate-400 font-semibold mr-1">Filter Material:</span>
                    <a href="{{ route('catalog.index', array_merge(request()->except('material'), [])) }}" 
                       class="px-2.5 py-1 rounded-lg border transition-all {{ !request('material') ? 'bg-red-600/30 text-red-300 border-red-500/50' : 'bg-slate-950/60 text-slate-400 border-slate-800 hover:text-white' }}">
                        Semua Material
                    </a>
                    @foreach($materials as $key => $label)
                        <a href="{{ route('catalog.index', array_merge(request()->all(), ['material' => $key])) }}" 
                           class="px-2.5 py-1 rounded-lg border transition-all {{ request('material') == $key ? 'bg-red-600 text-white border-red-500 font-semibold shadow' : 'bg-slate-950/60 text-slate-400 border-slate-800 hover:text-white hover:border-slate-700' }}">
                            {{ $label }}
                        </a>
                    @endforeach
                </div>

            </form>
        </div>

        <!-- PRODUCT GRID (PBI 05, PBI 07, PBI 08) -->
        @if($products->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($products as $product)
                    <div class="bg-slate-900/80 rounded-2xl border border-slate-800/90 overflow-hidden flex flex-col transition-all duration-300 card-glow group">
                        
                        <!-- Image Container -->
                        <div class="relative h-56 bg-slate-950 overflow-hidden">
                            <img src="{{ $product->image_url ?? 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=600&q=80' }}" 
                                 alt="{{ $product->name }}" 
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/20 to-transparent"></div>
                            
                            @if($product->badge)
                                <div class="absolute top-3 left-3 px-2.5 py-1 rounded-md text-[11px] font-extrabold bg-red-600/90 text-white shadow-md backdrop-blur-sm">
                                    {{ $product->badge }}
                                </div>
                            @endif

                            <div class="absolute bottom-3 left-3 text-xs text-slate-300 font-medium bg-black/60 backdrop-blur-md px-2.5 py-1 rounded-md">
                                {{ $product->category->name }}
                            </div>

                            @if($product->standards)
                                <div class="absolute top-3 right-3 text-[10px] font-bold text-emerald-400 bg-slate-950/80 border border-emerald-500/30 px-2 py-0.5 rounded">
                                    SNI/ISO
                                </div>
                            @endif
                        </div>

                        <!-- Content -->
                        <div class="p-5 flex-1 flex flex-col justify-between">
                            <div>
                                <h3 class="text-lg font-bold text-white group-hover:text-red-400 transition-colors leading-snug">
                                    <a href="{{ route('catalog.show', $product->slug) }}">
                                        {{ $product->name }}
                                    </a>
                                </h3>

                                <div class="mt-2 text-xs text-red-400 font-medium">
                                    Material: <span class="text-slate-300">{{ $product->material ?? 'Spesifikasi Kompon' }}</span>
                                </div>

                                <p class="text-xs text-slate-400 mt-2 line-clamp-2 leading-relaxed">
                                    {{ $product->short_description }}
                                </p>

                                <!-- Technical Spec Metrics -->
                                <div class="mt-4 pt-3 border-t border-slate-800 grid grid-cols-2 gap-2 text-xs">
                                    <div class="bg-slate-950/60 p-2 rounded-lg border border-slate-800/70">
                                        <span class="text-slate-500 block text-[10px] uppercase font-bold">Kekerasan</span>
                                        <span class="font-semibold text-slate-200">{{ $product->hardness ?? '65 Shore A' }}</span>
                                    </div>
                                    <div class="bg-slate-950/60 p-2 rounded-lg border border-slate-800/70">
                                        <span class="text-slate-500 block text-[10px] uppercase font-bold">Suhu Operasi</span>
                                        <span class="font-semibold text-slate-200">{{ $product->temperature_range ?? 'Standar' }}</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Buttons (PBI 07, PBI 09) -->
                            <div class="mt-6 pt-4 border-t border-slate-800/80 flex items-center gap-2">
                                <a href="{{ route('catalog.show', $product->slug) }}" class="flex-1 text-center py-2 px-3 text-xs font-bold text-slate-300 bg-slate-800 hover:bg-slate-700 hover:text-white rounded-lg transition-colors border border-slate-700">
                                    Detail Spek & Ukuran
                                </a>

                                <a href="{{ route('inquiry.create', ['product_id' => $product->id]) }}" class="flex-1 text-center py-2 px-3 text-xs font-bold text-white bg-red-600 hover:bg-red-500 rounded-lg shadow-md shadow-red-600/30 transition-all">
                                    Tanya Ketersediaan
                                </a>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-10">
                {{ $products->links() }}
            </div>
        @else
            <!-- Empty State -->
            <div class="bg-slate-900/60 border border-slate-800 rounded-2xl p-12 text-center max-w-xl mx-auto">
                <div class="w-16 h-16 rounded-full bg-slate-800 text-slate-400 flex items-center justify-center mx-auto mb-4 text-2xl">
                    🔍
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Produk Tidak Ditemukan</h3>
                <p class="text-slate-400 text-sm mb-6">
                    Tidak ada produk yang cocok dengan pencarian atau filter yang Anda pilih. Anda dapat mencari dengan kata kunci lain atau meminta penawaran kustom.
                </p>
                <div class="flex items-center justify-center gap-3">
                    <a href="{{ route('catalog.index') }}" class="px-4 py-2 text-xs font-bold text-slate-300 bg-slate-800 hover:bg-slate-700 rounded-xl border border-slate-700">
                        Reset Filter
                    </a>
                    <a href="{{ route('inquiry.create') }}" class="px-4 py-2 text-xs font-bold text-white bg-red-600 hover:bg-red-500 rounded-xl shadow-lg">
                        Konsultasi Kebutuhan Khusus (RFQ)
                    </a>
                </div>
            </div>
        @endif

    </div>
</div>
@endsection

