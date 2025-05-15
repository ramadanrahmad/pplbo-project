<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    public function kategori()
{
    return $this->belongsTo(Kategori::class);
}

    protected $fillable = [
        'jenis',        // 'pemasukan' atau 'pengeluaran'
        'jumlah',
        'keterangan',
        'kategori_id',
        'catatan',
    ];
}


