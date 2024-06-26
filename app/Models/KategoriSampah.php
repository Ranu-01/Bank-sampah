<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriSampah extends Model
{
    use HasFactory;

    protected $table = 'kategori_sampah';
    protected $guarded = [];

    public function sampah()
    {
        return $this->hasMany(Sampah::class);
    }
}
