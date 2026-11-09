@extends('layouts.app')

@section('title', 'PT Duta Mitra Luhur (Duta Rubber) - Solusi Material Karet Industri & Manufaktur')

@section('content')

<!-- ========================================================================= -->
<!-- HERO SECTION (MATCHING DESIGN MOCKUP) -->
<!-- ========================================================================= -->
<section class="relative min-h-[85vh] flex items-center justify-center overflow-hidden py-16 md:py-24 border-b border-slate-800/60">
    
    <!-- Background overlay & moody industrial ambient image -->
    <div class="absolute inset-0 bg-[#0b0f19] -z-20"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-[#0b0f19]/80 via-[#0b0f19]/90 to-[#0b0f19] -z-10"></div>
    
    <!-- Ambient Factory / Industrial Machinery Backdrop -->
    <div class="absolute inset-0 opacity-20 -z-15 bg-cover bg-center mix-blend-luminosity filter blur-[1px]" 
         style="background-image: url('https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=1920&q=80');">
    </div>

    <!-- Soft Red Ambient Radial Glow -->
    <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] h-[350px] bg-red-600/15 rounded-full blur-[130px] pointer-events-none -z-10"></div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        
        <!-- Top Pill Badge -->
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-slate-900/80 border border-slate-700/60 text-xs sm:text-sm font-semibold text-slate-300 mb-8 backdrop-blur-md shadow-inner">
            <span class="text-amber-400">⚡</span>
            <span class="tracking-wider uppercase text-[11px] sm:text-xs font-bold text-slate-200">SOLUSI KARET INDUSTRI & MANUFAKTUR TERBAIK</span>
        </div>

        <!-- Main Headline -->
        <h1 class="text-3xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold tracking-tight text-white max-w-5xl mx-auto leading-[1.15] mb-6">
            MATERIAL KARET BERKUALITAS UNTUK <br class="hidden sm:inline" />
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 via-rose-500 to-red-400">
                SEGALA KEBUTUHAN INDUSTRI
            </span>
        </h1>

        <!-- Subtitle Paragraph -->
        <p class="max-w-3xl mx-auto text-slate-300 text-sm sm:text-base md:text-lg leading-relaxed mb-10 font-normal">
            Solusi manufaktur karet berkualitas tinggi dan ramah lingkungan. Kami memproduksi <span class="text-white font-medium">Rubber Soles (sol sepatu)</span>, <span class="text-white font-medium">Seals</span>, <span class="text-white font-medium">Plug Rubber</span>, <span class="text-white font-medium">Mudguard</span>, hingga <span class="text-white font-medium">Cover Stir Mobil</span> dengan jaminan mutu standar industri.
        </p>

        <!-- CTA Buttons & Response Indicator -->
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-16">
            
            <!-- Primary Button: Jelajahi Katalog Lengkap -->
            <a href="{{ route('catalog.index') }}" class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 px-8 py-3.5 text-base font-bold text-white bg-gradient-to-r from-red-600 to-rose-600 hover:from-red-500 hover:to-rose-500 rounded-xl shadow-xl shadow-red-600/30 hover:shadow-red-600/50 transition-all transform hover:-translate-y-0.5 border border-red-400/40">
                <span>Jelajahi Katalog Lengkap</span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
            </a>

            <!-- Secondary Button: Ajukan Penawaran B2B (RFQ) -->
            <a href="{{ route('inquiry.create') }}" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-7 py-3.5 text-base font-semibold text-slate-200 bg-slate-900/90 hover:bg-slate-800 border border-slate-700/80 rounded-xl hover:border-slate-500 transition-all">
                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                <span>Ajukan Penawaran B2B (RFQ)</span>
            </a>

            <!-- Respon Penawaran < 2 Jam Badge -->
            <div class="inline-flex items-center gap-2 px-3.5 py-2 rounded-lg bg-slate-900/70 border border-slate-800 text-xs text-slate-300">
                <span class="w-2.5 h-2.5 rounded-full bg-emerald-500 animate-pulse"></span>
                <span>Respon Penawaran &lt; 2 Jam</span>
            </div>

        </div>

        <!-- 4 Key Stat Metrics Cards (As in Image 1) -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6 max-w-5xl mx-auto">
            
            <div class="bg-slate-900/70 backdrop-blur-md border border-slate-800/90 rounded-2xl p-5 sm:p-6 transition-all hover:border-slate-700 hover:bg-slate-900/90 shadow-lg">
                <div class="text-2xl sm:text-4xl font-black text-white tracking-tight mb-1">
                    500+
                </div>
                <div class="text-[11px] sm:text-xs font-bold text-slate-400 uppercase tracking-wider">
                    KLIEN PABRIK & TAMBANG
                </div>
            </div>

            <div class="bg-slate-900/70 backdrop-blur-md border border-slate-800/90 rounded-2xl p-5 sm:p-6 transition-all hover:border-slate-700 hover:bg-slate-900/90 shadow-lg">
                <div class="text-2xl sm:text-4xl font-black text-white tracking-tight mb-1">
                    1,200+
                </div>
                <div class="text-[11px] sm:text-xs font-bold text-slate-400 uppercase tracking-wider">
                    SPESIFIKASI KOMPONEN
                </div>
            </div>

            <div class="bg-slate-900/70 backdrop-blur-md border border-slate-800/90 rounded-2xl p-5 sm:p-6 transition-all hover:border-slate-700 hover:bg-slate-900/90 shadow-lg">
                <div class="text-2xl sm:text-4xl font-black text-white tracking-tight mb-1">
                    15+ Thn
                </div>
                <div class="text-[11px] sm:text-xs font-bold text-slate-400 uppercase tracking-wider">
                    PENGALAMAN FABRIKASI
                </div>
            </div>

            <div class="bg-slate-900/70 backdrop-blur-md border border-slate-800/90 rounded-2xl p-5 sm:p-6 transition-all hover:border-slate-700 hover:bg-slate-900/90 shadow-lg">
                <div class="text-2xl sm:text-4xl font-black text-rose-400 tracking-tight mb-1">
                    SNI &amp; ISO
                </div>
                <div class="text-[11px] sm:text-xs font-bold text-slate-400 uppercase tracking-wider">
                    GARANSI MUTU LAB
                </div>
            </div>

        </div>

        <!-- PARTNERS / CLIENTS TRUST STRIP -->
        <div class="mt-14 pt-8 border-t border-slate-800/60 max-w-5xl mx-auto">
            <p class="text-[11px] sm:text-xs uppercase font-bold tracking-widest text-slate-400 mb-5 text-center">
                DIPERCAYA OLEH PERUSAHAAN & MITRA MANUFAKTUR TERKEMUKA
            </p>
            <div class="flex flex-wrap items-center justify-center gap-3 sm:gap-4 text-xs sm:text-sm">
                <div class="flex items-center gap-2 px-4 py-2 rounded-xl bg-slate-900/80 border border-slate-800 hover:border-red-500/40 transition-colors">
                    <span class="w-2 h-2 rounded-full bg-red-500"></span>
                    <span class="text-white font-bold">PT KMK Global Sports</span>
                </div>
                <div class="flex items-center gap-2 px-4 py-2 rounded-xl bg-slate-900/80 border border-slate-800 hover:border-red-500/40 transition-colors">
                    <span class="w-2 h-2 rounded-full bg-red-500"></span>
                    <span class="text-slate-300 font-semibold">PT HTM Indonesia</span>
                </div>
                <div class="flex items-center gap-2 px-4 py-2 rounded-xl bg-slate-900/80 border border-slate-800 hover:border-red-500/40 transition-colors">
                    <span class="w-2 h-2 rounded-full bg-red-500"></span>
                    <span class="text-slate-300 font-semibold">PT Karya Sukses Bersama</span>
                </div>
                <div class="flex items-center gap-2 px-4 py-2 rounded-xl bg-slate-900/80 border border-slate-800 hover:border-red-500/40 transition-colors">
                    <span class="w-2 h-2 rounded-full bg-red-500"></span>
                    <span class="text-slate-300 font-semibold">PT Sinar Agung Gumilang</span>
                </div>
                <div class="flex items-center gap-2 px-4 py-2 rounded-xl bg-slate-900/80 border border-slate-800 hover:border-red-500/40 transition-colors">
                    <span class="w-2 h-2 rounded-full bg-red-500"></span>
                    <span class="text-slate-300 font-semibold">CV Fikaru Rubber</span>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ========================================================================= -->
<!-- COMPANY PROFILE OVERVIEW (PBI 04: Akses Company Profile Tanpa Login) -->
<!-- ========================================================================= -->
<section class="py-20 bg-[#0b0f19] border-b border-slate-800/60">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <div class="lg:col-span-6 space-y-6">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-md bg-red-950/60 border border-red-500/30 text-xs font-semibold text-red-400 uppercase tracking-wider">
                    Profil Perusahaan & Manufaktur
                </div>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-white leading-tight">
                    PT Duta Mitra Luhur: Solusi Rekayasa Karet Berkualitas & Ramah Lingkungan
                </h2>
                <p class="text-slate-300 text-base leading-relaxed">
                    Berdiri sejak 03 Agustus 2010 di Kawasan Industri & Pergudangan Sentra Bitung, Curug, Tangerang - Banten, <strong class="text-white">PT Duta Mitra Luhur (Duta Rubber)</strong> memproduksi aneka produk karet teknik berstandar mutu tinggi. Kami memproduksi Rubber Soles (sol sepatu), Seals, Plug Rubber, Mudguard, dan Custom Molded Rubber dengan jaminan mutu zero defect dan pengiriman on-time 99%.
                </p>
                <p class="text-slate-400 text-sm leading-relaxed">
                    Didukung permesinan mandiri terpadu: Mesin Kneader, Open Mill, Cutting Kuk Dong, Lini Hydrolic Press Rubber, Mesin Triming, hingga sistem inspeksi Metal Detector digital otomatis.
                </p>

                <!-- Value Highlights -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
                    <div class="flex items-start gap-3 p-3.5 rounded-xl bg-slate-900/70 border border-slate-800">
                        <div class="w-8 h-8 rounded-lg bg-red-600/20 text-red-400 flex items-center justify-center shrink-0">
                            ✓
                        </div>
                        <div>
                            <h4 class="text-white text-sm font-bold">Lab Pengujian Mandiri</h4>
                            <p class="text-slate-400 text-xs">Uji tarik tensil, abrasi DIN, uji ozon & kekerasan Shore A terkalibrasi.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3 p-3.5 rounded-xl bg-slate-900/70 border border-slate-800">
                        <div class="w-8 h-8 rounded-lg bg-red-600/20 text-red-400 flex items-center justify-center shrink-0">
                            ✓
                        </div>
                        <div>
                            <h4 class="text-white text-sm font-bold">Custom Mold & Drawing</h4>
                            <p class="text-slate-400 text-xs">Menerima gambar teknik CAD atau reverse engineering suku cadang aus.</p>
                        </div>
                    </div>
                </div>

                <div class="pt-4 flex flex-wrap gap-4 items-center">
                    <a href="{{ route('about') }}" class="inline-flex items-center gap-2 text-sm font-bold text-red-400 hover:text-red-300">
                        <span>Pelajari Fasilitas Pabrik Kami Lebih Lanjut</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Visual Showcase -->
            <div class="lg:col-span-6 relative">
                <div class="relative rounded-2xl overflow-hidden border border-slate-700/80 shadow-2xl bg-slate-900 group">
                    <img src="/images/factory/machines/press-rubber-line.jpg" alt="Fasilitas Lini Mesin Press PT Duta Mitra Luhur" class="w-full h-96 object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/20 to-transparent"></div>
                    <div class="absolute bottom-6 left-6 right-6 p-4 rounded-xl bg-slate-900/90 backdrop-blur-md border border-slate-700/80 text-white">
                        <div class="flex items-center justify-between">
                            <div>
                                <div class="text-xs font-semibold text-red-400 uppercase">Fasilitas Fabrikasi & QC Sentra Bitung</div>
                                <div class="text-base font-bold">Lini Mesin Hydraulic Press Karet Mandiri</div>
                            </div>
                            <span class="px-2.5 py-1 text-xs font-bold rounded bg-emerald-950 border border-emerald-500/50 text-emerald-300">
                                Berdiri 2010
                            </span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- ========================================================================= -->
<!-- FEATURED PRODUCTS CATALOG (PBI 05, PBI 07) -->
<!-- ========================================================================= -->
<section class="py-20 bg-[#090d16] border-b border-slate-800/60">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
            <div>
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-md bg-red-950/60 border border-red-500/30 text-xs font-semibold text-red-400 uppercase tracking-wider mb-2">
                    Katalog Unggulan
                </div>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-white">
                    Produk Karet Standar Industri Berat
                </h2>
                <p class="text-slate-400 text-sm mt-1 max-w-xl">
                    Pilihan produk paling banyak diaplikasikan di industri manufaktur, pertambangan, maritim, dan konstruksi.
                </p>
            </div>
            <div class="mt-4 md:mt-0">
                <a href="{{ route('catalog.index') }}" class="inline-flex items-center gap-2 px-5 py-2.5 text-sm font-bold text-white bg-slate-800 hover:bg-slate-700 border border-slate-700 rounded-xl transition-all">
                    <span>Lihat Semua Katalog ({{ count($featuredProducts) }}+ Produk)</span>
                    <svg class="w-4 h-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Product Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($featuredProducts as $item)
                <div class="bg-slate-900/80 rounded-2xl border border-slate-800/90 overflow-hidden flex flex-col transition-all duration-300 card-glow group">
                    
                    <!-- Product Image & Badge -->
                    <div class="relative h-52 bg-slate-950 overflow-hidden">
                        <img src="{{ $item->image_url ?? 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=600&q=80' }}" 
                             alt="{{ $item->name }}" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-transparent"></div>
                        
                        @if($item->badge)
                            <div class="absolute top-3 left-3 px-2.5 py-1 rounded-md text-[11px] font-extrabold bg-red-600/90 text-white shadow-md backdrop-blur-sm">
                                {{ $item->badge }}
                            </div>
                        @endif

                        <div class="absolute bottom-3 left-3 text-xs text-slate-300 font-medium bg-black/60 backdrop-blur-md px-2.5 py-1 rounded-md">
                            {{ $item->category->name }}
                        </div>
                    </div>

                    <!-- Product Body Content -->
                    <div class="p-5 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="text-lg font-bold text-white group-hover:text-red-400 transition-colors">
                                <a href="{{ route('catalog.show', $item->slug) }}">
                                    {{ $item->name }}
                                </a>
                            </h3>
                            <p class="text-xs text-slate-400 mt-2 line-clamp-2 leading-relaxed">
                                {{ $item->short_description }}
                            </p>

                            <!-- Key Technical Spec Badges -->
                            <div class="mt-4 pt-3 border-t border-slate-800 grid grid-cols-2 gap-2 text-xs text-slate-300">
                                <div>
                                    <span class="text-slate-500 block text-[10px] uppercase">Kekerasan</span>
                                    <span class="font-semibold text-slate-200">{{ $item->hardness ?? 'Standard' }}</span>
                                </div>
                                <div>
                                    <span class="text-slate-500 block text-[10px] uppercase">Ketahanan Suhu</span>
                                    <span class="font-semibold text-slate-200">{{ $item->temperature_range ?? 'N/A' }}</span>
                                </div>
                            </div>
                        </div>

                        <!-- Action Buttons (PBI 07, PBI 09) -->
                        <div class="mt-6 pt-4 border-t border-slate-800/80 flex items-center gap-2">
                            <!-- Detail link -->
                            <a href="{{ route('catalog.show', $item->slug) }}" class="flex-1 text-center py-2 px-3 text-xs font-bold text-slate-300 bg-slate-800 hover:bg-slate-700 hover:text-white rounded-lg transition-colors border border-slate-700">
                                Detail Teknis
                            </a>

                            <!-- Direct Inquire / Tanya Ketersediaan CTA -->
                            <a href="{{ route('inquiry.create', ['product_id' => $item->id]) }}" class="flex-1 text-center py-2 px-3 text-xs font-bold text-white bg-red-600 hover:bg-red-500 rounded-lg shadow-md shadow-red-600/30 transition-all">
                                Tanya Stok / RFQ
                            </a>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>

    </div>
</section>

<!-- ========================================================================= -->
<!-- B2B PROCUREMENT WORKFLOW & CREDIBILITY -->
<!-- ========================================================================= -->
<section class="py-20 bg-[#0b0f19] border-b border-slate-800/60">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-md bg-slate-800 border border-slate-700 text-xs font-semibold text-slate-300 uppercase tracking-wider mb-3">
                Sistem Pengadaan B2B
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-white">
                Proses Pengadaan & Penawaran Cepat
            </h2>
            <p class="text-slate-400 text-sm mt-2">
                Dirancang khusus untuk mempermudah departemen Procurement & Engineering pabrik mendapatkan produk presisi dengan sertifikasi lengkap.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            
            <div class="bg-slate-900/60 border border-slate-800 rounded-2xl p-6 relative">
                <div class="w-10 h-10 rounded-xl bg-red-600/20 text-red-500 font-black text-lg flex items-center justify-center mb-4">
                    01
                </div>
                <h4 class="text-white font-bold text-base mb-1">Pengajuan Kebutuhan (RFQ)</h4>
                <p class="text-slate-400 text-xs leading-relaxed">
                    Kirimkan jenis produk, dimensi, jumlah, atau lampirkan drawing melalui formulir online atau WhatsApp sales kami.
                </p>
            </div>

            <div class="bg-slate-900/60 border border-slate-800 rounded-2xl p-6 relative">
                <div class="w-10 h-10 rounded-xl bg-red-600/20 text-red-500 font-black text-lg flex items-center justify-center mb-4">
                    02
                </div>
                <h4 class="text-white font-bold text-base mb-1">Verifikasi Teknis & Penawaran</h4>
                <p class="text-slate-400 text-xs leading-relaxed">
                    Tim teknis memvalidasi kecocokan kompon (NBR/EPDM/Silicone) dan menerbitkan Surat Penawaran Harga resmi &lt; 2 jam.
                </p>
            </div>

            <div class="bg-slate-900/60 border border-slate-800 rounded-2xl p-6 relative">
                <div class="w-10 h-10 rounded-xl bg-red-600/20 text-red-500 font-black text-lg flex items-center justify-center mb-4">
                    03
                </div>
                <h4 class="text-white font-bold text-base mb-1">Produksi & QC Lab Mutu</h4>
                <p class="text-slate-400 text-xs leading-relaxed">
                    Proses vulkanisir dan pemotongan CNC dengan inspeksi ketat. Dilengkapi Certificate of Analysis (CoA) & jaminan garansi.
                </p>
            </div>

            <div class="bg-slate-900/60 border border-slate-800 rounded-2xl p-6 relative">
                <div class="w-10 h-10 rounded-xl bg-red-600/20 text-red-500 font-black text-lg flex items-center justify-center mb-4">
                    04
                </div>
                <h4 class="text-white font-bold text-base mb-1">Pengiriman Tepat Waktu</h4>
                <p class="text-slate-400 text-xs leading-relaxed">
                    Pengiriman langsung ke lokasi pabrik, gudang pelabuhan, atau site tambang di seluruh wilayah Indonesia dengan ekspedisi terpercaya.
                </p>
            </div>

        </div>

    </div>
</section>

<!-- ========================================================================= -->
<!-- CALL TO ACTION BANNER (PBI 07) -->
<!-- ========================================================================= -->
<section class="py-16 bg-gradient-to-r from-red-950 via-slate-900 to-slate-950 border-b border-red-500/20 relative overflow-hidden">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <h2 class="text-2xl sm:text-4xl font-extrabold text-white mb-4">
            Siap Tingkatkan Efisiensi dan Ketahanan Mesin Pabrik Anda?
        </h2>
        <p class="text-slate-300 text-sm sm:text-base max-w-2xl mx-auto mb-8">
            Konsultasikan spesifikasi teknis komponen karet atau ajukan penawaran harga B2B sekarang. Tim sales engineer PT Duta Mitra Luhur siap membantu.
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="{{ route('inquiry.create') }}" class="w-full sm:w-auto px-8 py-3.5 text-base font-bold text-white bg-red-600 hover:bg-red-500 rounded-xl shadow-xl shadow-red-600/40 transition-all">
                Formulir Tanya Ketersediaan (RFQ)
            </a>
            <a href="https://wa.me/6289501823280?text=Halo%20Sales%20PT%20Duta%20Mitra%20Luhur,%20saya%20ingin%20konsultasi%20kebutuhan%20karet%20industri." target="_blank" class="w-full sm:w-auto px-7 py-3.5 text-base font-semibold text-slate-200 bg-slate-800 hover:bg-slate-700 border border-slate-700 rounded-xl transition-all">
                Hubungi via WhatsApp Resmi
            </a>
        </div>
    </div>
</section>

@endsection

