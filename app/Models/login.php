<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class login extends Model
{
    use HasFactory;
    protected $table='logins';
   // protected $primaryKey = 'u_id';
    protected $fillable = ['email', 'password','otp','otp_expires_at'];
    public $timestamps=false;
   
}
