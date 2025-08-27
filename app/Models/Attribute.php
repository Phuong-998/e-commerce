<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $fillable = ['category_id','name','unit'];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function productValues() {
        return $this->hasMany(ProductAttribute::class);
    }
}
