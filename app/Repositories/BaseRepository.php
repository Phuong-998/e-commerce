<?php 
namespace App\Repositories;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\BaseRepositoryInterface;

class BaseRepository 
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function find(int $id)
    {
        return $this->model->find($id);
    }

    public function create($data = [])
    {
        return $this->model->create($data);
    }

    public function update(int $id, $data = [] )
    {
        $record = $this->model->find($id);
        if($record){
            $record->update($data);
            return $record;
        }
        return null;
    }

    public function delete(int $id)
    {
        return $this->model->destroy($id);
    }
}