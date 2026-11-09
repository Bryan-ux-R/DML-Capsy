<!DOCTYPE html>
<html lang="id" class="dark scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'PT Duta Mitra Luhur - Industrial Rubber Solutions')</title>
    <meta name="description" content="@yield('meta_description', 'PT Duta Mitra Luhur (Duta Rubber) adalah produsen manufaktur produk karet: rubber soles (sol sepatu), seals, plug rubber, mudguard, cover stir mobil, dan custom molded rubber.')">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #0b0f19;
            color: #f1f5f9;
        }
        .hero-glow {
            background: radial-gradient(circle at 50% 30%, rgba(225, 29, 72, 0.15) 0%, rgba(11, 15, 25, 0) 70%);
        }
        .card-glow:hover {
            box-shadow: 0 0 25px -5px rgba(239, 68, 68, 0.25);
            border-color: rgba(239, 68, 68, 0.5);
        }
    </style>
</head>
<body class="min-h-screen flex flex-col antialiased selection:bg-red-600 selection:text-white">

    <!-- TOP ANNOUNCEMENT BAR (Optional B2B Info) -->
    <div class="bg-gradient-to-r from-red-950/60 via-slate-900 to-red-950/60 border-b border-red-500/20 text-xs text-slate-300 py-1.5 px-4 text-center">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <span class="hidden md:inline text-slate-400">Pabrik & Manufaktur Produk Karet Industri • Sentra Bitung Tangerang Banten</span>
            <div class="flex items-center gap-4 mx-auto md:mx-0">
                <span class="inline-flex items-center gap-1.5 text-emerald-400 font-medium">
                    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                    Layanan B2B & RFQ Terbuka
                </span>
                <span class="text-slate-500">|</span>
                <a href="tel:02129514148" class="hover:text-red-400 transition-colors">Telp: (021) 2951-4148 / 0895-0182-3280</a>
            </div>
        </div>
    </div>

    <!-- MAIN NAVBAR (PBI 04, PBI 08) -->
    <header class="sticky top-0 z-50 bg-[#0b0f19]/90 backdrop-blur-md border-b border-slate-800/80 transition-all">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                
                <!-- BRAND LOGO (LANDSCAPE MODEL) -->
                <a href="{{ route('home') }}" class="flex items-center gap-3 group shrink-0 py-1 relative -left-3 sm:-left-6 lg:-left-10 xl:-left-14 transition-transform">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-red-600 to-rose-700 flex items-center justify-center text-white shadow-lg shadow-red-600/30 ring-1 ring-red-400/40 group-hover:scale-105 transition-transform shrink-0">
                        <!-- Gear / Industrial icon -->
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <div class="flex items-center gap-2 sm:gap-2.5 whitespace-nowrap">
                        <span class="text-lg sm:text-xl font-black tracking-wider text-white">
                            DUTA RUBBER
                        </span>
                        <span class="h-4 w-px bg-slate-700"></span>
                        <span class="text-[11px] sm:text-xs font-bold text-slate-400 tracking-wider uppercase">
                            PT DUTA MITRA LUHUR
                        </span>
                    </div>
                </a>

                <!-- DESKTOP NAVIGATION LINKS -->
                <nav class="hidden lg:flex items-center gap-1 xl:gap-2">
                    <a href="{{ route('home') }}" class="px-3.5 py-2 text-sm font-medium rounded-lg transition-colors {{ request()->routeIs('home') ? 'text-white bg-slate-800/80 shadow-sm' : 'text-slate-300 hover:text-white hover:bg-slate-800/40' }}">
                        Beranda
                    </a>
                    <a href="{{ route('catalog.index') }}" class="px-3.5 py-2 text-sm font-medium rounded-lg transition-colors {{ request()->routeIs('catalog.*') ? 'text-white bg-slate-800/80 shadow-sm' : 'text-slate-300 hover:text-white hover:bg-slate-800/40' }}">
                        Katalog Produk
                    </a>
                    <a href="{{ route('specs') }}" class="px-3.5 py-2 text-sm font-medium rounded-lg transition-colors {{ request()->routeIs('specs') ? 'text-white bg-slate-800/80 shadow-sm' : 'text-slate-300 hover:text-white hover:bg-slate-800/40' }}">
                        Spesifikasi Teknis
                    </a>
                    <a href="{{ route('about') }}" class="px-3.5 py-2 text-sm font-medium rounded-lg transition-colors {{ request()->routeIs('about') ? 'text-white bg-slate-800/80 shadow-sm' : 'text-slate-300 hover:text-white hover:bg-slate-800/40' }}">
                        Tentang Pabrik
                    </a>
                    <a href="{{ route('contact') }}" class="px-3.5 py-2 text-sm font-medium rounded-lg transition-colors {{ request()->routeIs('contact') ? 'text-white bg-slate-800/80 shadow-sm' : 'text-slate-300 hover:text-white hover:bg-slate-800/40' }}">
                        Kontak & Penawaran
                    </a>
                </nav>

                <!-- RIGHT ACTION BUTTONS -->
                <div class="hidden md:flex items-center gap-3">
                    <!-- Unduh Katalog PDF button -->
                    <a href="#katalog-pdf" onclick="alert('Brosur PDF Duta Rubber PT Duta Mitra Luhur siap diunduh. Silakan hubungi sales kami untuk katalog teknis terlengkap 2026!');" class="inline-flex items-center gap-1.5 px-3 py-1.5 text-xs font-semibold text-slate-300 bg-slate-800/80 hover:bg-slate-700/80 border border-slate-700 rounded-lg transition-all hover:text-white">
                        <svg class="w-4 h-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <span>Unduh Katalog (PDF)</span>
                    </a>

                    <!-- Masuk (Member/Guest) -->
                    <a href="{{ route('about') }}" class="px-3 py-1.5 text-xs font-semibold text-slate-300 hover:text-white transition-colors">
                        Profil
                    </a>

                    <!-- Minta Penawaran B2B (Red Button CTA as in Image 1) -->
                    <a href="{{ route('inquiry.create') }}" class="inline-flex items-center gap-2 px-4 py-2 text-sm font-bold text-white bg-gradient-to-r from-red-600 to-rose-600 hover:from-red-500 hover:to-rose-500 rounded-xl shadow-lg shadow-red-600/30 hover:shadow-red-600/50 transition-all transform hover:-translate-y-0.5 border border-red-400/40">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <span>Minta Penawaran B2B</span>
                    </a>
                </div>

                <!-- MOBILE HAMBURGER BUTTON (PBI 08) -->
                <div class="flex items-center gap-2 lg:hidden">
                    <a href="{{ route('inquiry.create') }}" class="px-2.5 py-1.5 text-xs font-bold text-white bg-red-600 rounded-lg">
                        RFQ
                    </a>
                    <button id="mobileMenuBtn" type="button" class="p-2 text-slate-400 hover:text-white hover:bg-slate-800 rounded-lg focus:outline-none" aria-label="Buka Menu Navigasi">
                        <svg id="menuOpenIcon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        <svg id="menuCloseIcon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- MOBILE MENU DRAWER -->
        <div id="mobileMenu" class="hidden lg:hidden border-b border-slate-800 bg-[#0f1422] px-4 pt-3 pb-6 space-y-2">
            <a href="{{ route('home') }}" class="block px-3 py-2 rounded-lg text-base font-medium {{ request()->routeIs('home') ? 'bg-red-600 text-white' : 'text-slate-300 hover:bg-slate-800' }}">
                Beranda
            </a>
            <a href="{{ route('catalog.index') }}" class="block px-3 py-2 rounded-lg text-base font-medium {{ request()->routeIs('catalog.*') ? 'bg-red-600 text-white' : 'text-slate-300 hover:bg-slate-800' }}">
                Katalog Produk
            </a>
            <a href="{{ route('specs') }}" class="block px-3 py-2 rounded-lg text-base font-medium {{ request()->routeIs('specs') ? 'bg-red-600 text-white' : 'text-slate-300 hover:bg-slate-800' }}">
                Spesifikasi Teknis
            </a>
            <a href="{{ route('about') }}" class="block px-3 py-2 rounded-lg text-base font-medium {{ request()->routeIs('about') ? 'bg-red-600 text-white' : 'text-slate-300 hover:bg-slate-800' }}">
                Tentang Pabrik
            </a>
            <a href="{{ route('contact') }}" class="block px-3 py-2 rounded-lg text-base font-medium {{ request()->routeIs('contact') ? 'bg-red-600 text-white' : 'text-slate-300 hover:bg-slate-800' }}">
                Kontak & Penawaran
            </a>
            <div class="pt-4 border-t border-slate-800 flex flex-col gap-2">
                <a href="{{ route('inquiry.create') }}" class="w-full text-center py-2.5 px-4 text-sm font-bold text-white bg-red-600 hover:bg-red-500 rounded-xl shadow-lg">
                    Form Tanya Ketersediaan & RFQ
                </a>
            </div>
        </div>
    </header>

    <!-- FLASH MESSAGES -->
    @if(session('success'))
        <div class="bg-emerald-950/80 border-b border-emerald-500/40 text-emerald-200 px-4 py-3 text-sm text-center">
            <div class="max-w-4xl mx-auto flex items-center justify-center gap-2">
                <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span>{{ session('success') }}</span>
            </div>
        </div>
    @endif

    <!-- MAIN BODY CONTENT -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- FLOATING WHATSAPP CTA (PBI 07, PBI 11) -->
    <aside aria-label="Kontak Cepat WhatsApp" class="fixed bottom-6 right-6 z-40 flex items-center gap-3 group">
        <div class="hidden sm:block bg-slate-900/90 backdrop-blur-md border border-slate-700/80 text-white text-xs px-3.5 py-2 rounded-xl shadow-xl shadow-black/40 group-hover:block transition-all">
            <p class="font-bold text-red-400">Butuh Respon Cepat?</p>
            <p class="text-slate-300">Tanya ketersediaan produk via WhatsApp</p>
        </div>
        <a href="https://wa.me/6289501823280?text=Halo%20Sales%20PT%20Duta%20Mitra%20Luhur%20(Duta%20Rubber),%20saya%20ingin%20tanya%20ketersediaan%20produk%20karet%20industri." target="_blank" rel="noopener noreferrer" class="relative w-14 h-14 bg-gradient-to-br from-emerald-500 to-green-600 hover:from-emerald-400 hover:to-green-500 text-white rounded-full flex items-center justify-center shadow-xl shadow-emerald-900/50 hover:scale-110 transition-transform ring-4 ring-emerald-500/20" title="Chat WhatsApp Tim Sales">
            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12.031 2C6.5 2 2 6.5 2 12.031c0 1.953.563 3.781 1.547 5.344L2.094 22l4.781-1.422a10.02 10.02 0 005.156 1.453h.016c5.531 0 10.031-4.5 10.031-10.031C22.078 6.5 17.562 2 12.031 2zm0 18.375h-.016a8.318 8.318 0 01-4.25-1.156l-.312-.187-3.156.938.953-3.078-.203-.328A8.344 8.344 0 013.687 12.03c0-4.609 3.75-8.359 8.344-8.359 4.594 0 8.344 3.75 8.344 8.359 0 4.61-3.75 8.345-8.344 8.345zm4.563-6.25c-.25-.125-1.469-.734-1.703-.812-.234-.094-.406-.14-.578.125-.172.25-.672.828-.828.984-.14.156-.312.188-.562.063-.25-.125-1.062-.391-2.016-1.25-.75-.672-1.25-1.5-1.39-1.75-.14-.25 0-.39.125-.516.11-.11.25-.28.375-.42.125-.14.172-.25.25-.42.078-.172.047-.329-.016-.454-.062-.125-.578-1.39-.797-1.906-.218-.5-.437-.437-.593-.437h-.516c-.172 0-.453.062-.687.312-.234.25-.906.89-.906 2.156s.922 2.5 1.047 2.656c.125.156 1.828 2.812 4.437 3.937.625.266 1.11.422 1.485.547.625.203 1.203.172 1.656.11.5-.078 1.469-.61 1.672-1.203.203-.594.203-1.094.14-1.203-.062-.11-.234-.172-.484-.297z"/>
            </svg>
            <span class="absolute top-0 right-0 w-3.5 h-3.5 bg-red-500 rounded-full border-2 border-[#0b0f19]"></span>
        </a>
    </aside>

    <!-- FOOTER (PBI 04) -->
    <footer class="bg-[#070a11] border-t border-slate-800/80 text-slate-400 text-sm mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10">
                
                <!-- Company Info -->
                <div class="lg:col-span-2 space-y-4">
                    <div class="flex items-center gap-3 whitespace-nowrap">
                        <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-red-600 to-rose-700 flex items-center justify-center text-white font-bold shrink-0 shadow-md shadow-red-600/30">
                            DR
                        </div>
                        <div class="flex items-center gap-2.5">
                            <span class="text-white font-black text-lg tracking-wide">DUTA RUBBER</span>
                            <span class="h-4 w-px bg-slate-700"></span>
                            <span class="text-xs text-slate-400 font-bold uppercase tracking-wider">PT DUTA MITRA LUHUR</span>
                        </div>
                    </div>
                    <p class="text-slate-400 text-sm leading-relaxed">
                        Perusahaan manufaktur spesialis produk karet berkualitas di Indonesia. Kami memproduksi rubber soles (sol sepatu karet), industrial rubber seals, plug rubber, mudguard truk, cover stir mobil, dan custom molded rubber dengan standar mutu ramah lingkungan.
                    </p>
                    <div class="flex items-center gap-3 pt-2">
                        <span class="inline-flex items-center px-2.5 py-1 rounded text-xs font-bold bg-slate-800 text-slate-200 border border-slate-700">SNI TERVALIDASI</span>
                        <span class="inline-flex items-center px-2.5 py-1 rounded text-xs font-bold bg-slate-800 text-slate-200 border border-slate-700">ISO 9001:2015</span>
                        <span class="inline-flex items-center px-2.5 py-1 rounded text-xs font-bold bg-slate-800 text-slate-200 border border-slate-700">ASTM D2000</span>
                    </div>
                </div>

                <!-- Navigation Links -->
                <div>
                    <h3 class="text-white font-bold text-sm tracking-wider uppercase mb-4">Navigasi Utama</h3>
                    <ul class="space-y-2.5 text-sm">
                        <li><a href="{{ route('home') }}" class="hover:text-white transition-colors">Beranda Perusahaan</a></li>
                        <li><a href="{{ route('catalog.index') }}" class="hover:text-white transition-colors">Katalog Karet Industri</a></li>
                        <li><a href="{{ route('specs') }}" class="hover:text-white transition-colors">Spesifikasi Kompon</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-white transition-colors">Fasilitas Pabrik & Lab</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-white transition-colors">Kontak & Alamat Pabrik</a></li>
                    </ul>
                </div>

                <!-- Products Category Links -->
                <div>
                    <h3 class="text-white font-bold text-sm tracking-wider uppercase mb-4">Lini Produk</h3>
                    <ul class="space-y-2.5 text-sm">
                        <li><a href="{{ route('catalog.index', ['kategori' => 'rubber-soles']) }}" class="hover:text-white transition-colors">Rubber Soles (Sol Sepatu)</a></li>
                        <li><a href="{{ route('catalog.index', ['kategori' => 'rubber-seals']) }}" class="hover:text-white transition-colors">Rubber Seals (Cincin & Seal)</a></li>
                        <li><a href="{{ route('catalog.index', ['kategori' => 'plug-rubber']) }}" class="hover:text-white transition-colors">Plug Rubber & Stopper</a></li>
                        <li><a href="{{ route('catalog.index', ['kategori' => 'mudguard-rubber']) }}" class="hover:text-white transition-colors">Mudguard Karet Truk</a></li>
                        <li><a href="{{ route('catalog.index', ['kategori' => 'cover-stir-mobil']) }}" class="hover:text-white transition-colors">Cover Stir Mobil</a></li>
                        <li><a href="{{ route('catalog.index', ['kategori' => 'custom-molded-rubber']) }}" class="hover:text-white transition-colors">Custom Molded Rubber</a></li>
                    </ul>
                </div>

                <!-- Contact & B2B Inquiry -->
                <div class="space-y-3">
                    <h3 class="text-white font-bold text-sm tracking-wider uppercase mb-4">Pusat Pabrik & B2B</h3>
                    <p class="text-xs text-slate-400">Tim sales engineering kami siap membantu spesifikasi teknik, estimasi kebutuhan, dan tender pengadaan.</p>
                    <div class="space-y-2 text-xs">
                        <div class="flex items-start gap-2 text-slate-300">
                            <span class="text-red-400">📍</span>
                            <span>Kawasan Industri & Pergudangan Sentra Bitung C7, Jl. Baitussaadah RT 01/03, Kadu, Curug, Tangerang, Banten</span>
                        </div>
                        <div class="flex items-center gap-2 text-slate-300">
                            <span class="text-red-400">📞</span>
                            <span>Telp: (021) 2951-4148 &nbsp;|&nbsp; Fax: (021) 2951-4149</span>
                        </div>
                        <div class="flex items-center gap-2 text-slate-300">
                            <span class="text-red-400">✉️</span>
                            <span>duta_mitraluhur@yahoo.co.id</span>
                        </div>
                    </div>
                    <div class="pt-2">
                        <a href="{{ route('inquiry.create') }}" class="inline-block w-full text-center px-4 py-2 text-xs font-bold text-white bg-red-600 hover:bg-red-500 rounded-lg transition-colors">
                            Kirim Form Inquiry Online
                        </a>
                    </div>
                </div>

            </div>

            <!-- Bottom Copyright -->
            <div class="mt-12 pt-8 border-t border-slate-800/80 flex flex-col md:flex-row items-center justify-between gap-4 text-xs text-slate-500">
                <p>&copy; {{ date('Y') }} PT Duta Mitra Luhur (Duta Rubber). Seluruh hak cipta dilindungi undang-undang.</p>
                <div class="flex items-center gap-6">
                    <a href="{{ route('about') }}" class="hover:text-slate-400">Kebijakan Mutu & K3</a>
                    <a href="{{ route('specs') }}" class="hover:text-slate-400">Toleransi Ukuran DIN ISO</a>
                    <a href="{{ route('contact') }}" class="hover:text-slate-400">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT FOR MOBILE MENU & INTERACTIONS -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const btn = document.getElementById('mobileMenuBtn');
            const menu = document.getElementById('mobileMenu');
            const openIcon = document.getElementById('menuOpenIcon');
            const closeIcon = document.getElementById('menuCloseIcon');

            if (btn && menu) {
                btn.addEventListener('click', () => {
                    const isHidden = menu.classList.contains('hidden');
                    if (isHidden) {
                        menu.classList.remove('hidden');
                        openIcon.classList.add('hidden');
                        closeIcon.classList.remove('hidden');
                    } else {
                        menu.classList.add('hidden');
                        openIcon.classList.remove('hidden');
                        closeIcon.classList.add('hidden');
                    }
                });
            }
        });
    </script>
</body>
</html>

