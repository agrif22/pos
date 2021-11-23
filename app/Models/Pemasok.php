<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pemasok extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'pemasok';
    protected $fillable = [
        'nama_pemasok', 'alamat','telp'
    ];

    public function barang(){

        return $this->hasOne('Barang','id_pemasok');
    }
    public function pembelian(){

        return $this->hasMany('Pembelian','id_pemasok');
    }
}
