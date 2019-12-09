<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Memory extends Model {
    use SoftDeletes;

    protected $table = 'memory';
    
    protected $fillable = ['brand', 'type', 'spec', 'price', 'images'];
}
