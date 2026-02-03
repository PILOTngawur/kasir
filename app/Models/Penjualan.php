<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    //
    protected $guarded = [];

    public function detailpenjualans(){
        return $this->hasMany(DetailPenjualan::class);
    }

    public function pelanggan(){
        return $this->belongsTo(Pelanggan::class);
    }
}
