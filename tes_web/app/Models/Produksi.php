<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produksi extends Model
{
    public $table = "produksi";
    protected $primarykey = "id";
    protected $fillable = [
        'komoditas_kode', 'produksi', 'tanggal'
    ];
    public function komoditas()
    {
        return $this->belongsTo(KomoditasModel::class, 'komoditas_kode', 'id');
    }
    use HasFactory;
}
