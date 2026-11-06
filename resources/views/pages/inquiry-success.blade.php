@extends('layouts.app')

@section('title', 'Inquiry Berhasil Disimpan - ' . $inquiry->inquiry_number . ' | PT Duta Mitra Luhur')

@section('content')
<div class="py-16 bg-[#0b0f19] min-h-[75vh] flex items-center justify-center">
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        
        <!-- Success Badge & Icon -->
        <div class="w-20 h-20 bg-emerald-500/20 text-emerald-400 border border-emerald-500/30 rounded-3xl flex items-center justify-center mx-auto mb-6 shadow-xl shadow-emerald-500/10">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
            </svg>
        </div>

        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-md bg-emerald-950/60 border border-emerald-500/40 text-xs font-bold text-emerald-400 mb-3">
            <span>Status: {{ $inquiry->status }}</span>
        </div>

        <h1 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight mb-2">
            Permintaan Penawaran Berhasil Diterbitkan!
        </h1>

        <p class="text-slate-300 text-sm mb-6">
            Inquiry Anda telah tersimpan di sistem <strong class="text-white">PT Duta Mitra Luhur</strong>. Nomor referensi resmi Anda:
        </p>

        <!-- Ticket / Inquiry Number Badge (PBI 10) -->
        <div class="inline-block bg-slate-900 border border-slate-700/80 rounded-2xl px-6 py-3 mb-8 shadow-inner">
            <span class="text-xs text-slate-400 uppercase tracking-widest block font-bold">Nomor Inquiry Resmi</span>
            <span class="text-2xl sm:text-3xl font-black text-rose-400 font-mono tracking-wider">{{ $inquiry->inquiry_number }}</span>
        </div>

        <!-- WhatsApp Automatic Redirect Card (PBI 11) -->
        <div class="bg-slate-900/90 border border-slate-800 rounded-2xl p-6 sm:p-8 mb-8 text-left backdrop-blur-md shadow-2xl">
            <div class="flex items-center justify-between border-b border-slate-800 pb-4 mb-4">
                <div class="flex items-center gap-2">
                    <span class="w-3 h-3 rounded-full bg-emerald-500 animate-pulse"></span>
                    <h3 class="text-base font-bold text-white">Pengalihan Otomatis ke WhatsApp</h3>
                </div>
                <span id="countdown" class="text-xs font-bold text-emerald-400 bg-emerald-950/60 px-2.5 py-1 rounded border border-emerald-500/30">
                    Membuka WhatsApp dalam <span id="countdownTimer">3</span> dtk...
                </span>
            </div>

            <!-- Summary List -->
            <div class="space-y-2 text-xs text-slate-300 mb-6">
                <div class="flex justify-between py-1 border-b border-slate-800/60">
                    <span class="text-slate-400">Pemohon:</span>
                    <span class="font-bold text-white">{{ $inquiry->name }} {{ $inquiry->company ? "({$inquiry->company})" : '' }}</span>
                </div>
                <div class="flex justify-between py-1 border-b border-slate-800/60">
                    <span class="text-slate-400">Produk Karet:</span>
                    <span class="font-bold text-white">{{ $inquiry->product_name }}</span>
                </div>
                <div class="flex justify-between py-1 border-b border-slate-800/60">
                    <span class="text-slate-400">Varian / Kompon:</span>
                    <span class="font-bold text-white">{{ $inquiry->variant ?? 'Standar Pabrik' }}</span>
                </div>
                <div class="flex justify-between py-1 border-b border-slate-800/60">
                    <span class="text-slate-400">Dimensi & Jumlah:</span>
                    <span class="font-bold text-white">{{ $inquiry->size }} ({{ $inquiry->quantity }} {{ $inquiry->unit }})</span>
                </div>
            </div>

            <!-- WhatsApp Direct Action Button (PBI 11) -->
            <a id="waButton" href="{{ $inquiry->whatsapp_url }}" target="_blank" rel="noopener noreferrer" class="w-full py-3.5 px-6 rounded-xl bg-gradient-to-r from-emerald-600 to-green-600 hover:from-emerald-500 hover:to-green-500 text-white font-bold text-sm flex items-center justify-center gap-2 shadow-xl shadow-emerald-900/40 transition-all">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12.031 2C6.5 2 2 6.5 2 12.031c0 1.953.563 3.781 1.547 5.344L2.094 22l4.781-1.422a10.02 10.02 0 005.156 1.453h.016c5.531 0 10.031-4.5 10.031-10.031C22.078 6.5 17.562 2 12.031 2zm0 18.375h-.016a8.318 8.318 0 01-4.25-1.156l-.312-.187-3.156.938.953-3.078-.203-.328A8.344 8.344 0 013.687 12.03c0-4.609 3.75-8.359 8.344-8.359 4.594 0 8.344 3.75 8.344 8.359 0 4.61-3.75 8.345-8.344 8.345zm4.563-6.25c-.25-.125-1.469-.734-1.703-.812-.234-.094-.406-.14-.578.125-.172.25-.672.828-.828.984-.14.156-.312.188-.562.063-.25-.125-1.062-.391-2.016-1.25-.75-.672-1.25-1.5-1.39-1.75-.14-.25 0-.39.125-.516.11-.11.25-.28.375-.42.125-.14.172-.25.25-.42.078-.172.047-.329-.016-.454-.062-.125-.578-1.39-.797-1.906-.218-.5-.437-.437-.593-.437h-.516c-.172 0-.453.062-.687.312-.234.25-.906.89-.906 2.156s.922 2.5 1.047 2.656c.125.156 1.828 2.812 4.437 3.937.625.266 1.11.422 1.485.547.625.203 1.203.172 1.656.11.5-.078 1.469-.61 1.672-1.203.203-.594.203-1.094.14-1.203-.062-.11-.234-.172-.484-.297z"/>
                </svg>
                <span>Buka WhatsApp Sekarang (Pesan Otomatis Siap Kirim)</span>
            </a>
        </div>

        <div class="flex items-center justify-center gap-4 text-xs text-slate-400">
            <a href="{{ route('home') }}" class="hover:text-white transition-colors">← Kembali ke Beranda</a>
            <span>•</span>
            <a href="{{ route('catalog.index') }}" class="hover:text-white transition-colors">Jelajahi Produk Lain</a>
        </div>

    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        let count = 3;
        const countdownTimer = document.getElementById('countdownTimer');
        const waUrl = "{{ $inquiry->whatsapp_url }}";

        const interval = setInterval(() => {
            count--;
            if (countdownTimer) {
                countdownTimer.innerText = count;
            }
            if (count <= 0) {
                clearInterval(interval);
                // Open WhatsApp tab automatically
                window.location.href = waUrl;
            }
        }, 1000);
    });
</script>
@endsection

