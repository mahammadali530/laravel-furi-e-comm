<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class About extends Model
{
    use HasFactory;
    protected $table='about_tbl';
   // protected $fillable = ['product_id', 'user_id'];
    public $timestamps=false;
}
