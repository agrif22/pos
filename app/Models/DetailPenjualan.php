<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPenjualan extends Model
{
    use HasFactory;
    protected $table = 'detailpenjualan';
    protected $fillable = [
        'tgl_transaksi','id_pelanggan','status','payment'
    ];

    public function penjualan(){
        return $this->belongsTo('Penjualan','id_penjualan');
    }

}
