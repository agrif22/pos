<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kategori extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'kategori';
    protected $fillable = [
        'nama_kategori'
    ];

    public function barang(){
        return $this->hasMany('Barang','id_kategori');
    }
}
