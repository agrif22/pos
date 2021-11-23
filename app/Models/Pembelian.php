<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;

    protected $table = 'pembelian';
    protected $fillable = [
        'tgl_transaksi','id_pemasok','status','payment'
    ];

    public function pemasok(){
        return $this->hasMany('Pemasok','id_pemasok');
    }

    public function detail(){
        return $this->hasOne('DetailPembelian','id_pembelian');
    }

    public function barang(){
        return $this->belongsToMany('Barang','detail_pembelian','id_pembelian','id_barang');
    }
}
