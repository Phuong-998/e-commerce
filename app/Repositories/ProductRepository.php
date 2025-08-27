<?php
namespace App\Repositories;

use App\Models\Product;
use App\Repositories\BaseRepository;
use App\Repositories\BaseRepositoryInterface;

class ProductRepository extends BaseRepository implements BaseRepositoryInterface
{
    public function __construct(Product $product)
    {
        parent::__construct($product);
    }

    public function all()
    {
        return $this->model->all();
    }

    public function find(int $id)
    {
        return $this->model->find($id);
    }
}
