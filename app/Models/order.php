<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class order extends Model
{
    use HasFactory;
    protected $table='orders';
    protected $fillable = [
        'product_id', 'user_id',  'payment_method',
        'c_fname', 'c_lname', 'c_companyname', 'c_address', 
        'c_state_country', 'c_postal_zip', 'c_phone'
    ];      public $timestamps=false;
   
}
