<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class icon extends Model
{
    use HasFactory;
    protected $table='products';
    protected $primaryKey = 'u_id';
    protected $fillable = ['f_name', 'price',  'image_1'];
    public $timestamps=false;
   
}
