@extends('layouts.app')

@section('title', $product->name . ' - Spesifikasi & Penawaran | PT Duta Mitra Luhur')
@section('meta_description', $product->short_description)

@section('content')
<div class="py-12 bg-[#0b0f19]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Breadcrumbs -->
        <nav class="flex items-center gap-2 text-xs text-slate-400 mb-6">
            <a href="{{ route('home') }}" class="hover:text-white transition-colors">Beranda</a>
            <span>/</span>
            <a href="{{ route('catalog.index') }}" class="hover:text-white transition-colors">Katalog Produk</a>
            <span>/</span>
            <a href="{{ route('catalog.index', ['kategori' => $product->category->slug]) }}" class="hover:text-white transition-colors">{{ $product->category->name }}</a>
            <span>/</span>
            <span class="text-red-400 font-semibold">{{ $product->name }}</span>
        </nav>

        <!-- Product Overview Section -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 bg-slate-900/60 border border-slate-800 rounded-3xl p-6 sm:p-8 backdrop-blur-md mb-12">
            
            <!-- Left: Product Image & Badges -->
            <div class="lg:col-span-5 space-y-4">
                <div class="relative rounded-2xl overflow-hidden bg-slate-950 border border-slate-800 aspect-square">
                    <img src="{{ $product->image_url ?? 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=800&q=80' }}" 
                         alt="{{ $product->name }}" 
                         class="w-full h-full object-cover">
                    
                    @if($product->badge)
                        <div class="absolute top-4 left-4 px-3 py-1.5 rounded-lg text-xs font-black bg-red-600 text-white shadow-lg">
                            {{ $product->badge }}
                        </div>
                    @endif

                    <div class="absolute bottom-4 left-4 right-4 p-3 rounded-xl bg-slate-900/90 backdrop-blur-md border border-slate-700/80 text-xs flex items-center justify-between">
                        <span class="text-slate-300">Standar Pengujian:</span>
                        <span class="font-bold text-emerald-400">{{ $product->standards ?? 'SNI & ISO 9001' }}</span>
                    </div>
                </div>

                <!-- Fast Info Alert -->
                <div class="p-4 rounded-xl bg-slate-950/80 border border-slate-800 text-xs text-slate-400 space-y-2">
                    <div class="flex items-center gap-2 text-slate-200 font-semibold">
                        <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>Jaminan Mutu & Keaslian Kompon</span>
                    </div>
                    <p>Produk dilengkapi Certificate of Conformity (CoC) & hasil uji lab tensil & abrasi resmi dari PT Duta Mitra Luhur.</p>
                </div>
            </div>

            <!-- Right: Product Technical Details & CTA (PBI 07, PBI 09) -->
            <div class="lg:col-span-7 flex flex-col justify-between">
                <div>
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-md bg-slate-800 text-xs font-semibold text-red-400 uppercase tracking-wider mb-2">
                        {{ $product->category->name }}
                    </div>
                    <h1 class="text-2xl sm:text-4xl font-extrabold text-white tracking-tight leading-snug">
                        {{ $product->name }}
                    </h1>
                    
                    <div class="mt-2 text-sm text-slate-400">
                        Formula Kompon: <strong class="text-slate-200">{{ $product->material ?? 'Spesifikasi Rekayasa' }}</strong>
                    </div>

                    <p class="mt-4 text-slate-300 text-sm leading-relaxed">
                        {{ $product->description }}
                    </p>

                    <!-- Primary Technical Attributes -->
                    <div class="mt-6 grid grid-cols-2 sm:grid-cols-4 gap-3">
                        <div class="bg-slate-950/70 border border-slate-800 p-3 rounded-xl">
                            <span class="text-[10px] text-slate-500 font-bold uppercase block">Kekerasan</span>
                            <span class="text-sm font-bold text-white">{{ $product->hardness ?? '-' }}</span>
                        </div>
                        <div class="bg-slate-950/70 border border-slate-800 p-3 rounded-xl">
                            <span class="text-[10px] text-slate-500 font-bold uppercase block">Suhu Kerja</span>
                            <span class="text-sm font-bold text-white">{{ $product->temperature_range ?? '-' }}</span>
                        </div>
                        <div class="bg-slate-950/70 border border-slate-800 p-3 rounded-xl">
                            <span class="text-[10px] text-slate-500 font-bold uppercase block">Tensile Strength</span>
                            <span class="text-sm font-bold text-white">{{ $product->tensile_strength ?? '-' }}</span>
                        </div>
                        <div class="bg-slate-950/70 border border-slate-800 p-3 rounded-xl">
                            <span class="text-[10px] text-slate-500 font-bold uppercase block">Elongasi</span>
                            <span class="text-sm font-bold text-white">{{ $product->elongation ?? '-' }}</span>
                        </div>
                    </div>

                    <!-- Minimum Order Quantity & Delivery Lead Time -->
                    <div class="mt-4 flex flex-wrap items-center gap-4 text-xs text-slate-300 bg-slate-950/40 p-3 rounded-xl border border-slate-800/80">
                        <div>
                            <span class="text-slate-500">Min. Pemesanan:</span>
                            <span class="font-bold text-white ml-1">{{ $product->min_order ?? '1 Unit / Roll' }}</span>
                        </div>
                        <div class="text-slate-600">|</div>
                        <div>
                            <span class="text-slate-500">Estimasi Kesiapan Stok:</span>
                            <span class="font-bold text-emerald-400 ml-1">Ready Stock / Custom Fabrikasi 3-7 Hari</span>
                        </div>
                    </div>
                </div>

                <!-- Call To Action Area (PBI 07, PBI 09, PBI 11) -->
                <div class="mt-8 pt-6 border-t border-slate-800 flex flex-col sm:flex-row items-center gap-3">
                    
                    <!-- Direct Form Inquire CTA -->
                    <a href="{{ route('inquiry.create', ['product_id' => $product->id]) }}" class="w-full sm:flex-1 inline-flex items-center justify-center gap-2 px-6 py-3.5 text-sm font-bold text-white bg-gradient-to-r from-red-600 to-rose-600 hover:from-red-500 hover:to-rose-500 rounded-xl shadow-xl shadow-red-600/30 hover:shadow-red-600/50 transition-all border border-red-400/40">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <span>Tanya Ketersediaan &amp; Ajukan RFQ</span>
                    </a>

                    <!-- Direct WhatsApp with product name -->
                    <a href="https://wa.me/6289501823280?text={{ rawurlencode('Halo Sales PT Duta Mitra Luhur, saya ingin menanyakan ketersediaan dan penawaran harga untuk produk: ' . $product->name) }}" target="_blank" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-5 py-3.5 text-sm font-bold text-slate-200 bg-slate-800 hover:bg-slate-700 hover:text-white rounded-xl border border-slate-700 transition-colors">
                        <svg class="w-5 h-5 text-emerald-400" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12.031 2C6.5 2 2 6.5 2 12.031c0 1.953.563 3.781 1.547 5.344L2.094 22l4.781-1.422a10.02 10.02 0 005.156 1.453h.016c5.531 0 10.031-4.5 10.031-10.031C22.078 6.5 17.562 2 12.031 2zm0 18.375h-.016a8.318 8.318 0 01-4.25-1.156l-.312-.187-3.156.938.953-3.078-.203-.328A8.344 8.344 0 013.687 12.03c0-4.609 3.75-8.359 8.344-8.359 4.594 0 8.344 3.75 8.344 8.359 0 4.61-3.75 8.345-8.344 8.345zm4.563-6.25c-.25-.125-1.469-.734-1.703-.812-.234-.094-.406-.14-.578.125-.172.25-.672.828-.828.984-.14.156-.312.188-.562.063-.25-.125-1.062-.391-2.016-1.25-.75-.672-1.25-1.5-1.39-1.75-.14-.25 0-.39.125-.516.11-.11.25-.28.375-.42.125-.14.172-.25.25-.42.078-.172.047-.329-.016-.454-.062-.125-.578-1.39-.797-1.906-.218-.5-.437-.437-.593-.437h-.516c-.172 0-.453.062-.687.312-.234.25-.906.89-.906 2.156s.922 2.5 1.047 2.656c.125.156 1.828 2.812 4.437 3.937.625.266 1.11.422 1.485.547.625.203 1.203.172 1.656.11.5-.078 1.469-.61 1.672-1.203.203-.594.203-1.094.14-1.203-.062-.11-.234-.172-.484-.297z"/>
                        </svg>
                        <span>Chat WhatsApp Sales</span>
                    </a>

                </div>
            </div>

        </div>

        <!-- DETAILED SPECIFICATIONS & VARIANTS TABS (PBI 05) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 mb-16">
            
            <!-- Left: Specifications Table -->
            <div class="lg:col-span-7 bg-slate-900/60 border border-slate-800 rounded-3xl p-6 sm:p-8">
                <h3 class="text-xl font-bold text-white mb-6 flex items-center gap-2">
                    <span class="w-2.5 h-2.5 rounded-full bg-red-500"></span>
                    <span>Tabel Spesifikasi Teknis Standar</span>
                </h3>

                <div class="overflow-x-auto">
                    <table class="w-full text-left text-sm text-slate-300">
                        <tbody class="divide-y divide-slate-800">
                            <tr class="hover:bg-slate-800/30">
                                <td class="py-3 px-2 font-medium text-slate-400 w-1/3">Komposisi Polimer</td>
                                <td class="py-3 px-2 font-semibold text-white">{{ $product->material }}</td>
                            </tr>
                            <tr class="hover:bg-slate-800/30">
                                <td class="py-3 px-2 font-medium text-slate-400">Hardness (Kekerasan)</td>
                                <td class="py-3 px-2 font-semibold text-white">{{ $product->hardness }}</td>
                            </tr>
                            <tr class="hover:bg-slate-800/30">
                                <td class="py-3 px-2 font-medium text-slate-400">Rentang Suhu Kerja</td>
                                <td class="py-3 px-2 font-semibold text-white">{{ $product->temperature_range }}</td>
                            </tr>
                            <tr class="hover:bg-slate-800/30">
                                <td class="py-3 px-2 font-medium text-slate-400">Kuat Tarik (Tensile)</td>
                                <td class="py-3 px-2 font-semibold text-white">{{ $product->tensile_strength }}</td>
                            </tr>
                            <tr class="hover:bg-slate-800/30">
                                <td class="py-3 px-2 font-medium text-slate-400">Elongasi Pemutusan</td>
                                <td class="py-3 px-2 font-semibold text-white">{{ $product->elongation }}</td>
                            </tr>
                            <tr class="hover:bg-slate-800/30">
                                <td class="py-3 px-2 font-medium text-slate-400">Standar Acuan Uji</td>
                                <td class="py-3 px-2 font-semibold text-emerald-400">{{ $product->standards }}</td>
                            </tr>
                            @if($product->specifications && is_array($product->specifications))
                                @foreach($product->specifications as $key => $val)
                                    <tr class="hover:bg-slate-800/30">
                                        <td class="py-3 px-2 font-medium text-slate-400">{{ $key }}</td>
                                        <td class="py-3 px-2 text-slate-200">{{ $val }}</td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Right: Standard Variants & Dimensions Available (PBI 05) -->
            <div class="lg:col-span-5 bg-slate-900/60 border border-slate-800 rounded-3xl p-6 sm:p-8 flex flex-col justify-between">
                <div>
                    <h3 class="text-xl font-bold text-white mb-2 flex items-center gap-2">
                        <span class="w-2.5 h-2.5 rounded-full bg-emerald-500"></span>
                        <span>Varian &amp; Ukuran Tersedia</span>
                    </h3>
                    <p class="text-xs text-slate-400 mb-6">
                        Pilih salah satu varian di bawah ini untuk langsung mengisi form inquiry ketersediaan stok:
                    </p>

                    @if($product->variants && is_array($product->variants))
                        <div class="space-y-2.5">
                            @foreach($product->variants as $variant)
                                <div class="p-3.5 rounded-xl bg-slate-950/70 border border-slate-800 flex items-center justify-between hover:border-slate-700 transition-colors">
                                    <div class="text-xs font-semibold text-slate-200">
                                        {{ $variant }}
                                    </div>
                                    <a href="{{ route('inquiry.create', ['product_id' => $product->id, 'variant' => $variant]) }}" class="px-2.5 py-1 text-[11px] font-bold text-red-400 bg-red-950/60 hover:bg-red-900/80 rounded border border-red-500/30 transition-colors">
                                        Pilih Varian
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="p-4 rounded-xl bg-slate-950/50 text-slate-400 text-xs">
                            Ukuran custom dapat disesuaikan penuh dengan drawing atau sampel teknis Anda.
                        </div>
                    @endif
                </div>

                <div class="mt-8 pt-6 border-t border-slate-800 text-center">
                    <p class="text-xs text-slate-400 mb-3">Butuh dimensi atau spesifikasi di luar daftar standar?</p>
                    <a href="{{ route('inquiry.create', ['product_id' => $product->id, 'variant' => 'Custom Drawing / Spesifikasi Khusus']) }}" class="inline-block w-full py-2.5 text-xs font-bold text-slate-200 bg-slate-800 hover:bg-slate-700 rounded-xl border border-slate-700">
                        Ajukan Pesanan Kustom (Custom Molding)
                    </a>
                </div>
            </div>

        </div>

        <!-- RELATED PRODUCTS -->
        @if($relatedProducts->count() > 0)
            <div class="mt-16 pt-12 border-t border-slate-800">
                <h3 class="text-2xl font-bold text-white mb-6">Produk Terkait Lainnya</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach($relatedProducts as $rel)
                        <div class="bg-slate-900/60 border border-slate-800 rounded-2xl p-4 flex gap-4 items-center hover:border-slate-700 transition-all">
                            <img src="{{ $rel->image_url }}" alt="{{ $rel->name }}" class="w-20 h-20 rounded-xl object-cover bg-slate-950 shrink-0">
                            <div class="flex-1 min-w-0">
                                <h4 class="text-sm font-bold text-white truncate hover:text-red-400">
                                    <a href="{{ route('catalog.show', $rel->slug) }}">{{ $rel->name }}</a>
                                </h4>
                                <p class="text-xs text-slate-400 mt-1 truncate">{{ $rel->material }}</p>
                                <a href="{{ route('catalog.show', $rel->slug) }}" class="inline-block mt-2 text-xs font-bold text-red-400 hover:text-red-300">
                                    Lihat Detail →
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

    </div>
</div>
@endsection

