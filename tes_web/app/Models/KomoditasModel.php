<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KomoditasModel extends Model
{
    public $table = "komoditas";
    protected $primarykey = "id";
    protected $fillable = [
        'komoditas_kode', 'komoditas_nama'
    ];
    public function produksi()
    {
        return $this->hasMany(Produksi::class);
    }
    use HasFactory;
}
