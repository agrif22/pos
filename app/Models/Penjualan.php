<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    protected $table = 'penjualan';
    protected $fillable = [
        'tgl_transaksi','id_pelanggan','status','payment'
    ];

    public function pelanggan(){
        return $this->hasMany('Pelanggan','id_pelanggan');
    }

    public function detail(){
        return $this->hasOne('DetailPenjualan','id_penjualan');
    }

    public function barang(){
        return $this->belongsToMany('Barang','detail_penjualan','id_penjualan','id_barang');
    }
}
