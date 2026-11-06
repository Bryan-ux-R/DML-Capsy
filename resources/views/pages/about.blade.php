@extends('layouts.app')

@section('title', 'Tentang Pabrik & Profil Perusahaan - PT Duta Mitra Luhur')
@section('meta_description', 'Profil PT Duta Mitra Luhur (Duta Rubber): Produsen karet industri terpercaya dengan fasilitas vulkanisir modern, lab QC terakreditasi, sertifikasi ISO 9001:2015 & SNI.')

@section('content')
<div class="py-14 bg-[#0b0f19]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Breadcrumbs -->
        <nav class="flex items-center gap-2 text-xs text-slate-400 mb-6">
            <a href="{{ route('home') }}" class="hover:text-white transition-colors">Beranda</a>
            <span>/</span>
            <span class="text-red-400 font-semibold">Tentang Pabrik & Perusahaan</span>
        </nav>

        <!-- Company Header (PBI 04) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center mb-16">
            <div class="lg:col-span-7 space-y-4">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-md bg-red-950/60 border border-red-500/30 text-xs font-semibold text-red-400 uppercase tracking-wider">
                    Profil Perusahaan & Manufaktur
                </div>
                <h1 class="text-3xl sm:text-5xl font-black text-white tracking-tight leading-tight">
                    PT DUTA MITRA LUHUR
                </h1>
                <p class="text-base text-red-400 font-semibold">
                    DUTA RUBBER — Industrial Rubber Engineering & Solutions
                </p>
                <p class="text-slate-300 text-sm leading-relaxed">
                    PT Duta Mitra Luhur adalah perusahaan manufaktur dan fabrikasi spesialis produk karet teknik yang beroperasi sejak lebih dari 15 tahun. Kami melayani kebutuhan komponen karet industri untuk berbagai sektor vital nasional, termasuk tambang batubara & mineral, pabrik semen, petrokimia, pulp & paper, pelabuhan, hingga industri otomotif dan konstruksi.
                </p>
                <p class="text-slate-400 text-xs leading-relaxed">
                    Didukung lini produksi mesin presisi tinggi, workshop cetakan (molding CNC), serta laboratorium formulasi kompon karet, kami mampu memproduksi produk dengan standar mutu SNI dan ISO 9001:2015.
                </p>
                
                <div class="pt-4 flex flex-wrap gap-3">
                    <a href="{{ route('catalog.index') }}" class="px-5 py-2.5 text-xs font-bold text-white bg-red-600 hover:bg-red-500 rounded-xl shadow-lg shadow-red-600/30">
                        Jelajahi Produk Pabrik
                    </a>
                    <a href="{{ route('inquiry.create') }}" class="px-5 py-2.5 text-xs font-semibold text-slate-200 bg-slate-800 hover:bg-slate-700 rounded-xl border border-slate-700">
                        Minta Penawaran B2B
                    </a>
                </div>
            </div>

            <div class="lg:col-span-5">
                <div class="rounded-2xl overflow-hidden border border-slate-800 shadow-2xl relative bg-slate-900">
                    <img src="https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=900&q=80" alt="Pabrik Duta Rubber" class="w-full h-80 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-transparent"></div>
                    <div class="absolute bottom-4 left-4 right-4 p-4 rounded-xl bg-slate-950/80 backdrop-blur-md border border-slate-800 text-xs text-white">
                        <div class="font-bold text-red-400">Fasilitas Fabrikasi Utama</div>
                        <div class="text-slate-300">Kapasitas Produksi Harian > 5.000 kg Kompon Karet Berkualitas Tinggi</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Visi & Misi -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
            <div class="bg-slate-900/60 border border-slate-800 rounded-2xl p-6 sm:p-8">
                <div class="w-10 h-10 rounded-xl bg-red-600/20 text-red-400 font-bold flex items-center justify-center mb-4">
                    🎯
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Visi Perusahaan</h3>
                <p class="text-slate-300 text-xs leading-relaxed">
                    Menjadi produsen komponen karet industri nomor satu di Indonesia yang diakui atas inovasi formulasi polimer, keandalan uji mutu laboratorium, dan kecepatan pelayanan pengadaan B2B.
                </p>
            </div>

            <div class="bg-slate-900/60 border border-slate-800 rounded-2xl p-6 sm:p-8">
                <div class="w-10 h-10 rounded-xl bg-red-600/20 text-red-400 font-bold flex items-center justify-center mb-4">
                    ⚡
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Misi Perusahaan</h3>
                <ul class="space-y-2 text-slate-300 text-xs leading-relaxed">
                    <li class="flex items-start gap-2">
                        <span class="text-red-400">✓</span>
                        <span>Menghasilkan produk karet berstandar SNI, ASTM, dan DIN dengan konsistensi mutu tinggi.</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-red-400">✓</span>
                        <span>Menyediakan solusi reverse engineering komponen karet impor untuk menghemat biaya operasional industri nasional.</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-red-400">✓</span>
                        <span>Memberikan layanan pengadaan B2B yang responsif, transparan, dan tepat waktu.</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Standar Mutu & Fasilitas Lab -->
        <div class="bg-slate-900/80 border border-slate-800 rounded-3xl p-8 sm:p-10 mb-16">
            <div class="text-center max-w-2xl mx-auto mb-10">
                <h2 class="text-2xl sm:text-3xl font-extrabold text-white">Laboratorium Uji Mutu & Quality Assurance</h2>
                <p class="text-slate-400 text-xs mt-2">
                    Setiap batch produk PT Duta Mitra Luhur melalui rangkaian pengujian fisik & kimia ketat sebelum proses packing dan pengiriman.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="p-5 rounded-2xl bg-slate-950/70 border border-slate-800">
                    <h4 class="text-sm font-bold text-white mb-2 text-red-400">01. Moving Die Rheometer (MDR)</h4>
                    <p class="text-slate-400 text-xs leading-relaxed">
                        Pengujian kurva vulkanisasi kompon karet mentah untuk memastikan stabilitas curing time dan elastisitas sebelum dicetak.
                    </p>
                </div>

                <div class="p-5 rounded-2xl bg-slate-950/70 border border-slate-800">
                    <h4 class="text-sm font-bold text-white mb-2 text-red-400">02. Universal Tensile Tester</h4>
                    <p class="text-slate-400 text-xs leading-relaxed">
                        Uji kekuatan tarik (tensile strength), modulus elastisitas, dan elongasi pemutusan sesuai standar ASTM D412 dan SNI.
                    </p>
                </div>

                <div class="p-5 rounded-2xl bg-slate-950/70 border border-slate-800">
                    <h4 class="text-sm font-bold text-white mb-2 text-red-400">03. DIN Abrasion & Aging Chamber</h4>
                    <p class="text-slate-400 text-xs leading-relaxed">
                        Pengujian daya tahan gesek terhadap abrasi tinggi dan uji ketahanan penuaan termal/ozon (ozone cracking test).
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

