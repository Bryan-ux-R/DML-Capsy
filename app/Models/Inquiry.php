<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Inquiry extends Model
{
    use HasFactory;

    protected $fillable = [
        'inquiry_number',
        'name',
        'company',
        'phone',
        'email',
        'product_id',
        'product_name',
        'size',
        'quantity',
        'unit',
        'variant',
        'notes',
        'status',
        'whatsapp_url',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public static function generateInquiryNumber(): string
    {
        $date = date('Ymd');
        $random = strtoupper(substr(bin2hex(random_bytes(2)), 0, 4));
        $count = self::whereDate('created_at', today())->count() + 1;
        $sequence = str_pad($count, 3, '0', STR_PAD_LEFT);
        return "INQ-{$date}-{$sequence}{$random}";
    }

    public function buildWhatsAppMessage(string $salesPhone = '6289501823280'): string
    {
        $cleanPhone = preg_replace('/[^0-9]/', '', $salesPhone);
        if (str_starts_with($cleanPhone, '0')) {
            $cleanPhone = '62' . substr($cleanPhone, 1);
        }

        $text = "Halo Tim Sales PT Duta Mitra Luhur (Duta Rubber),\n\n";
        $text .= "Saya ingin menanyakan ketersediaan dan penawaran resmi untuk produk berikut:\n\n";
        $text .= "📌 *No. Inquiry:* {$this->inquiry_number}\n";
        $text .= "👤 *Nama Pemohon:* {$this->name}\n";
        if ($this->company) {
            $text .= "🏢 *Perusahaan:* {$this->company}\n";
        }
        $text .= "📞 *Kontak:* {$this->phone}\n";
        if ($this->email) {
            $text .= "✉️ *Email:* {$this->email}\n";
        }
        $text .= "⚙️ *Produk:* {$this->product_name}\n";
        if ($this->variant) {
            $text .= "🏷️ *Varian/Material:* {$this->variant}\n";
        }
        $text .= "📐 *Ukuran/Dimensi:* {$this->size}\n";
        $text .= "📦 *Jumlah Kebutuhan:* {$this->quantity} {$this->unit}\n";
        if ($this->notes) {
            $text .= "📝 *Catatan Khusus:* {$this->notes}\n";
        }
        $text .= "\nMohon konfirmasi ketersediaan stok, lead time produksi, dan penawaran harga resmi (RFQ). Terima kasih!";

        return "https://wa.me/{$cleanPhone}?text=" . rawurlencode($text);
    }
}

