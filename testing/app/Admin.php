<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model {
    protected $table = 'products';
    protected $fillable = ['merek','seri', 'socket', 'spek', 'gambar', 'harga', 'katalog'];
}
