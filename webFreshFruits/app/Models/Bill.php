<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $table= "bills";
    protected $guarded = [];
    public function products(){ 
        return $this->hasMany(Product::class, 'product_id'); 
    }
    public function users(){ 
        return $this->hasMany(Product::class, 'product_id'); 
    }
}
