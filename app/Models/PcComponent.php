<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PcComponent extends Model
{
    protected $fillable = ['pc_id','component_id','quantity'];

    public function pc() {
        return $this->belongsTo(Product::class, 'pc_id');
    }

    public function component() {
        return $this->belongsTo(Product::class, 'component_id');
    }
}
