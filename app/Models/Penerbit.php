<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerbit extends Model
{
    protected $table = 'penerbit';
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'id_penerbit',
        'nama',
        'alamat',
        'kota',
        'telepon',
    ];

    public function buku()
    {
        return $this->hasOne(Buku::class);
    }
}
