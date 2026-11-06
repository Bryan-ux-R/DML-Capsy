<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Rubber Sheet & Roll',
                'slug' => 'rubber-sheet-roll',
                'icon' => 'layers',
                'description' => 'Lembaran karet lembaran dan gulungan mutu tinggi untuk bantalan, isolator getaran, dan pelapis tahan minyak/kimia.',
            ],
            [
                'name' => 'Industrial Gasket & Seal',
                'slug' => 'industrial-gasket-seal',
                'icon' => 'shield-check',
                'description' => 'Gasket flensa pipa, segel tahan tekanan tinggi, spiral wound gasket, dan segel karet bersertifikasi.',
            ],
            [
                'name' => 'Conveyor Belt Heavy-Duty',
                'slug' => 'conveyor-belt-heavy-duty',
                'icon' => 'fast-forward',
                'description' => 'Ban berjalan berdaya tahan gesek dan abrasi tinggi untuk pertambangan, pabrik semen, pupuk, dan manufaktur berat.',
            ],
            [
                'name' => 'Custom Molded & Seal',
                'slug' => 'custom-molded-seal',
                'icon' => 'tool',
                'description' => 'Komponen karet presisi tinggi hasil cetak kompresi/injeksi sesuai rancangan teknik (drawing CAD/spesifikasi khusus).',
            ],
            [
                'name' => 'Marine Fender & Bumper',
                'slug' => 'marine-fender-bumper',
                'icon' => 'anchor',
                'description' => 'Bantalan karet dermaga kapal (fender tipe V, silinder, cell) dan bumper loading dock pabrik.',
            ],
            [
                'name' => 'Anti-Vibration & Mounting',
                'slug' => 'anti-vibration-mounting',
                'icon' => 'activity',
                'description' => 'Peredam getaran mesin industri, rubber pad jembatan (elastomeric bearing pad), dan dudukan generator.',
            ],
        ];

        $catModels = [];
        foreach ($categories as $cat) {
            $catModels[$cat['slug']] = ProductCategory::updateOrCreate(
                ['slug' => $cat['slug']],
                $cat
            );
        }

        $products = [
            // 1. Rubber Sheet
            [
                'category_id' => $catModels['rubber-sheet-roll']->id,
                'name' => 'NBR Oil-Resistant Rubber Sheet',
                'slug' => 'nbr-oil-resistant-rubber-sheet',
                'badge' => 'Bestseller',
                'material' => 'NBR (Nitrile Butadiene Rubber)',
                'short_description' => 'Lembaran karet sintetis NBR dengan ketahanan superior terhadap oli, minyak bumi, bensin, dan pelumas industri.',
                'description' => 'NBR Rubber Sheet PT Duta Mitra Luhur diformulasikan khusus untuk lingkungan operasional dengan paparan pelumas mesin, hidrokarbon, minyak mineral, dan gemuk industri. Menjaga elastisitas tinggi dan tidak mudah melar atau getas saat terkena bahan bakar.',
                'hardness' => '65 ± 5 Shore A',
                'temperature_range' => '-30°C hingga +120°C',
                'tensile_strength' => '12.5 MPa',
                'elongation' => '350%',
                'standards' => 'ASTM D2000 / SNI ISO 9001:2015',
                'min_order' => '1 Roll (1.2m x 10m)',
                'image_url' => 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=800&q=80',
                'is_featured' => true,
                'specifications' => [
                    'Ketebalan Tersedia' => '1 mm, 2 mm, 3 mm, 4 mm, 5 mm, 8 mm, 10 mm, hingga 25 mm',
                    'Lebar Standar' => '1000 mm & 1200 mm',
                    'Panjang Roll' => '10 Meter / 15 Meter / Custom Potong',
                    'Warna' => 'Hitam Pekat (Smooth Finish / Cloth Finish)',
                    'Specific Gravity' => '1.35 g/cm³',
                ],
                'variants' => [
                    'Tebal 2mm x 1200mm x 10m',
                    'Tebal 3mm x 1200mm x 10m',
                    'Tebal 5mm x 1200mm x 10m',
                    'Tebal 10mm x 1200mm x 10m',
                    'Custom Sheet Sesuai Gambar',
                ],
            ],
            [
                'category_id' => $catModels['rubber-sheet-roll']->id,
                'name' => 'EPDM Weather & Ozone Resistant Sheet',
                'slug' => 'epdm-weather-ozone-resistant-sheet',
                'badge' => 'Outdoor Grade',
                'material' => 'EPDM (Ethylene Propylene Diene Monomer)',
                'short_description' => 'Lembaran karet tahan cuaca ekstrem, radiasi UV sinar matahari, ozon, serta uap panas dan cairan asam/basa lemah.',
                'description' => 'Dirancang untuk instalasi luar ruangan dan fasilitas pembangkit. EPDM Duta Rubber memiliki resistansi ultra tinggi terhadap degradasi ozon dan penuaan termal hingga 140°C.',
                'hardness' => '70 ± 5 Shore A',
                'temperature_range' => '-40°C hingga +140°C',
                'tensile_strength' => '10 MPa',
                'elongation' => '300%',
                'standards' => 'ASTM D2000 SAE J200',
                'min_order' => '1 Roll',
                'image_url' => 'https://images.unsplash.com/photo-1581092335397-9583fe92d232?auto=format&fit=crop&w=800&q=80',
                'is_featured' => true,
                'specifications' => [
                    'Ketebalan' => '1.5 mm - 20 mm',
                    'Lebar' => '1000 mm / 1200 mm',
                    'Resistansi Ozon' => 'No Cracks at 50 pphm / 40°C',
                    'Warna' => 'Hitam / Abu-Abu',
                ],
                'variants' => [
                    'Tebal 2mm x 1.2m x 10m',
                    'Tebal 3mm x 1.2m x 10m',
                    'Tebal 5mm x 1.2m x 10m',
                ],
            ],
            [
                'category_id' => $catModels['rubber-sheet-roll']->id,
                'name' => 'Food Grade Translucent Silicone Sheet',
                'slug' => 'food-grade-translucent-silicone-sheet',
                'badge' => 'FDA Approved',
                'material' => '100% Virgin Food Grade Silicone',
                'short_description' => 'Lembaran silikon bening/transparan higienis tanpa bau dan racun, tahan suhu panas oven industri hingga 250°C.',
                'description' => 'Khusus untuk industri pengolahan makanan, minuman, farmasi, serta medical chamber. Bebas bahan kimia beracun dan memiliki sertifikasi pemenuhan regulasi kontak pangan FDA.',
                'hardness' => '60 ± 5 Shore A',
                'temperature_range' => '-60°C hingga +250°C',
                'tensile_strength' => '8.5 MPa',
                'elongation' => '400%',
                'standards' => 'FDA 21 CFR 177.2600 / ISO 22000',
                'min_order' => '1 Roll / Lembar',
                'image_url' => 'https://images.unsplash.com/photo-1504917599217-d4dc5ebe6122?auto=format&fit=crop&w=800&q=80',
                'is_featured' => false,
                'specifications' => [
                    'Ketebalan' => '1 mm - 12 mm',
                    'Lebar Standar' => '1000 mm & 1200 mm',
                    'Warna' => 'Semi Transparan / Putih Susu',
                    'Sifat Non-toxic' => 'Food Grade Compliant',
                ],
                'variants' => [
                    'Tebal 1mm x 1m x 10m',
                    'Tebal 2mm x 1m x 10m',
                    'Tebal 3mm x 1m x 10m',
                    'Tebal 5mm x 1m x 10m',
                ],
            ],

            // 2. Conveyor Belt
            [
                'category_id' => $catModels['conveyor-belt-heavy-duty']->id,
                'name' => 'Heavy Duty Multi-Ply Fabric Conveyor Belt (EP 200/400)',
                'slug' => 'heavy-duty-fabric-conveyor-belt-ep',
                'badge' => 'Mining Standard',
                'material' => 'Polyester-Nylon (EP) Carcass + Anti-Abrasion Rubber Cover Grade M/N',
                'short_description' => 'Ban berjalan berdaya tarik tinggi dengan ply benang polyester-polyamide untuk material berat batu bara, klinker semen, pasir & bijih mineral.',
                'description' => 'PT Duta Mitra Luhur memproduksi conveyor belt heavy-duty tipe EP (Polyester-Nylon) dengan elastisitas stabil, peregangan minimal, dan lapisan penutup karet kelas abrasi tinggi (DIN X, Y, W, Z atau SNI). Mampu meredam benturan batu tajam dan material abrasif.',
                'hardness' => '65 ± 5 Shore A',
                'temperature_range' => '-25°C hingga +80°C',
                'tensile_strength' => 'EP 200 s/d EP 1600 N/mm',
                'elongation' => 'Peregangan elastis < 1.5%',
                'standards' => 'DIN 22102 / ISO 15236 / SNI 06-7031',
                'min_order' => '50 Meter Roll',
                'image_url' => 'https://images.unsplash.com/photo-1578328819058-b69f3a3b0f6b?auto=format&fit=crop&w=800&q=80',
                'is_featured' => true,
                'specifications' => [
                    'Tipe Carcass' => 'EP 150, EP 200, EP 250, EP 300, EP 400',
                    'Jumlah Lapisan (Ply)' => '2 Ply, 3 Ply, 4 Ply, 5 Ply',
                    'Tebal Cover Karet Atas/Bawah' => '3+1.5mm, 4+2mm, 5+2mm, 6+3mm, 8+3mm',
                    'Lebar Belt' => '400mm s/d 2000mm',
                    'Abrasion Loss' => '< 120 mm³ (DIN 53516 Grade M)',
                ],
                'variants' => [
                    'EP 400/3 Ply (Tebal Cover 4+2mm, Lebar 650mm)',
                    'EP 500/4 Ply (Tebal Cover 5+2mm, Lebar 800mm)',
                    'EP 630/4 Ply (Tebal Cover 6+3mm, Lebar 1000mm)',
                    'EP 800/4 Ply (Tebal Cover 8+3mm, Lebar 1200mm)',
                    'Custom Splicing & Endless Belt',
                ],
            ],
            [
                'category_id' => $catModels['conveyor-belt-heavy-duty']->id,
                'name' => 'Chevron Pattern Cleated Conveyor Belt',
                'slug' => 'chevron-pattern-cleated-conveyor-belt',
                'badge' => 'High Incline',
                'material' => 'EP Fabric + High Grip Natural Rubber',
                'short_description' => 'Belt bersirip pola chevron terintegrasi untuk pengangkutan material curah pada sudut kemiringan tajam hingga 40 derajat tanpa slip.',
                'description' => 'Pola sirip V (Chevron) dicetak menyatu (monolithic vulkanisir) dengan sabuk dasar sehingga tidak mudah lepas atau robek. Sangat efektif untuk loading truk, crusher bijih, pasir basah, dan pupuk curah.',
                'hardness' => '60 Shore A',
                'temperature_range' => '-20°C s/d +70°C',
                'tensile_strength' => 'EP 315 / 3 Ply',
                'elongation' => '< 1.8%',
                'standards' => 'ISO 10247 / DIN 22102',
                'min_order' => '30 Meter',
                'image_url' => 'https://images.unsplash.com/photo-1581092162384-8987c1d64718?auto=format&fit=crop&w=800&q=80',
                'is_featured' => false,
                'specifications' => [
                    'Tinggi Sirip (Cleat)' => '15 mm, 25 mm, 32 mm',
                    'Pola Sirip' => 'Open V, Closed V, Chevron W',
                    'Lebar Sabuk' => '500 mm s/d 1200 mm',
                ],
                'variants' => [
                    'Chevron 15mm Cleat - Lebar 600mm',
                    'Chevron 25mm Cleat - Lebar 800mm',
                    'Chevron 32mm Cleat - Lebar 1000mm',
                ],
            ],

            // 3. Gasket & Seal
            [
                'category_id' => $catModels['industrial-gasket-seal']->id,
                'name' => 'Custom CNC Cut Flange Rubber Gasket (ANSI & DIN)',
                'slug' => 'custom-cnc-cut-flange-rubber-gasket',
                'badge' => 'High Precision',
                'material' => 'Neoprene / NBR / EPDM / FKM (Viton) / PTFE',
                'short_description' => 'Gasket flensa pipa industri dipotong presisi menggunakan mesin CNC digital knife tanpa cetakan mahal, akurat hingga 0.1 mm.',
                'description' => 'Produksi gasket flensa standar ANSI B16.21 (Class 150, 300, 600) dan DIN/PN10, PN16, PN25, PN40. Melayani bentuk Full Face (dengan lubang baut) maupun Inside Bolt Circle (IBC/Ring Type) siap pasang.',
                'hardness' => '65 - 80 Shore A',
                'temperature_range' => '-35°C hingga +200°C (tergantung kompon)',
                'tensile_strength' => '11 - 15 MPa',
                'elongation' => '250 - 350%',
                'standards' => 'ASME B16.21 / DIN EN 1514-1',
                'min_order' => '10 Pcs',
                'image_url' => 'https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc?auto=format&fit=crop&w=800&q=80',
                'is_featured' => true,
                'specifications' => [
                    'Tipe Gasket' => 'Full Face (FF) & Ring Face (RF/IBC)',
                    'Ukuran Nominal Flange' => '1/2 Inch s/d 48 Inch (DN15 s/d DN1200)',
                    'Ketebalan' => '1.5 mm, 2.0 mm, 3.0 mm, 5.0 mm',
                    'Pilihan Kompon' => 'NBR (Minyak), EPDM (Kimia/Uap), Viton (Suhu Tinggi), Neoprene (All-round)',
                ],
                'variants' => [
                    'ANSI 150 Full Face - DN50 (2 Inch) 3mm',
                    'ANSI 150 Full Face - DN100 (4 Inch) 3mm',
                    'ANSI 150 Full Face - DN150 (6 Inch) 3mm',
                    'DIN PN16 Ring Type - DN80 3mm',
                    'Custom Drawing CAD (Bentuk Khusus Mesin)',
                ],
            ],

            // 4. Custom Molded & Seal
            [
                'category_id' => $catModels['custom-molded-seal']->id,
                'name' => 'Custom Molded Rubber Components & Precision Seal',
                'slug' => 'custom-molded-rubber-components-precision-seal',
                'badge' => 'OEM Fabrikasi',
                'material' => 'Formulasi Kompon Karet Sesuai Kebutuhan Mesin (Katalog / Drawing)',
                'short_description' => 'Fabrikasi cetakan tooling dan produksi komponen karet cetak: O-Ring besar, Diaphragm pompa, Rubber Bushing, Grommet, dan Seal Hidrolik.',
                'description' => 'PT Duta Mitra Luhur memiliki workshop pembuatan mold (cetakan baja) dan mesin press vulkanisir hidrolik hingga tonase tinggi. Siap menerima pembuatan komponen karet pengganti suku cadang mesin impor dengan biaya hemat dan kualitas sepadan.',
                'hardness' => '40 - 90 Shore A (Adjustable)',
                'temperature_range' => '-40°C hingga +260°C',
                'tensile_strength' => 'Hingga 18 MPa',
                'elongation' => '200 - 500%',
                'standards' => 'ISO 3601 / DIN 3771 / OEM Custom',
                'min_order' => '1 Lot / 50 Pcs',
                'image_url' => 'https://images.unsplash.com/photo-1581092795360-fd1ca04f0952?auto=format&fit=crop&w=800&q=80',
                'is_featured' => true,
                'specifications' => [
                    'Proses Produksi' => 'Compression Molding, Transfer Molding, Injection',
                    'Dukungan Desain' => 'CAD / SolidWorks / Reverse Engineering dari Sampel Aus',
                    'Bahan Insersi' => 'Rubber-to-Metal Bonding (Karet Melekat pada Plat/Baut Besi)',
                ],
                'variants' => [
                    'Custom Rubber Coupling / Spider Gear',
                    'Molded Diaphragm Pompa Dosing',
                    'Heavy Duty Rubber Bushing Bush',
                    'Custom Tank Gasket Profile',
                ],
            ],

            // 5. Marine Fender
            [
                'category_id' => $catModels['marine-fender-bumper']->id,
                'name' => 'Arch & Cylindrical Rubber Marine Fender',
                'slug' => 'arch-cylindrical-rubber-marine-fender',
                'badge' => 'Port & Harbor',
                'material' => 'High Grade Natural Rubber Compound Tahan Air Laut & UV',
                'short_description' => 'Bantalan karet peredam benturan kapal pada dermaga pelabuhan, tongkang batubara, kapal tunda, dan jeti industri.',
                'description' => 'Fender tipe silinder dan tipe V (Arch) memiliki penyerapan energi tinggi (high energy absorption) dengan gaya reaksi rendah (low reaction force). Tahan terhadap korosi air asin, lumut laut, serta gesekan lambung kapal bertonase besar.',
                'hardness' => '70 ± 5 Shore A',
                'temperature_range' => '-30°C s/d +70°C',
                'tensile_strength' => '16 MPa',
                'elongation' => '400%',
                'standards' => 'PIANC 2002 / ASTM D2000',
                'min_order' => '1 Set / Unit',
                'image_url' => 'https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?auto=format&fit=crop&w=800&q=80',
                'is_featured' => false,
                'specifications' => [
                    'Tipe' => 'V-Fender (Arch) & Cylindrical Fender',
                    'Dimensi Standar' => 'V150H, V250H, V300H, V500H Panjang 1000mm - 3000mm',
                    'Aksesoris Tambahan' => 'Baut Angkur Stainless Steel / Hot Dip Galvanized & Plat PE Pad',
                ],
                'variants' => [
                    'V-Type 200H x 1500L',
                    'V-Type 300H x 2000L',
                    'Cylindrical Dia 300mm x 1500L',
                    'D-Type Loading Dock Bumper 150D x 1000L',
                ],
            ],

            // 6. Anti-Vibration & Mounting
            [
                'category_id' => $catModels['anti-vibration-mounting']->id,
                'name' => 'Elastomeric Bearing Pad & Vibration Damper Pad',
                'slug' => 'elastomeric-bearing-pad-vibration-damper-pad',
                'badge' => 'SNI Certified',
                'material' => 'Natural Rubber / Polychloroprene Berlapis Plat Baja Internal',
                'short_description' => 'Karet bantalan peredam beban dinamis dan getaran untuk jembatan, flyover, pondasi mesin press, genset, dan chiller gedung.',
                'description' => 'Elastomeric Bearing Pad PT Duta Mitra Luhur diuji ketahanan kompresi geser (shear modulus) dan beban tekan tinggi. Bersertifikat uji laboratorium konstruksi terakreditasi SNI.',
                'hardness' => '60 ± 5 Shore A',
                'temperature_range' => '-25°C s/d +70°C',
                'tensile_strength' => '17.5 MPa',
                'elongation' => '450%',
                'standards' => 'SNI 3967:2015 / AASHTO M 251',
                'min_order' => '4 Pcs / Set',
                'image_url' => 'https://images.unsplash.com/photo-1581092583537-20d51b4b4f1b?auto=format&fit=crop&w=800&q=80',
                'is_featured' => false,
                'specifications' => [
                    'Tipe' => 'Polos (Plain Pad) & Laminasi Plat Baja (Laminated Pad)',
                    'Kapasitas Beban' => '10 Ton s/d 500 Ton per Titik Tumpu',
                    'Dimensi Standar' => '200x200mm, 300x300mm, 400x400mm, Tebal 20mm s/d 80mm',
                ],
                'variants' => [
                    'Pad Polos 300x300x20mm',
                    'Pad Laminasi 350x350x42mm (SNI Jembatan)',
                    'Pad Laminasi 400x400x52mm',
                    'Mesin Genset Mount Pad Anti-Getar 150x150x50mm',
                ],
            ],
        ];

        foreach ($products as $prod) {
            Product::updateOrCreate(
                ['slug' => $prod['slug']],
                $prod
            );
        }
    }
}

