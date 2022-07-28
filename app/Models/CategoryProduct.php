<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
    public $timestamps = false;
    protected $fillable = [
         'category_id' , 'category_name' , 'category_desc','category_status'
];

    protected $primaryKey = 'category_id';
    protected $table = 'tbl_category_products';

    // public function connectToProduct()
    // {
    //     return $this->hasMany(Product::class, 'category_id');
    // }
}