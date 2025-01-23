<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class cart extends Model
{
    use HasFactory;
    protected $table='cart';
    protected $fillable = ['product_id', 'user_id','image_1', 'quantity','f_name','price','total_price'];
    public $timestamps=false;
   
}
