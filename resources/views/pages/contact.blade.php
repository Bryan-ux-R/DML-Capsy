@extends('layouts.app')

@section('title', 'Kontak Pabrik & Tim Sales - PT Duta Mitra Luhur')
@section('meta_description', 'Hubungi tim sales engineering dan kantor pabrik PT Duta Mitra Luhur (Duta Rubber) untuk penawaran harga dan konsultasi teknis.')

@section('content')
<div class="py-14 bg-[#0b0f19]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Breadcrumbs -->
        <nav class="flex items-center gap-2 text-xs text-slate-400 mb-6">
            <a href="{{ route('home') }}" class="hover:text-white transition-colors">Beranda</a>
            <span>/</span>
            <span class="text-red-400 font-semibold">Kontak & Lokasi Pabrik</span>
        </nav>

        <!-- Header -->
        <div class="mb-12">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-md bg-red-950/60 border border-red-500/30 text-xs font-semibold text-red-400 uppercase tracking-wider mb-2">
                Pusat Layanan Klien & Tender
            </div>
            <h1 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                Hubungi PT Duta Mitra Luhur
            </h1>
            <p class="text-slate-400 text-sm mt-2">
                Tim teknis dan sales kami siap memberikan respon cepat &lt; 2 jam untuk permintaan estimasi harga dan ketersediaan stok.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
            
            <!-- Contact Details Card -->
            <div class="lg:col-span-5 space-y-6">
                
                <div class="bg-slate-900/80 border border-slate-800 rounded-2xl p-6 space-y-5">
                    <h3 class="text-lg font-bold text-white border-b border-slate-800 pb-3">
                        Kantor & Pabrik Fabrikasi
                    </h3>

                    <div class="space-y-4 text-xs text-slate-300">
                        <div class="flex items-start gap-3">
                            <span class="text-lg text-red-400">🏢</span>
                            <div>
                                <strong class="text-white block text-sm">PT DUTA MITRA LUHUR (Duta Rubber)</strong>
                                <span class="text-slate-400">Kawasan Industri & Pergudangan Terpadu, Blok B-12 No. 88, Jawa Barat - Indonesia</span>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <span class="text-lg text-red-400">📞</span>
                            <div>
                                <strong class="text-white block text-sm">Telepon Kantor & WhatsApp B2B</strong>
                                <span class="text-slate-400 block">Hunting: (021) 8990-1234 / 8990-1235</span>
                                <span class="text-emerald-400 font-bold block mt-0.5">Hotline WA: 0895-0182-3280</span>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <span class="text-lg text-red-400">✉️</span>
                            <div>
                                <strong class="text-white block text-sm">Email Resmi Pengadaan (RFQ)</strong>
                                <span class="text-slate-400 block">sales@dutamitraluhur.co.id</span>
                                <span class="text-slate-400 block">tender@dutamitraluhur.co.id</span>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <span class="text-lg text-red-400">⏰</span>
                            <div>
                                <strong class="text-white block text-sm">Jam Operasional Layanan</strong>
                                <span class="text-slate-400 block">Senin - Jumat: 08:00 - 17:00 WIB</span>
                                <span class="text-slate-400 block">Sabtu: 08:00 - 13:00 WIB</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Fast WhatsApp Card -->
                <div class="p-6 rounded-2xl bg-gradient-to-br from-emerald-950/70 to-slate-900 border border-emerald-500/30 text-center">
                    <h4 class="text-sm font-bold text-emerald-400 mb-1">Direct Chat via WhatsApp</h4>
                    <p class="text-xs text-slate-300 mb-4">Konsultasikan kebutuhan mendesak atau minta penawaran langsung ke tim sales desk.</p>
                    <a href="https://wa.me/6289501823280?text=Halo%20Sales%20PT%20Duta%20Mitra%20Luhur,%20saya%20ingin%20tanya%20produk%20karet%20industri." target="_blank" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-xs shadow-lg shadow-emerald-900/40">
                        Chat WhatsApp Sales Sekarang
                    </a>
                </div>

            </div>

            <!-- Online RFQ Prompt Form (Redirects to Inquiry Form) -->
            <div class="lg:col-span-7 bg-slate-900/80 border border-slate-800 rounded-3xl p-6 sm:p-8 backdrop-blur-md">
                <h3 class="text-xl font-bold text-white mb-2">Ajukan Pertanyaan Ketersediaan Produk</h3>
                <p class="text-xs text-slate-400 mb-6">
                    Isi formulir untuk mendapatkan nomor tiket inquiry resmi dan dokumen penawaran harga tertulis (RFQ).
                </p>

                <div class="text-center py-8">
                    <p class="text-slate-300 text-sm mb-6 max-w-md mx-auto">
                        Gunakan formulir resmi kami yang dilengkapi opsi pilihan ukuran, kuantitas, varian kompon, dan pengalihan instan ke WhatsApp.
                    </p>
                    <a href="{{ route('inquiry.create') }}" class="inline-flex items-center gap-2 px-8 py-3.5 text-sm font-bold text-white bg-red-600 hover:bg-red-500 rounded-xl shadow-xl shadow-red-600/30 transition-all">
                        <span>Buka Formulir Inquiry Online Resmi</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection

