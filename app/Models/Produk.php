<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    //
    protected $guarded = [];

    protected $table = 'produks';
    protected $primaryKey = 'ProdukId';

    public function detailpenjualans(){
        return $this->hasMany(DetailPenjualan::class);
    }
}
