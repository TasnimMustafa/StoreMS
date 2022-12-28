<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $fillable=['type','quantity','price'];

//    public function item(){
//        return $this->hasOne(Invoice::class,'store_type');
//    }
}
