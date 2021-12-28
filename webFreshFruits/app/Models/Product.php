<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $guarded= [];
    // protected $fillable = ['title', 'description','price', 'content', 'avatar', 'category_id','status'];
    public function category(){ 
        return $this->belongsTo(Category::class, 'category_id'); 
    }
    public function brand(){ 
        return $this->belongsTo(Brand::class, 'brand_id'); 
    }
}
 