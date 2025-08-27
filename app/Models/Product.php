<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name','sku','price','quantity','description','warranty','status','type'
    ];

    public function categories() {
        return $this->belongsToMany(Category::class, 'product_categories');
    }

    public function attributes() {
        return $this->hasMany(ProductAttribute::class);
    }

    public function components() {
        return $this->belongsToMany(Product::class, 'pc_components', 'pc_id', 'component_id')
                    ->withPivot('quantity');
    }
}
