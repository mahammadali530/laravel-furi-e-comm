<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class messge extends Model
{
    use HasFactory;
    protected $table='contact_msg';
  
    public $timestamps=false;
}
