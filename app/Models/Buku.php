<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'id_buku',
        'kategori',
        'nama_buku',
        'harga',
        'stok',
        'id_penerbit',
    ];

    public function penerbit()
    {
        return $this->belongsTo(Penerbit::class, 'id_penerbit', 'id_penerbit');
    }
}
