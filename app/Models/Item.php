<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable =['date','item','quantity','price','total','invoice_id'];

//    public function invoice(){
//        return $this->belongsTo(Invoice::class);
//    }
}
