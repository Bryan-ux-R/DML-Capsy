@extends('layouts.app')

@section('title', 'Tentang Pabrik & Profil Perusahaan - PT Duta Mitra Luhur')
@section('meta_description', 'Profil resmi PT Duta Mitra Luhur (Duta Rubber): Manufaktur produk karet terkemuka di Tangerang Banten berdiri sejak 2010. Melayani sol sepatu, seal karet, plug rubber, dan komponen industri.')

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
                    Profil Resmi Perusahaan & Manufaktur
                </div>
                <h1 class="text-3xl sm:text-5xl font-black text-white tracking-tight leading-tight">
                    PT DUTA MITRA LUHUR
                </h1>
                <p class="text-base text-red-400 font-bold tracking-wide">
                    DUTA RUBBER — Manufactur of Rubber Product
                </p>
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-lg bg-slate-900 border border-slate-700/80 text-xs text-slate-300">
                    <span class="text-red-400">📜</span>
                    <span>Berdiri Sejak <strong>03 Agustus 2010</strong> • Akta Pendirian No. 01 tgl 03 Agustus 2010</span>
                </div>
                <p class="text-slate-300 text-sm leading-relaxed">
                    <strong>PT Duta Mitra Luhur (Duta Rubber)</strong> adalah perusahaan manufaktur terkemuka yang memproduksi aneka produk karet teknik berkualitas tinggi dan ramah lingkungan. Berlokasi strategis di Kawasan Industri & Pergudangan Sentra Bitung, Curug, Tangerang - Banten, kami telah dipercaya lebih dari 15 tahun oleh berbagai mitra industri nasional dan korporasi manufaktur multinasional.
                </p>
                <p class="text-slate-400 text-xs leading-relaxed">
                    Kami memproduksi berbagai lini komponen karet berkualitas, di antaranya: <strong>Rubber Soles (Sol Sepatu Karet / Outsole)</strong>, <strong>Industrial Seals & Gasket</strong>, <strong>Plug Rubber</strong>, <strong>Mudguard Karet Armada</strong>, hingga <strong>Cover Stir Mobil</strong>. Seluruh proses didukung permesinan terpadu mulai dari pencampuran kompon di mesin Kneader & Open Mill, cetak Hydraulic Press, pemotongan presisi Kukdong, trimming higienis, hingga sistem inspeksi Metal Detector.
                </p>
                
                <div class="pt-4 flex flex-wrap gap-3">
                    <a href="{{ route('catalog.index') }}" class="px-5 py-2.5 text-xs font-bold text-white bg-red-600 hover:bg-red-500 rounded-xl shadow-lg shadow-red-600/30 transition-all">
                        Lihat Katalog Produk Kami
                    </a>
                    <a href="{{ route('inquiry.create') }}" class="px-5 py-2.5 text-xs font-semibold text-slate-200 bg-slate-800 hover:bg-slate-700 rounded-xl border border-slate-700 transition-all">
                        Ajukan Penawaran B2B (RFQ)
                    </a>
                </div>
            </div>

            <!-- Featured Facility Photo -->
            <div class="lg:col-span-5">
                <div class="rounded-2xl overflow-hidden border border-slate-800 shadow-2xl relative bg-slate-900 group">
                    <img src="/images/factory/machines/production-line-kmk.jpg" alt="Lini Produksi PT Duta Mitra Luhur" class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-transparent"></div>
                    <div class="absolute bottom-4 left-4 right-4 p-4 rounded-xl bg-slate-950/85 backdrop-blur-md border border-slate-800 text-xs text-white">
                        <div class="font-bold text-red-400 flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                            Fasilitas Produksi Pabrik Sentra Bitung
                        </div>
                        <div class="text-slate-300 text-[11px] mt-0.5">Lini Produksi Karet Berstandar Industri Tinggi & Kerjasama Mitra Global</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Visi & Misi (Sesuai Dokumen Resmi) -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
            <div class="bg-slate-900/70 border border-slate-800 rounded-2xl p-6 sm:p-8 hover:border-slate-700 transition-colors">
                <div class="w-12 h-12 rounded-xl bg-red-600/20 text-red-400 font-bold flex items-center justify-center text-xl mb-4">
                    🎯
                </div>
                <h3 class="text-xl font-bold text-white mb-3">VISI PERUSAHAAN</h3>
                <p class="text-slate-200 text-sm leading-relaxed italic bg-slate-950/50 p-4 rounded-xl border border-slate-800/80">
                    "Menjadi Perusahaan Manufacturing product yang berkaitan dengan Rubber dengan kualitas terbaik dan ramah lingkungan."
                </p>
            </div>

            <div class="bg-slate-900/70 border border-slate-800 rounded-2xl p-6 sm:p-8 hover:border-slate-700 transition-colors">
                <div class="w-12 h-12 rounded-xl bg-red-600/20 text-red-400 font-bold flex items-center justify-center text-xl mb-4">
                    ⚡
                </div>
                <h3 class="text-xl font-bold text-white mb-3">MISI PERUSAHAAN</h3>
                <ul class="space-y-3 text-slate-300 text-xs sm:text-sm leading-relaxed">
                    <li class="flex items-start gap-2.5">
                        <span class="text-red-400 font-bold">1.</span>
                        <span>Secara berkesinambungan memproduksi dan menyediakan product-product berkualitas tinggi serta memenuhi kebutuhan pelanggan melalui program pemasaran yang terbaik.</span>
                    </li>
                    <li class="flex items-start gap-2.5">
                        <span class="text-red-400 font-bold">2.</span>
                        <span>Menghasilkan keuntungan yang cukup memuaskan dan meningkatkan kesejahteraan bagi seluruh karyawan.</span>
                    </li>
                    <li class="flex items-start gap-2.5">
                        <span class="text-red-400 font-bold">3.</span>
                        <span>Mengembangkan kemampuan karyawan yang berkompeten untuk tujuan kemajuan perusahaan.</span>
                    </li>
                    <li class="flex items-start gap-2.5">
                        <span class="text-red-400 font-bold">4.</span>
                        <span>Menjadi perusahaan yang kuat dan terus berkembang serta siap menghadapi persaingan Regional Maupun Global kedepannya.</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Sasaran Mutu Perusahaan (Sesuai Dokumen Resmi) -->
        <div class="bg-gradient-to-br from-red-950/40 via-slate-900/90 to-slate-900 border border-red-500/20 rounded-3xl p-8 sm:p-10 mb-16 shadow-xl">
            <div class="text-center max-w-3xl mx-auto mb-10">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-md bg-red-600/20 border border-red-500/30 text-xs font-bold text-red-400 uppercase tracking-wider mb-2">
                    Quality Objectives
                </div>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-white">SASARAN MUTU PERUSAHAAN</h2>
                <p class="text-slate-400 text-xs sm:text-sm mt-2">
                    Komitmen konsisten PT Duta Mitra Luhur dalam melayani seluruh pelanggan dan mitra industri:
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Sasaran 1 -->
                <div class="p-6 rounded-2xl bg-slate-950/70 border border-slate-800 text-center hover:border-red-500/40 transition-colors">
                    <div class="w-14 h-14 mx-auto mb-3 rounded-2xl bg-red-600/10 text-red-400 flex items-center justify-center font-black text-2xl">
                        ⏱️
                    </div>
                    <div class="text-3xl font-black text-white mb-1 text-red-400">99 %</div>
                    <h4 class="text-sm font-bold text-white mb-2 uppercase tracking-wide">Delivery Ontime</h4>
                    <p class="text-slate-400 text-xs leading-relaxed">
                        Target pengiriman tepat waktu mencapai 99%, memastikan kelancaran rantai pasok dan operasional produksi klien kami tanpa jeda.
                    </p>
                </div>

                <!-- Sasaran 2 -->
                <div class="p-6 rounded-2xl bg-slate-950/70 border border-slate-800 text-center hover:border-red-500/40 transition-colors">
                    <div class="w-14 h-14 mx-auto mb-3 rounded-2xl bg-emerald-600/10 text-emerald-400 flex items-center justify-center font-black text-2xl">
                        🛡️
                    </div>
                    <div class="text-3xl font-black text-white mb-1 text-emerald-400">0 %</div>
                    <h4 class="text-sm font-bold text-white mb-2 uppercase tracking-wide">Zero Claim Customer</h4>
                    <p class="text-slate-400 text-xs leading-relaxed">
                        Meminimalkan klaim pelanggan menjadi 0% melalui tahapan Quality Control berlapis dan inspeksi pendeteksi logam berstandar ketat.
                    </p>
                </div>

                <!-- Sasaran 3 -->
                <div class="p-6 rounded-2xl bg-slate-950/70 border border-slate-800 text-center hover:border-red-500/40 transition-colors">
                    <div class="w-14 h-14 mx-auto mb-3 rounded-2xl bg-amber-600/10 text-amber-400 flex items-center justify-center font-black text-2xl">
                        📈
                    </div>
                    <div class="text-3xl font-black text-white mb-1 text-amber-400">Stabil</div>
                    <h4 class="text-sm font-bold text-white mb-2 uppercase tracking-wide">Pertumbuhan Omzet</h4>
                    <p class="text-slate-400 text-xs leading-relaxed">
                        Memaksimalkan omzet penjualan dengan kenaikan yang stabil melalui perluasan kemitraan regional dan diversifikasi lini produk karet.
                    </p>
                </div>
            </div>
        </div>

        <!-- Mesin-Mesin Produksi Pabrik (Sesuai Dokumen Resmi + Foto Asli) -->
        <div class="mb-16">
            <div class="text-center max-w-3xl mx-auto mb-10">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-md bg-red-950/60 border border-red-500/30 text-xs font-bold text-red-400 uppercase tracking-wider mb-2">
                    Machinery & Facilities
                </div>
                <h2 class="text-2xl sm:text-4xl font-extrabold text-white">MESIN - MESIN PRODUKSI PABRIK</h2>
                <p class="text-slate-400 text-xs sm:text-sm mt-2">
                    Mesin-mesin yang kami miliki dan pergunakan sendiri untuk melakukan proses manufaktur dan fabrikasi karet secara presisi:
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <!-- 1. Hydrolic Press Rubber -->
                <div class="bg-slate-900/80 border border-slate-800 rounded-2xl overflow-hidden hover:border-slate-700 transition-all flex flex-col">
                    <div class="h-48 overflow-hidden bg-slate-950">
                        <img src="/images/factory/machines/hydrolic-press-rubber.jpg" alt="Mesin Hydrolic Press Rubber" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-5 flex-1 flex flex-col">
                        <div class="text-xs font-bold text-red-400 uppercase mb-1">01. Moulding & Vulcanizing</div>
                        <h3 class="text-base font-bold text-white mb-2">Mesin Hydrolic Press Rubber</h3>
                        <p class="text-slate-400 text-xs leading-relaxed flex-1">
                            Mesin kompresi hidrolik bertekanan dan bertemperatur tinggi untuk vulkanisasi cetakan sol sepatu karet, gasket, cincin seal, dan komponen presisi tinggi.
                        </p>
                    </div>
                </div>

                <!-- 2. Lini Mesin Press -->
                <div class="bg-slate-900/80 border border-slate-800 rounded-2xl overflow-hidden hover:border-slate-700 transition-all flex flex-col">
                    <div class="h-48 overflow-hidden bg-slate-950">
                        <img src="/images/factory/machines/press-rubber-line.jpg" alt="Lini Mesin Press Rubber" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-5 flex-1 flex flex-col">
                        <div class="text-xs font-bold text-red-400 uppercase mb-1">02. Kapasitas Massal</div>
                        <h3 class="text-base font-bold text-white mb-2">Lini Mesin Press Rubber Paralel</h3>
                        <p class="text-slate-400 text-xs leading-relaxed flex-1">
                            Deretan stasiun cetak hidrolik ganda yang mampu memproduksi ribuan pasang sol karet dan komponen rubber harian dengan kontrol timer dan panas elektrik presisi.
                        </p>
                    </div>
                </div>

                <!-- 3. Mesin Kneader -->
                <div class="bg-slate-900/80 border border-slate-800 rounded-2xl overflow-hidden hover:border-slate-700 transition-all flex flex-col">
                    <div class="h-48 overflow-hidden bg-slate-950">
                        <img src="/images/factory/machines/mesin-kneader.jpg" alt="Mesin Kneader Kompon Karet" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-5 flex-1 flex flex-col">
                        <div class="text-xs font-bold text-red-400 uppercase mb-1">03. Compounding Mixing</div>
                        <h3 class="text-base font-bold text-white mb-2">Mesin Kneader</h3>
                        <p class="text-slate-400 text-xs leading-relaxed flex-1">
                            Mesin pencampur tertutup (internal mixer) berdaya tinggi untuk mencampur getah karet mentah, karbon aktif, sulfur, dan formula aditif kimia agar homogen sempurna.
                        </p>
                    </div>
                </div>

                <!-- 4. Mesin Open Mill -->
                <div class="bg-slate-900/80 border border-slate-800 rounded-2xl overflow-hidden hover:border-slate-700 transition-all flex flex-col">
                    <div class="h-48 overflow-hidden bg-slate-950">
                        <img src="/images/factory/machines/mesin-open-mill.jpg" alt="Mesin Open Mill" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-5 flex-1 flex flex-col">
                        <div class="text-xs font-bold text-red-400 uppercase mb-1">04. Sheeting & Plasticizing</div>
                        <h3 class="text-base font-bold text-white mb-2">Mesin Open Mill</h3>
                        <p class="text-slate-400 text-xs leading-relaxed flex-1">
                            Dua rol penggiling horizontal bertenaga tinggi untuk menghaluskan kompon karet, meratakan ketebalan lembaran, dan proses pendinginan sebelum masuk ke tahap pencetakan.
                        </p>
                    </div>
                </div>

                <!-- 5. Mesin Cutting Kuk Dong -->
                <div class="bg-slate-900/80 border border-slate-800 rounded-2xl overflow-hidden hover:border-slate-700 transition-all flex flex-col">
                    <div class="h-48 overflow-hidden bg-slate-950">
                        <img src="/images/factory/machines/mesin-cutting-kukdong.jpg" alt="Mesin Cutting Kuk Dong" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-5 flex-1 flex flex-col">
                        <div class="text-xs font-bold text-red-400 uppercase mb-1">05. Precision Die Cutting</div>
                        <h3 class="text-base font-bold text-white mb-2">Mesin Cutting Kuk Dong</h3>
                        <p class="text-slate-400 text-xs leading-relaxed flex-1">
                            Mesin potong hidrolik spesialis buatan Kukdong untuk memotong pola lembaran karet kompon, sol, dan gasket secara cepat dengan akurasi dimensi tinggi.
                        </p>
                    </div>
                </div>

                <!-- 6. Mesin Cutting Rubber / Potong -->
                <div class="bg-slate-900/80 border border-slate-800 rounded-2xl overflow-hidden hover:border-slate-700 transition-all flex flex-col">
                    <div class="h-48 overflow-hidden bg-slate-950">
                        <img src="/images/factory/machines/mesin-cutting-rubber.jpg" alt="Mesin Cutting Rubber / Mesin Potong" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-5 flex-1 flex flex-col">
                        <div class="text-xs font-bold text-red-400 uppercase mb-1">06. Guillotine Shearing</div>
                        <h3 class="text-base font-bold text-white mb-2">Mesin Cutting Rubber (Mesin Potong)</h3>
                        <p class="text-slate-400 text-xs leading-relaxed flex-1">
                            Mesin potong guillotine mekanis yang dilengkapi meja rol luncur untuk memotong balok kompon karet mentah dan lembaran karet tebal sesuai bobot gramasi standar.
                        </p>
                    </div>
                </div>

                <!-- 7. Mesin Trimming & Lini Trimming -->
                <div class="bg-slate-900/80 border border-slate-800 rounded-2xl overflow-hidden hover:border-slate-700 transition-all flex flex-col">
                    <div class="h-48 overflow-hidden bg-slate-950">
                        <img src="/images/factory/machines/trimming-line.jpg" alt="Lini Mesin Trimming" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-5 flex-1 flex flex-col">
                        <div class="text-xs font-bold text-red-400 uppercase mb-1">07. Finishing & Deflashing</div>
                        <h3 class="text-base font-bold text-white mb-2">Mesin Triming & Meja Kerja</h3>
                        <p class="text-slate-400 text-xs leading-relaxed flex-1">
                            Stasiun mesin trimming khusus untuk membuang sisa pinggiran karet cetakan (flash/burr) pada sol sepatu dan seal sehingga hasil akhir mulus dan rapi.
                        </p>
                    </div>
                </div>

                <!-- 8. Mesin Metal Detector -->
                <div class="bg-slate-900/80 border border-slate-800 rounded-2xl overflow-hidden hover:border-slate-700 transition-all flex flex-col">
                    <div class="h-48 overflow-hidden bg-slate-950">
                        <img src="/images/factory/machines/mesin-metal-detector-panel.jpg" alt="Mesin Metal Detector" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-5 flex-1 flex flex-col">
                        <div class="text-xs font-bold text-red-400 uppercase mb-1">08. Quality & Safety Inspection</div>
                        <h3 class="text-base font-bold text-white mb-2">Mesin Metal Detector</h3>
                        <p class="text-slate-400 text-xs leading-relaxed flex-1">
                            Konveyor sensor deteksi logam digital otomatis untuk memastikan 100% sol sepatu dan komponen karet bebas dari kontaminasi jarum, serpihan kawat, atau logam asing.
                        </p>
                    </div>
                </div>

                <!-- 9. Lini Produksi Khusus (Line PT KMK) -->
                <div class="bg-slate-900/80 border border-slate-800 rounded-2xl overflow-hidden hover:border-slate-700 transition-all flex flex-col">
                    <div class="h-48 overflow-hidden bg-slate-950">
                        <img src="/images/factory/machines/production-line-kmk.jpg" alt="Line Produksi Kemitraan PT KMK" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-5 flex-1 flex flex-col">
                        <div class="text-xs font-bold text-red-400 uppercase mb-1">09. Dedicated Assembly Line</div>
                        <h3 class="text-base font-bold text-white mb-2">Dedicated Line PT. KMK</h3>
                        <p class="text-slate-400 text-xs leading-relaxed flex-1">
                            Lini manufaktur khusus yang didedikasikan untuk pesanan volume tinggi dari korporasi manufaktur alas kaki internasional dengan kontrol alur kerja standar ekspor.
                        </p>
                    </div>
                </div>

            </div>
        </div>

        <!-- Klien & Mitra Kerjasama (Sesuai Dokumen Resmi) -->
        <div class="bg-slate-900/70 border border-slate-800 rounded-3xl p-8 sm:p-10 mb-16">
            <div class="text-center max-w-2xl mx-auto mb-10">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-md bg-red-950/60 border border-red-500/30 text-xs font-bold text-red-400 uppercase tracking-wider mb-2">
                    Partnership & Clients
                </div>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-white">PERUSAHAAN MITRA KERJASAMA KAMI</h2>
                <p class="text-slate-400 text-xs sm:text-sm mt-2">
                    PT Duta Mitra Luhur telah dipercaya dan bekerjasama erat memasok komponen karet berkualitas kepada perusahaan terkemuka:
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <div class="p-5 rounded-2xl bg-slate-950/80 border border-slate-800 flex items-center gap-4 hover:border-red-500/30 transition-colors">
                    <div class="w-12 h-12 rounded-xl bg-red-600/10 text-red-400 font-bold flex items-center justify-center shrink-0 text-lg">
                        01
                    </div>
                    <div>
                        <h3 class="text-sm font-bold text-white">PT KMK Global Sports</h3>
                        <p class="text-xs text-slate-400">Produsen manufaktur alas kaki terkemuka brand multinasional.</p>
                    </div>
                </div>

                <div class="p-5 rounded-2xl bg-slate-950/80 border border-slate-800 flex items-center gap-4 hover:border-red-500/30 transition-colors">
                    <div class="w-12 h-12 rounded-xl bg-red-600/10 text-red-400 font-bold flex items-center justify-center shrink-0 text-lg">
                        02
                    </div>
                    <div>
                        <h3 class="text-sm font-bold text-white">PT HTM Indonesia</h3>
                        <p class="text-xs text-slate-400">Perusahaan industri komponen dan fabrikasi manufaktur.</p>
                    </div>
                </div>

                <div class="p-5 rounded-2xl bg-slate-950/80 border border-slate-800 flex items-center gap-4 hover:border-red-500/30 transition-colors">
                    <div class="w-12 h-12 rounded-xl bg-red-600/10 text-red-400 font-bold flex items-center justify-center shrink-0 text-lg">
                        03
                    </div>
                    <div>
                        <h3 class="text-sm font-bold text-white">PT Karya Sukses Bersama</h3>
                        <p class="text-xs text-slate-400">Mitra pengadaan produk karet dan perlengkapan teknik.</p>
                    </div>
                </div>

                <div class="p-5 rounded-2xl bg-slate-950/80 border border-slate-800 flex items-center gap-4 hover:border-red-500/30 transition-colors">
                    <div class="w-12 h-12 rounded-xl bg-red-600/10 text-red-400 font-bold flex items-center justify-center shrink-0 text-lg">
                        04
                    </div>
                    <div>
                        <h3 class="text-sm font-bold text-white">PT Sinar Agung Gumilang</h3>
                        <p class="text-xs text-slate-400">Korporasi distribusi komponen suku cadang otomotif & industri.</p>
                    </div>
                </div>

                <div class="p-5 rounded-2xl bg-slate-950/80 border border-slate-800 flex items-center gap-4 hover:border-red-500/30 transition-colors">
                    <div class="w-12 h-12 rounded-xl bg-red-600/10 text-red-400 font-bold flex items-center justify-center shrink-0 text-lg">
                        05
                    </div>
                    <div>
                        <h3 class="text-sm font-bold text-white">CV Fikaru Rubber</h3>
                        <p class="text-xs text-slate-400">Spesialis perdagangan & perakitan aneka komponen karet.</p>
                    </div>
                </div>

                <div class="p-5 rounded-2xl bg-slate-950/80 border border-slate-800 flex items-center gap-4 hover:border-red-500/30 transition-colors">
                    <div class="w-12 h-12 rounded-xl bg-red-600/10 text-red-400 font-bold flex items-center justify-center shrink-0 text-lg">
                        06
                    </div>
                    <div>
                        <h3 class="text-sm font-bold text-white">Mitra Industri Lainnya</h3>
                        <p class="text-xs text-slate-400">Ratusan pabrik, bengkel karoseri, dan distributor di Indonesia.</p>
                    </div>
                </div>

            </div>
        </div>

        <!-- Alamat Pabrik & Legalitas Lengkap -->
        <div class="bg-gradient-to-r from-slate-900 via-slate-900/90 to-red-950/30 border border-slate-800 rounded-3xl p-8 sm:p-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-8 space-y-4">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-md bg-red-950/60 border border-red-500/30 text-xs font-bold text-red-400 uppercase tracking-wider">
                        Lokasi & Kontak Resmi
                    </div>
                    <h3 class="text-2xl font-bold text-white">Kunjungi Pabrik Kami di Sentra Bitung, Tangerang</h3>
                    <div class="space-y-3 text-xs sm:text-sm text-slate-300">
                        <div class="flex items-start gap-3">
                            <span class="text-red-400 text-lg">📍</span>
                            <span><strong>Alamat Pabrik:</strong> KAWASAN INDUSTRY & PERGUDANGAN SENTRA BITUNG C7, JL BAITUSSAADAH RT 01/03, KADU, CURUG, TANGERANG, BANTEN</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-red-400 text-lg">📞</span>
                            <span><strong>No. Telepon:</strong> (021) 2951-4148 &nbsp;|&nbsp; <strong>FAX:</strong> (021) 2951-4149</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-red-400 text-lg">✉️</span>
                            <span><strong>Email Resmi:</strong> duta_mitraluhur@yahoo.co.id</span>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-4 flex flex-col gap-3">
                    <a href="{{ route('contact') }}" class="w-full text-center py-3 px-6 text-xs sm:text-sm font-bold text-white bg-red-600 hover:bg-red-500 rounded-xl shadow-lg shadow-red-600/30 transition-all">
                        Hubungi Tim Kami
                    </a>
                    <a href="{{ route('inquiry.create') }}" class="w-full text-center py-3 px-6 text-xs sm:text-sm font-bold text-slate-300 bg-slate-800 hover:bg-slate-700 rounded-xl border border-slate-700 transition-all">
                        Form Tanya Ketersediaan
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
