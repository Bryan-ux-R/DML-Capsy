@extends('layouts.app')

@section('title', 'Form Tanya Ketersediaan Produk & Pengajuan RFQ - PT Duta Mitra Luhur')
@section('meta_description', 'Formulir online tanya ketersediaan stok, spesifikasi ukuran dan penawaran harga resmi (RFQ) PT Duta Mitra Luhur.')

@section('content')
<div class="py-12 bg-[#0b0f19]">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Breadcrumbs -->
        <nav class="flex items-center gap-2 text-xs text-slate-400 mb-6">
            <a href="{{ route('home') }}" class="hover:text-white transition-colors">Beranda</a>
            <span>/</span>
            <span class="text-red-400 font-semibold">Tanya Ketersediaan & RFQ</span>
        </nav>

        <!-- Header -->
        <div class="mb-10 text-center">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-md bg-red-950/60 border border-red-500/30 text-xs font-semibold text-red-400 uppercase tracking-wider mb-3">
                Layanan Tender & RFQ Resmi B2B
            </div>
            <h1 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                Formulir Tanya Ketersediaan &amp; Penawaran
            </h1>
            <p class="text-slate-400 text-sm mt-2 max-w-xl mx-auto">
                Isi rincian kebutuhan material karet industri Anda. Sistem akan menerbitkan <strong class="text-white">Nomor Inquiry Resmi</strong> dan mengarahkan Anda ke WhatsApp tim sales PT Duta Mitra Luhur.
            </p>
        </div>

        <!-- Notification / Error Alerts -->
        @if ($errors->any())
            <div class="mb-8 p-4 rounded-2xl bg-red-950/80 border border-red-500/60 text-red-200 text-sm">
                <div class="font-bold flex items-center gap-2 mb-2">
                    <svg class="w-5 h-5 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                    </svg>
                    <span>Mohon lengkapi dan periksa kembali isian formulir:</span>
                </div>
                <ul class="list-disc list-inside space-y-1 text-xs text-red-300">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form Card (PBI 09, PBI 10) -->
        <div class="bg-slate-900/80 border border-slate-800 rounded-3xl p-6 sm:p-10 backdrop-blur-md shadow-2xl relative">
            
            <form action="{{ route('inquiry.store') }}" method="POST" class="space-y-6">
                @csrf

                <!-- Section: Data Pemohon -->
                <div>
                    <h3 class="text-base font-bold text-white mb-4 pb-2 border-b border-slate-800 flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-red-500"></span>
                        <span>1. Data Pemohon / Kontak PIC</span>
                    </h3>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <!-- Nama Pemohon -->
                        <div>
                            <label for="name" class="block text-xs font-semibold text-slate-300 mb-1.5">
                                Nama Lengkap / PIC <span class="text-red-500">*</span>
                            </label>
                            <input type="text" 
                                   id="name" 
                                   name="name" 
                                   value="{{ old('name') }}" 
                                   required 
                                   placeholder="Contoh: Budi Santoso"
                                   class="w-full bg-slate-950/80 border @error('name') border-red-500 @else border-slate-700 @enderror rounded-xl px-4 py-2.5 text-sm text-white placeholder-slate-500 focus:outline-none focus:border-red-500 transition-colors">
                        </div>

                        <!-- Perusahaan / Pabrik -->
                        <div>
                            <label for="company" class="block text-xs font-semibold text-slate-300 mb-1.5">
                                Nama Perusahaan / Pabrik <span class="text-slate-500">(Opsional B2B)</span>
                            </label>
                            <input type="text" 
                                   id="company" 
                                   name="company" 
                                   value="{{ old('company') }}" 
                                   placeholder="Contoh: PT Sumber Makmur Mineral"
                                   class="w-full bg-slate-950/80 border border-slate-700 rounded-xl px-4 py-2.5 text-sm text-white placeholder-slate-500 focus:outline-none focus:border-red-500 transition-colors">
                        </div>

                        <!-- Kontak WhatsApp / Telp -->
                        <div>
                            <label for="phone" class="block text-xs font-semibold text-slate-300 mb-1.5">
                                Nomor WhatsApp / Telepon <span class="text-red-500">*</span>
                            </label>
                            <input type="tel" 
                                   id="phone" 
                                   name="phone" 
                                   value="{{ old('phone') }}" 
                                   required 
                                   placeholder="Contoh: 089501823280"
                                   class="w-full bg-slate-950/80 border @error('phone') border-red-500 @else border-slate-700 @enderror rounded-xl px-4 py-2.5 text-sm text-white placeholder-slate-500 focus:outline-none focus:border-red-500 transition-colors">
                            <span class="text-[11px] text-slate-400 mt-1 block">Nomor aktif untuk pengiriman surat penawaran & konfirmasi ketersediaan stok.</span>
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-xs font-semibold text-slate-300 mb-1.5">
                                Email Resmi <span class="text-slate-500">(Opsional untuk PDF RFQ)</span>
                            </label>
                            <input type="email" 
                                   id="email" 
                                   name="email" 
                                   value="{{ old('email') }}" 
                                   placeholder="budi@perusahaan.co.id"
                                   class="w-full bg-slate-950/80 border @error('email') border-red-500 @else border-slate-700 @enderror rounded-xl px-4 py-2.5 text-sm text-white placeholder-slate-500 focus:outline-none focus:border-red-500 transition-colors">
                        </div>
                    </div>
                </div>

                <!-- Section: Rincian Kebutuhan Produk (PBI 09) -->
                <div class="pt-4">
                    <h3 class="text-base font-bold text-white mb-4 pb-2 border-b border-slate-800 flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-red-500"></span>
                        <span>2. Rincian Spesifikasi Produk Karet</span>
                    </h3>

                    <div class="space-y-4">
                        
                        <!-- Pilihan Produk -->
                        <div>
                            <label for="product_select" class="block text-xs font-semibold text-slate-300 mb-1.5">
                                Pilihan Produk <span class="text-red-500">*</span>
                            </label>
                            
                            <select id="product_select" 
                                    onchange="handleProductSelect(this)" 
                                    class="w-full bg-slate-950/80 border border-slate-700 rounded-xl px-4 py-2.5 text-sm text-white focus:outline-none focus:border-red-500 transition-colors">
                                <option value="">-- Pilih dari Katalog atau Tulis Kustom di Bawah --</option>
                                @foreach($products as $p)
                                    <option value="{{ $p->name }}" 
                                            data-id="{{ $p->id }}" 
                                            {{ (old('product_id') == $p->id || (isset($selectedProduct) && $selectedProduct->id == $p->id)) ? 'selected' : '' }}>
                                        {{ $p->name }}
                                    </option>
                                @endforeach
                                <option value="custom" {{ old('product_name') && !old('product_id') ? 'selected' : '' }}>Produk Custom / Cetakan Khusus (Tulis Manual)</option>
                            </select>

                            <input type="hidden" id="product_id" name="product_id" value="{{ old('product_id', $selectedProduct->id ?? '') }}">

                            <div class="mt-2">
                                <input type="text" 
                                       id="product_name" 
                                       name="product_name" 
                                       value="{{ old('product_name', $selectedProduct->name ?? '') }}" 
                                       required
                                       placeholder="Nama Produk Karet yang Dicari..."
                                       class="w-full bg-slate-950/80 border @error('product_name') border-red-500 @else border-slate-700 @enderror rounded-xl px-4 py-2.5 text-sm text-white placeholder-slate-500 focus:outline-none focus:border-red-500 transition-colors">
                            </div>
                        </div>

                        <!-- Varian / Grade Material & Ukuran / Dimensi -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            
                            <!-- Varian / Tipe Material -->
                            <div>
                                <label for="variant" class="block text-xs font-semibold text-slate-300 mb-1.5">
                                    Varian / Material Kompon
                                </label>
                                <input type="text" 
                                       id="variant" 
                                       name="variant" 
                                       value="{{ old('variant', request('variant')) }}" 
                                       placeholder="Contoh: NBR 65 Shore A / Food Grade Silicone"
                                       class="w-full bg-slate-950/80 border border-slate-700 rounded-xl px-4 py-2.5 text-sm text-white placeholder-slate-500 focus:outline-none focus:border-red-500 transition-colors">
                            </div>

                            <!-- Ukuran / Dimensi -->
                            <div>
                                <label for="size" class="block text-xs font-semibold text-slate-300 mb-1.5">
                                    Ukuran / Dimensi Kebutuhan <span class="text-red-500">*</span>
                                </label>
                                <input type="text" 
                                       id="size" 
                                       name="size" 
                                       value="{{ old('size') }}" 
                                       required 
                                       placeholder="Contoh: Tebal 3mm x 1200mm x 10m atau DN100 PN16"
                                       class="w-full bg-slate-950/80 border @error('size') border-red-500 @else border-slate-700 @enderror rounded-xl px-4 py-2.5 text-sm text-white placeholder-slate-500 focus:outline-none focus:border-red-500 transition-colors">
                            </div>

                        </div>

                        <!-- Jumlah & Satuan -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            
                            <!-- Jumlah -->
                            <div>
                                <label for="quantity" class="block text-xs font-semibold text-slate-300 mb-1.5">
                                    Jumlah Kebutuhan <span class="text-red-500">*</span>
                                </label>
                                <input type="number" 
                                       id="quantity" 
                                       name="quantity" 
                                       value="{{ old('quantity', 1) }}" 
                                       min="1" 
                                       required 
                                       class="w-full bg-slate-950/80 border @error('quantity') border-red-500 @else border-slate-700 @enderror rounded-xl px-4 py-2.5 text-sm text-white focus:outline-none focus:border-red-500 transition-colors">
                            </div>

                            <!-- Satuan -->
                            <div>
                                <label for="unit" class="block text-xs font-semibold text-slate-300 mb-1.5">
                                    Satuan <span class="text-red-500">*</span>
                                </label>
                                <select id="unit" name="unit" class="w-full bg-slate-950/80 border border-slate-700 rounded-xl px-4 py-2.5 text-sm text-white focus:outline-none focus:border-red-500 transition-colors">
                                    <option value="Roll" {{ old('unit') == 'Roll' ? 'selected' : '' }}>Roll / Gulung</option>
                                    <option value="Pcs" {{ old('unit') == 'Pcs' ? 'selected' : '' }}>Pcs / Buah</option>
                                    <option value="Meter" {{ old('unit') == 'Meter' ? 'selected' : '' }}>Meter</option>
                                    <option value="Lembar" {{ old('unit') == 'Lembar' ? 'selected' : '' }}>Lembar / Sheet</option>
                                    <option value="Set" {{ old('unit') == 'Set' ? 'selected' : '' }}>Set</option>
                                    <option value="Lot" {{ old('unit') == 'Lot' ? 'selected' : '' }}>Lot / Batch</option>
                                </select>
                            </div>

                        </div>

                        <!-- Catatan / Spesifikasi Khusus -->
                        <div>
                            <label for="notes" class="block text-xs font-semibold text-slate-300 mb-1.5">
                                Catatan Khusus / Kebutuhan Tambahan
                            </label>
                            <textarea id="notes" 
                                      name="notes" 
                                      rows="3" 
                                      placeholder="Contoh: Butuh sertifikat uji lab (CoA), pengiriman site Morowali, toleransi tekanan 16 Bar, dll..."
                                      class="w-full bg-slate-950/80 border border-slate-700 rounded-xl px-4 py-2.5 text-sm text-white placeholder-slate-500 focus:outline-none focus:border-red-500 transition-colors">{{ old('notes') }}</textarea>
                        </div>

                    </div>
                </div>

                <!-- Submission Guarantee Notice (PBI 11) -->
                <div class="p-4 rounded-xl bg-slate-950/80 border border-slate-800 text-xs text-slate-400 flex items-start gap-3">
                    <span class="text-emerald-400 text-base">🟢</span>
                    <div>
                        <strong class="text-white block mb-0.5">Pengalihan Otomatis ke WhatsApp Sales (wa.me)</strong>
                        <span>Setelah tombol ditekan, inquiry Anda tersimpan resmi di database PT Duta Mitra Luhur dan Anda langsung diarahkan ke chat WhatsApp dengan format pesan otomatis terisi lengkap.</span>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="pt-2">
                    <button type="submit" class="w-full py-4 px-6 text-base font-bold text-white bg-gradient-to-r from-red-600 via-rose-600 to-red-600 hover:from-red-500 hover:to-rose-500 rounded-xl shadow-xl shadow-red-600/30 hover:shadow-red-600/50 transition-all transform hover:-translate-y-0.5 border border-red-400/40 flex items-center justify-center gap-2">
                        <span>Kirim Permintaan & Buka WhatsApp Penawaran</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </button>
                </div>

            </form>

        </div>

    </div>
</div>

<script>
    function handleProductSelect(select) {
        const selectedOption = select.options[select.selectedIndex];
        const productNameInput = document.getElementById('product_name');
        const productIdInput = document.getElementById('product_id');

        if (select.value === 'custom') {
            productIdInput.value = '';
            productNameInput.value = '';
            productNameInput.focus();
        } else if (select.value) {
            productNameInput.value = select.value;
            productIdInput.value = selectedOption.getAttribute('data-id') || '';
        }
    }
</script>
@endsection

