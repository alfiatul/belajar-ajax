<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 26/01/2016
 * Time: 15:37
 */

namespace App\Domain\Repositories;

use App\Domain\Contracts\Crudable;
use App\Domain\Contracts\Paginable;
use App\Domain\Contracts\Searchable;
use App\Domain\Entities\Apoteker;

class ApotekerRepository extends AbstractRepository implements Crudable, Paginable, Searchable
{
    public function __construct(Apoteker $apoteker)
    {
        $this->model = $apoteker;
    }

    public function find($id, array $columns = ['*'])
    {
        return parent::find($id, $columns);
    }

    public function create(array $data)
    {
        return parent::create([
            'name' => e($data['name']),
            'alamat' => e($data['alamat']),
            'Jk' => e($data['Jk']),
            'notel' => e($data['notel']),
        ]);
    }

    public function update($id, array $data)
    {
        return parent::update($id, [
            'name' => e($data['name']),
            'alamat' => e($data['alamat']),
            'Jk' => e($data['Jk']),
            'notel' => e($data['notel']),
        ]);
    }

    public function delete($id)
    {
      return  parent::delete($id);

       // return redirect('/apoteker');
    }

    public function search($query)
    {
        return parent::likeSearch('name', $query);
    }

    public function getByPage($limit = 10, array $columns = ['*'])
    {
        return parent::getByPage($limit, $columns);
    }

    public function getData()
    {
        $data = $this->model->get();
            return $data;
    }
}
