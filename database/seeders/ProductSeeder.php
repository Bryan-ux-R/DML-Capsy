<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // Truncate existing products and categories for clean DML-only catalog
        DB::statement('DELETE FROM products');
        DB::statement('DELETE FROM product_categories');

        $categories = [
            [
                'name' => 'Rubber Soles (Sol Sepatu Karet)',
                'slug' => 'rubber-soles',
                'icon' => 'zap',
                'description' => 'Sol sepatu karet (outsole) bermutu tinggi untuk sneakers, casual footwear, dan sports shoes dengan standar ketahanan abrasi ketat mitra internasional (PT KMK Global Sports).',
            ],
            [
                'name' => 'Rubber Seals (Seal & Cincin Karet)',
                'slug' => 'rubber-seals',
                'icon' => 'shield-check',
                'description' => 'Cincin seal karet (rubber seals), gasket flensa pipa industri, dan segel fluida tahan tekanan dan oli dengan hasil potong trimming presisi.',
            ],
            [
                'name' => 'Plug Rubber (Karet Penutup & Sumbat)',
                'slug' => 'plug-rubber',
                'icon' => 'check-circle',
                'description' => 'Karet penutup, sumbat elastis silindris, plug rubber mesin, dan stopper pelindung lubang pipa perakitan industri.',
            ],
            [
                'name' => 'Mudguard (Karpet Lumpur Karet Truk)',
                'slug' => 'mudguard-rubber',
                'icon' => 'truck',
                'description' => 'Karet penahan lumpur (mudguard flap) tebal dan tahan benturan batu kerikil serta cuaca panas untuk truk tronton, pick-up, dan armada niaga.',
            ],
            [
                'name' => 'Cover Stir Mobil (Steering Wheel Ring)',
                'slug' => 'cover-stir-mobil',
                'icon' => 'circle',
                'description' => 'Cincin karet elastis rangka dalam bantalan cover setir kemudi mobil anti-selip tanpa sambungan rapuh.',
            ],
            [
                'name' => 'Custom Molded Rubber',
                'slug' => 'custom-molded-rubber',
                'icon' => 'tool',
                'description' => 'Komponen karet teknik cetak khusus presisi tinggi sesuai sampel fisik, gambar teknik CAD, dan pesanan spesifik klien industri.',
            ],
        ];

        $catModels = [];
        foreach ($categories as $cat) {
            $catModels[$cat['slug']] = ProductCategory::create($cat);
        }

        $products = [
            // ==========================================
            // 1. RUBBER SOLES (SOL SEPATU KARET)
            // ==========================================
            [
                'category_id' => $catModels['rubber-soles']->id,
                'name' => 'Rubber Outsole Retro Sneakers (Converse Style)',
                'slug' => 'rubber-outsole-retro-sneakers',
                'badge' => 'Mitra PT KMK',
                'material' => 'Natural Rubber / SBR Compound Premium',
                'short_description' => 'Sol sepatu karet (outsole) bermutu tinggi dengan pola diamond grip klasik dan ketahanan gesek optimal.',
                'description' => 'Diproduksi langsung di lini hydraulic press rubber dan trimming PT Duta Mitra Luhur untuk memenuhi standar ketat mitra korporasi alas kaki seperti PT KMK Global Sports. Memiliki ketahanan abrasi luar biasa, lentur, dan cengkeraman anti-slip di segala permukaan.',
                'hardness' => '60 - 65 Shore A',
                'temperature_range' => '-20°C hingga +90°C',
                'tensile_strength' => '> 14 MPa',
                'elongation' => '> 450%',
                'standards' => 'DIN Abrasion Standard / SNI Alas Kaki Karet',
                'min_order' => '500 Pasang',
                'image_url' => '/images/products/rubber-sole-converse.jpg',
                'is_featured' => true,
                'specifications' => [
                    'Pola Tapak' => 'Diamond Grid & Anti-Slip Traction',
                    'Warna Standar' => 'Brown Gum (Karet Mentah Klasik) & Custom Black/White',
                    'Uji Abrasi DIN' => '< 150 mm³ (Daya Tahan Gesek Tinggi)',
                    'Kesesuaian Brand' => 'Sneakers, Casual Lifestyle Shoes, Skateboard Footwear',
                    'Fasilitas Produksi' => 'Line Mesin Press & Metal Detector PT Duta Mitra Luhur',
                ],
                'variants' => [
                    'Size 37 - 38 (Brown Gum)',
                    'Size 39 - 40 (Brown Gum)',
                    'Size 41 - 42 (Brown Gum)',
                    'Size 43 - 44 (Brown Gum)',
                    'Custom Mold & Warna Sesuai Permintaan Klien',
                ],
            ],
            [
                'category_id' => $catModels['rubber-soles']->id,
                'name' => 'Vulcanized Sneaker Rubber Outsole White',
                'slug' => 'vulcanized-sneaker-rubber-outsole-white',
                'badge' => 'Bestseller',
                'material' => 'High-Grade Synthetic SBR / BR Compound',
                'short_description' => 'Outsole karet vulkanisir premium warna putih susu dengan pola tapak herringbone anti-licin.',
                'description' => 'Dirancang khusus untuk sepatu sneakers modern dan casual streetwear. Melalui proses compounding di mesin Kneader dan Open Mill dengan bahan aktif anti-yellowing sehingga sol tetap cerah, elastis, dan tidak mudah retak dalam pemakaian jangka panjang.',
                'hardness' => '55 - 60 Shore A',
                'temperature_range' => '-20°C hingga +90°C',
                'tensile_strength' => '> 13 MPa',
                'elongation' => '> 480%',
                'standards' => 'SNI ISO 9001:2015 / SATRA Footwear Standards',
                'min_order' => '500 Pasang',
                'image_url' => '/images/products/rubber-sole-vulcanized.jpg',
                'is_featured' => true,
                'specifications' => [
                    'Pola Tapak' => 'Herringbone Pattern & Circular Pivot Pad',
                    'Warna' => 'Pure White / Off-White Anti-Yellowing',
                    'Proses Vulkanisasi' => 'Hot Compression Hydraulic Press Molding',
                    'Aplikasi' => 'Sneakers Streetwear, Skateboard Shoes, Footwear Export',
                ],
                'variants' => [
                    'Size 36 - 38 (White)',
                    'Size 39 - 41 (White)',
                    'Size 42 - 44 (White)',
                    'Custom Formulasi Kekerasan (Shore A) Sesuai Kebutuhan',
                ],
            ],

            // ==========================================
            // 2. RUBBER SEALS (CINCIN & SEAL KARET)
            // ==========================================
            [
                'category_id' => $catModels['rubber-seals']->id,
                'name' => 'Industrial Heavy-Duty Rubber Seals (Ring & Gasket)',
                'slug' => 'industrial-heavy-duty-rubber-seals',
                'badge' => 'Presisi Tinggi',
                'material' => 'NBR / EPDM / Neoprene Elastomer',
                'short_description' => 'Cincin karet penyekat (rubber seal ring) presisi tinggi untuk mencegah kebocoran fluida, oli, dan gas pada mesin.',
                'description' => 'PT Duta Mitra Luhur memproduksi berbagai tipe seal karet industri untuk menyegel sambungan perpipaan, tabung hidrolik, dan housing mesin industri. Diproses dengan mesin trimming akurat untuk menghasilkan tepi seal yang rapi tanpa sisa cetakan (flash-free).',
                'hardness' => '70 ± 5 Shore A',
                'temperature_range' => '-30°C hingga +120°C',
                'tensile_strength' => '12.5 MPa',
                'elongation' => '350%',
                'standards' => 'DIN ISO 3601 / ASTM D2000 / SNI',
                'min_order' => '100 Pcs',
                'image_url' => '/images/products/rubber-seals.jpg',
                'is_featured' => true,
                'specifications' => [
                    'Aplikasi' => 'Flange Pipa, Seal Pompa Kimia, Housing Silinder Hidrolik',
                    'Finishing' => 'Precision Machine Trimmed (Bebas Flash)',
                    'Ketahanan Fluida' => 'Tahan Oli Mesin, Pelumas Hidrolik, Air Bertekanan, Bahan Kimia Ringan',
                    'Metode Cetak' => 'Compression Molding Bertekanan Tinggi',
                ],
                'variants' => [
                    'Diameter Dalam (ID) 50mm - 100mm',
                    'Diameter Dalam (ID) 100mm - 200mm',
                    'Diameter Dalam (ID) 200mm - 350mm',
                    'Custom Seal Sesuai Sampel Fisik / Gambar Teknik CAD',
                ],
            ],
            [
                'category_id' => $catModels['rubber-seals']->id,
                'name' => 'Precision Molded Flange Rubber Seal Ring',
                'slug' => 'precision-molded-flange-rubber-seal-ring',
                'badge' => 'Anti Bocor',
                'material' => 'Oil & Heat Resistant Rubber Compound',
                'short_description' => 'Gasket cincin karet cetak presisi untuk flensa katup dan sambungan tangki industri.',
                'description' => 'Seal cincin karet flensa cetak yang dirancang khusus menahan getaran mekanik dan fluktuasi tekanan tinggi dalam perakitan komponen mesin pabrik.',
                'hardness' => '75 ± 5 Shore A',
                'temperature_range' => '-25°C hingga +130°C',
                'tensile_strength' => '14 MPa',
                'elongation' => '320%',
                'standards' => 'SNI ISO 9001:2015',
                'min_order' => '100 Pcs',
                'image_url' => '/images/products/rubber-seals.jpg',
                'is_featured' => false,
                'specifications' => [
                    'Profil' => 'Square & Round Ring Section',
                    'Toleransi Dimensi' => 'ISO 3302-1 Precision Class M2',
                    'Resistansi Tekanan' => 'Hingga 25 Bar',
                ],
                'variants' => [
                    'Tebal 4mm x ID 120mm',
                    'Tebal 6mm x ID 180mm',
                    'Tebal 8mm x ID 250mm',
                ],
            ],

            // ==========================================
            // 3. PLUG RUBBER (KARET PENUTUP & SUMBAT)
            // ==========================================
            [
                'category_id' => $catModels['plug-rubber']->id,
                'name' => 'Molded Industrial Plug Rubber & Stopper',
                'slug' => 'molded-industrial-plug-rubber-stopper',
                'badge' => 'Produk Unggulan',
                'material' => 'EPDM / SBR Elastomer Compound',
                'short_description' => 'Karet penutup dan sumbat elastis silindris (plug rubber) pelindung lubang tabung pipa industri dan mesin.',
                'description' => 'Komponen karet cetak plug rubber berfungsi menyumbat lubang pipa perakitan, melindungi ulir mesin saat pengiriman, serta sebagai peredam getaran dan segel kedap udara/air pada manufaktur peralatan industri.',
                'hardness' => '65 ± 5 Shore A',
                'temperature_range' => '-30°C hingga +110°C',
                'tensile_strength' => '11 MPa',
                'elongation' => '380%',
                'standards' => 'SNI ISO 9001:2015',
                'min_order' => '200 Pcs',
                'image_url' => '/images/products/plug-rubber.jpg',
                'is_featured' => true,
                'specifications' => [
                    'Bentuk' => 'Tapered Plug / Flanged Hole Stopper / Silindris',
                    'Pilihan Warna' => 'Biru Industri / Hitam Pekat',
                    'Karakteristik' => 'Elastisitas Tinggi, Kedap Udara & Air, Tahan Tekanan',
                    'Pemanfaatan' => 'Manufaktur Otomotif, Fabrikasi Pipa, Mesin Pabrik',
                ],
                'variants' => [
                    'Plug Rubber Diameter 20 mm (Biru)',
                    'Plug Rubber Diameter 30 mm (Biru)',
                    'Plug Rubber Diameter 45 mm (Biru)',
                    'Custom Dimensi Sesuai Lubang Pipa Klien',
                ],
            ],
            [
                'category_id' => $catModels['plug-rubber']->id,
                'name' => 'Cylindrical Rubber Hole Plug & Pipe Cap',
                'slug' => 'cylindrical-rubber-hole-plug-pipe-cap',
                'badge' => 'Kedap Udara',
                'material' => 'High Elastic Rubber Compound',
                'short_description' => 'Tutup sumbat karet pipa bulat fleksibel untuk pelindung ujung selang dan rongga mekanis.',
                'description' => 'Tutup karet fleksibel berdaya rekat kuat yang mudah dipasang tanpa membutuhkan baut tambahan. Mencegah debu, kotoran, dan cairan masuk ke dalam rongga mesin.',
                'hardness' => '60 ± 5 Shore A',
                'temperature_range' => '-30°C hingga +100°C',
                'tensile_strength' => '10.5 MPa',
                'elongation' => '400%',
                'standards' => 'Standar Komponen Manufaktur',
                'min_order' => '200 Pcs',
                'image_url' => '/images/products/plug-rubber.jpg',
                'is_featured' => false,
                'specifications' => [
                    'Desain' => 'Push-in Flexible Plug',
                    'Warna' => 'Biru Industri & Hitam',
                    'Toleransi' => 'Elastis ± 2mm rentang diameter',
                ],
                'variants' => [
                    'Diameter 15 mm',
                    'Diameter 25 mm',
                    'Diameter 40 mm',
                ],
            ],

            // ==========================================
            // 4. MUDGUARD (KARPET LUMPUR TRUK)
            // ==========================================
            [
                'category_id' => $catModels['mudguard-rubber']->id,
                'name' => 'Heavy-Duty Rubber Mudguard (Karpet Lumpur Truk & Niaga)',
                'slug' => 'heavy-duty-rubber-mudguard',
                'badge' => 'Tahan Robek',
                'material' => 'High Tensile Natural Rubber + Reinforcement Fabric',
                'short_description' => 'Lembaran karet spakbor penahan cipratan lumpur dan kerikil untuk armada logistik, dump truck, dan kendaraan niaga.',
                'description' => 'Mudguard karet Duta Rubber diproduksi menggunakan formula kompon tahan cuaca ekstrem dan benturan batu kerikil berulang. Dilengkapi lubang baut presisi hasil pemotongan mesin Cutting Kukdong sehingga kuat, rapi, dan tahan lama di medan operasional berat.',
                'hardness' => '70 ± 5 Shore A',
                'temperature_range' => '-30°C hingga +100°C',
                'tensile_strength' => '> 15 MPa',
                'elongation' => '> 400%',
                'standards' => 'Standar Perlengkapan Armada Komersial & SNI',
                'min_order' => '50 Pcs',
                'image_url' => '/images/products/mudguard-rubber.jpg',
                'is_featured' => true,
                'specifications' => [
                    'Ketebalan Tersedia' => '5 mm, 6 mm, dan 8 mm',
                    'Fitur' => 'Lubang Baut Siap Pasang & Tepi Halus Rapi',
                    'Ketahanan' => 'Tahan Benturan Kerikil, Guyuran Lumpur, & Paparan Sinar UV',
                    'Aplikasi' => 'Dump Truck Tambang, Truk Kontainer, Bus, Mobil Box',
                ],
                'variants' => [
                    'Ukuran 40 cm x 50 cm (Tebal 6mm)',
                    'Ukuran 50 cm x 60 cm (Tebal 6mm)',
                    'Ukuran 60 cm x 80 cm (Tebal 8mm)',
                    'Custom Ukuran Spakbor & Penempatan Lubang Baut',
                ],
            ],
            [
                'category_id' => $catModels['mudguard-rubber']->id,
                'name' => 'Custom Fleet Flap Mudguard Truk Tronton',
                'slug' => 'custom-fleet-flap-mudguard-truk-tronton',
                'badge' => 'Armada Logistik',
                'material' => 'Reinforced Heavy Duty Rubber',
                'short_description' => 'Karpet lumpur karet ukuran besar khusus truk gandeng, tronton, dan trailer logistik antar-kota.',
                'description' => 'Karpet penahan lumpur dimensi ekstra tebal dengan daya tahan sobek maksimal. Mencegah semprotan air dan kerikil ke kendaraan di belakang sesuai standar keselamatan lalu lintas armada.',
                'hardness' => '75 ± 5 Shore A',
                'temperature_range' => '-30°C hingga +110°C',
                'tensile_strength' => '> 16 MPa',
                'elongation' => '> 380%',
                'standards' => 'Standar K3 Armada Angkutan Berat',
                'min_order' => '50 Pcs',
                'image_url' => '/images/products/mudguard-rubber.jpg',
                'is_featured' => false,
                'specifications' => [
                    'Dimensi' => 'Lebar 600 mm x Panjang 900 mm',
                    'Tebal Karet' => '8 mm dengan tulangan serat tekstil',
                    'Ketahanan Cuaca' => 'Anti-retak panas matahari dan oli jalan raya',
                ],
                'variants' => [
                    'Ukuran 60 cm x 90 cm (Tebal 8mm)',
                    'Ukuran 65 cm x 100 cm (Tebal 8mm)',
                ],
            ],

            // ==========================================
            // 5. COVER STIR MOBIL (STEERING WHEEL RING)
            // ==========================================
            [
                'category_id' => $catModels['cover-stir-mobil']->id,
                'name' => 'Automotive Steering Wheel Core Ring (Cover Stir Mobil)',
                'slug' => 'automotive-steering-wheel-core-ring',
                'badge' => 'Otomotif Presisi',
                'material' => 'Special Flexible Rubber Compound',
                'short_description' => 'Cincin karet elastis rangka dalam cover stir kemudi mobil anti-selip dan tahan panas kabin kendaraan.',
                'description' => 'Rangka dalam bantalan setir kemudi mobil berbahan karet murni elastis yang dicetak melingkar tanpa sambungan rapuh. Memberikan cengkeraman kokoh di lingkar kemudi dan tahan panas terik matahari di dalam kabin kendaraan.',
                'hardness' => '50 - 55 Shore A',
                'temperature_range' => '-20°C hingga +85°C',
                'tensile_strength' => '10 MPa',
                'elongation' => '420%',
                'standards' => 'OEM Automotive Component Standards',
                'min_order' => '300 Pcs',
                'image_url' => '/images/products/cover-stir-mobil.jpg',
                'is_featured' => true,
                'specifications' => [
                    'Bentuk' => 'Seamless Circular Ring (Lingkaran Utuh Tanpa Sambungan)',
                    'Profil Karet' => 'Round Solid Tube Profile Elastis',
                    'Fungsi' => 'Core Ring Inner Rubber Bantalan Cover Setir Mobil',
                ],
                'variants' => [
                    'Diameter 36 cm (City Car / Sedan Kecil)',
                    'Diameter 38 cm (MPV / SUV / Sedan Standard)',
                    'Diameter 40 cm (Pick-up / Truk Ringan)',
                ],
            ],

            // ==========================================
            // 6. CUSTOM MOLDED RUBBER
            // ==========================================
            [
                'category_id' => $catModels['custom-molded-rubber']->id,
                'name' => 'Custom Molded Technical Rubber Components',
                'slug' => 'custom-molded-technical-rubber-components',
                'badge' => 'Custom Engineering',
                'material' => 'Natural Rubber, NBR, EPDM, SBR sesuai Gambar CAD Klien',
                'short_description' => 'Pembuatan komponen karet cetak khusus presisi tinggi sesuai sampel fisik atau gambar teknik CAD.',
                'description' => 'Layanan fabrikasi komprehensif mulai dari peracikan formula kompon di mesin Kneader & Open Mill, pencetakan bertekanan tinggi di hydraulic press, trimming halus, hingga inspeksi metal detector.',
                'hardness' => '40 hingga 90 Shore A',
                'temperature_range' => '-40°C s.d +150°C',
                'tensile_strength' => 'Disesuaikan Standar Target',
                'elongation' => 'Disesuaikan Permintaan',
                'standards' => 'ISO 9001:2015 / Gambar Teknik Klien',
                'min_order' => 'MOQ Fleksibel Sesuai Cetakan',
                'image_url' => '/images/factory/machines/press-rubber-line.jpg',
                'is_featured' => true,
                'specifications' => [
                    'Proses Manufaktur' => 'Kneader Mixing, Open Mill Sheeting, Hydraulic Compression Pressing',
                    'Waktu Pembuatan Mold' => '10 - 21 Hari Kerja',
                    'Uji Sampel / Prototyping' => 'Tersedia Batch Uji Coba Pra-Produksi Massal',
                ],
                'variants' => [
                    'Fabrikasi Cetakan Baru (New Tooling)',
                    'Produksi Ulang dari Mold Klien',
                    'Reverse Engineering Komponen Karet',
                ],
            ],
        ];

        foreach ($products as $prod) {
            Product::create($prod);
        }
    }
}
