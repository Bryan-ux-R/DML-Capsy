<?php

namespace Tests\Feature;

use App\Models\Inquiry;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CompanyWebsiteTest extends TestCase
{
    use RefreshDatabase;

    protected bool $seed = true;
    /** PBI 04 - Akses Company Profile Tanpa Login */
    public function test_guest_can_access_company_profile_and_home_without_login(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('DUTA RUBBER');
        $response->assertSee('PT DUTA MITRA LUHUR');
        $response->assertSee('MATERIAL KARET BERKUALITAS UNTUK');
        $response->assertSee('SEGALA KEBUTUHAN INDUSTRI');
        $response->assertSee('500+');
        $response->assertSee('1,200+');
        $response->assertSee('15+ Thn');
        $response->assertSee('SNI & ISO');
    }

    /** PBI 05 - Katalog Produk dan Detail Produk */
    public function test_guest_can_view_product_catalog_and_detail(): void
    {
        $response = $this->get('/katalog');
        $response->assertStatus(200);
        $response->assertSee('Katalog Produk Karet Industri');

        $product = Product::first();
        $detailResponse = $this->get('/katalog/' . $product->slug);
        $detailResponse->assertStatus(200);
        $detailResponse->assertSee($product->name);
        $detailResponse->assertSee('Tabel Spesifikasi Teknis Standar');
        $detailResponse->assertSee('Varian & Ukuran Tersedia');
    }

    /** PBI 06 - Pencarian dan Filter Produk */
    public function test_product_search_and_category_filter(): void
    {
        $response = $this->get('/katalog?q=Retro');
        $response->assertStatus(200);
        $response->assertSee('Rubber Outsole Retro Sneakers');

        $category = ProductCategory::where('slug', 'rubber-soles')->first();
        $catResponse = $this->get('/katalog?kategori=' . $category->slug);
        $catResponse->assertStatus(200);
        $catResponse->assertSee('Vulcanized Sneaker Rubber Outsole White');
    }

    /** PBI 07 - Call to Action */
    public function test_call_to_action_buttons_are_present(): void
    {
        $response = $this->get('/');
        $response->assertSee('Jelajahi Katalog Lengkap');
        $response->assertSee('Ajukan Penawaran B2B (RFQ)');
        $response->assertSee('Respon Penawaran < 2 Jam');

        $product = Product::first();
        $detailResponse = $this->get('/katalog/' . $product->slug);
        $detailResponse->assertSee('Tanya Ketersediaan & Ajukan RFQ');
        $detailResponse->assertSee('Chat WhatsApp Sales');
    }

    /** PBI 09 & PBI 10 & PBI 11 - Form Tanya Ketersediaan, Validasi & WA Redirect */
    public function test_inquiry_submission_validation_and_whatsapp_redirect(): void
    {
        $formResponse = $this->get('/tanya-ketersediaan');
        $formResponse->assertStatus(200);
        $formResponse->assertSee('Formulir Tanya Ketersediaan & Penawaran');

        $postData = [
            'name' => 'Budi Santoso',
            'company' => 'PT Sumber Mineral Nusantara',
            'phone' => '081298765432',
            'email' => 'budi@sumbermineral.co.id',
            'product_name' => 'Rubber Outsole Retro Sneakers (Converse Style)',
            'size' => 'Size 42 (Brown Gum)',
            'quantity' => 500,
            'unit' => 'Pasang',
            'variant' => 'Size 41 - 42 (Brown Gum)',
            'notes' => 'Mohon info ketersediaan stok ready dan estimasi pengiriman.',
        ];

        $submitResponse = $this->post('/tanya-ketersediaan', $postData);
        $submitResponse->assertSessionHasNoErrors();

        $inquiry = Inquiry::latest()->first();
        $this->assertNotNull($inquiry);
        $this->assertStringStartsWith('INQ-', $inquiry->inquiry_number);
        $this->assertEquals('Inquiry Baru', $inquiry->status);
        $this->assertStringContainsString('wa.me', $inquiry->whatsapp_url);
        $this->assertStringContainsString(rawurlencode($inquiry->inquiry_number), $inquiry->whatsapp_url);

        $submitResponse->assertRedirect(route('inquiry.success', ['number' => $inquiry->inquiry_number]));

        $successResponse = $this->get(route('inquiry.success', ['number' => $inquiry->inquiry_number]));
        $successResponse->assertStatus(200);
        $successResponse->assertSee($inquiry->inquiry_number);
        $successResponse->assertSee('Inquiry Baru');
        $successResponse->assertSee('Buka WhatsApp Sekarang');
    }
}

