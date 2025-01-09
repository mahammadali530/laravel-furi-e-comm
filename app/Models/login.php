<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class login extends Model
{
    use HasFactory;
    protected $table='login';
   // protected $primaryKey = 'u_id';
    protected $fillable = ['email', 'password'];
    public $timestamps=false;
   
}
