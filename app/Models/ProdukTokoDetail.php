<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukTokoDetail extends Model
{
    use HasFactory;

    public function barang(){
        return $this->belongsTo(Barang::class);
    }
}