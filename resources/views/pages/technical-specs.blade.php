@extends('layouts.app')

@section('title', 'Panduan Spesifikasi Teknis Polimer Karet Industri - PT Duta Mitra Luhur')
@section('meta_description', 'Panduan teknis pemilihan material karet industri: NBR, EPDM, Silicone, Neoprene, Viton (FKM), dan Natural Rubber (NR).')

@section('content')
<div class="py-14 bg-[#0b0f19]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Breadcrumbs -->
        <nav class="flex items-center gap-2 text-xs text-slate-400 mb-6">
            <a href="{{ route('home') }}" class="hover:text-white transition-colors">Beranda</a>
            <span>/</span>
            <span class="text-red-400 font-semibold">Spesifikasi Teknis Polimer Karet</span>
        </nav>

        <!-- Header -->
        <div class="mb-12">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-md bg-red-950/60 border border-red-500/30 text-xs font-semibold text-red-400 uppercase tracking-wider mb-2">
                Engineering Guidebook
            </div>
            <h1 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                Panduan Karakteristik & Pemilihan Kompon Karet Industri
            </h1>
            <p class="text-slate-400 text-sm mt-2 max-w-3xl">
                Gunakan matriks perbandingan di bawah ini untuk memilih jenis elastomer yang paling sesuai dengan kondisi temperatur kerja, tekanan, dan paparan zat kimia di pabrik Anda.
            </p>
        </div>

        <!-- Matrix Table -->
        <div class="bg-slate-900/70 border border-slate-800 rounded-3xl p-6 sm:p-8 backdrop-blur-md mb-12 overflow-hidden shadow-2xl">
            <h3 class="text-lg font-bold text-white mb-4">Matriks Perbandingan Karakteristik Polimer</h3>
            
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs sm:text-sm text-slate-300">
                    <thead class="bg-slate-950/80 text-white font-bold border-b border-slate-800">
                        <tr>
                            <th class="py-3 px-4">Polimer / Tipe</th>
                            <th class="py-3 px-4">Rentang Suhu (°C)</th>
                            <th class="py-3 px-4">Ketahanan Minyak / Oli</th>
                            <th class="py-3 px-4">Ketahanan Ozon & Cuaca</th>
                            <th class="py-3 px-4">Ketahanan Abrasi</th>
                            <th class="py-3 px-4">Aplikasi Utama</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-800">
                        <tr class="hover:bg-slate-800/30">
                            <td class="py-3 px-4 font-bold text-red-400">NBR (Nitrile)</td>
                            <td class="py-3 px-4">-30 s/d +120</td>
                            <td class="py-3 px-4 text-emerald-400 font-bold">Sangat Baik (A+)</td>
                            <td class="py-3 px-4 text-slate-400">Sedang</td>
                            <td class="py-3 px-4 text-slate-200">Baik</td>
                            <td class="py-3 px-4">Rubber seals mesin, cincin seal flensa hidrolik, gasket pipa</td>
                        </tr>
                        <tr class="hover:bg-slate-800/30">
                            <td class="py-3 px-4 font-bold text-sky-400">EPDM</td>
                            <td class="py-3 px-4">-40 s/d +140</td>
                            <td class="py-3 px-4 text-rose-400">Kurang Disarankan</td>
                            <td class="py-3 px-4 text-emerald-400 font-bold">Luar Biasa (A+)</td>
                            <td class="py-3 px-4 text-slate-200">Baik</td>
                            <td class="py-3 px-4">Plug rubber industri, stopper kedap udara &amp; air, seal outdoor</td>
                        </tr>
                        <tr class="hover:bg-slate-800/30">
                            <td class="py-3 px-4 font-bold text-amber-400">Silicone (VMQ)</td>
                            <td class="py-3 px-4">-60 s/d +250</td>
                            <td class="py-3 px-4 text-slate-400">Sedang</td>
                            <td class="py-3 px-4 text-emerald-400 font-bold">Luar Biasa</td>
                            <td class="py-3 px-4 text-rose-400">Rendah</td>
                            <td class="py-3 px-4">Seal kontak suhu tinggi, gasket oven, komponen karet higienis</td>
                        </tr>
                        <tr class="hover:bg-slate-800/30">
                            <td class="py-3 px-4 font-bold text-violet-400">SBR / Neoprene (CR)</td>
                            <td class="py-3 px-4">-35 s/d +110</td>
                            <td class="py-3 px-4 text-slate-200">Baik</td>
                            <td class="py-3 px-4 text-emerald-400 font-semibold">Sangat Baik</td>
                            <td class="py-3 px-4 text-slate-200">Sangat Baik</td>
                            <td class="py-3 px-4">Mudguard truk armada niaga, peredam getaran, cover stir</td>
                        </tr>
                        <tr class="hover:bg-slate-800/30">
                            <td class="py-3 px-4 font-bold text-emerald-400">Natural Rubber (NR)</td>
                            <td class="py-3 px-4">-40 s/d +80</td>
                            <td class="py-3 px-4 text-rose-400">Kurang Baik</td>
                            <td class="py-3 px-4 text-slate-400">Sedang</td>
                            <td class="py-3 px-4 text-emerald-400 font-bold">Tertinggi (A++)</td>
                            <td class="py-3 px-4">Sol sepatu karet (outsole sneakers), mudguard, cover stir mobil</td>
                        </tr>
                        <tr class="hover:bg-slate-800/30">
                            <td class="py-3 px-4 font-bold text-rose-400">Viton® (FKM)</td>
                            <td class="py-3 px-4">-20 s/d +220</td>
                            <td class="py-3 px-4 text-emerald-400 font-bold">Maksimal (A++)</td>
                            <td class="py-3 px-4 text-emerald-400 font-bold">Maksimal (A++)</td>
                            <td class="py-3 px-4 text-slate-200">Baik</td>
                            <td class="py-3 px-4">Kimia agresif asam pekat, petrokimia suhu tinggi</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- CTA Box -->
        <div class="p-8 rounded-3xl bg-slate-900 border border-slate-800 text-center max-w-3xl mx-auto">
            <h3 class="text-xl font-bold text-white mb-2">Butuh Rekomendasi Khusus Sesuai Kondisi Operasional?</h3>
            <p class="text-slate-400 text-xs mb-6">
                Kirimkan sampel fluida kimia, rentang temperatur, dan tekanan kerja mesin Anda. Tim chemical engineer PT Duta Mitra Luhur siap meracik kompon khusus untuk Anda.
            </p>
            <a href="{{ route('inquiry.create') }}" class="px-6 py-3 text-xs font-bold text-white bg-red-600 hover:bg-red-500 rounded-xl shadow-lg shadow-red-600/30">
                Konsultasikan Formula Kompon (RFQ)
            </a>
        </div>

    </div>
</div>
@endsection

