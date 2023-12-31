<?php

namespace App\Models;

use App\Models\Order;
use App\Models\Produk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderDetail extends Model
{
    use HasFactory;
    protected $table = 'order_details'; // Sesuaikan dengan nama tabel Anda

    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'price',
    ];

    // Definisikan relasi dengan model Order jika diperlukan
    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    // Definisikan relasi dengan model Product jika diperlukan
    public function product()
    {
        return $this->belongsTo(Produk::class, 'product_id');
    }
}
