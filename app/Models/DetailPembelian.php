<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPembelian extends Model
{
    use HasFactory;
    protected $table = 'detailpembelian';
    protected $fillable = [
        'tgl_transaksi','id_pemasok','status','payment'
    ];

    public function penjualan(){
        return $this->belongsTo('Pembelian','id_pembelian');
    }
}
