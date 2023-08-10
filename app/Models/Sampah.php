<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sampah extends Model
{
    use HasFactory;

    protected $table = 'sampah';
    protected $guarded = [];

    public function kategorisampah()
    {
        return $this->belongsTo(KategoriSampah::class, 'kategori_sampah_id', 'id');
    }

    public function detailtransaksi()
    {
        return $this->hasMany(DetailTransaksi::class);
    }
}
