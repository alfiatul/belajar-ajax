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
use App\Domain\Entities\Obat;

class ObatRepository extends AbstractRepository implements Crudable, Paginable, Searchable
{
    public function __construct(Obat $obat)
    {
        $this->model = $obat;
    }

    public function find($id, array $columns = ['*'])
    {
        return parent::find($id, $columns);
    }

    public function create(array $data)
    {
        return parent::create([
            'id_apoteker' => e($data['id_apoteker']),
            'nama_obat' => e($data['nama_obat']),
            'harga' => e($data['harga']),
        ]);
    }

    public function update($id, array $data)
    {
        return parent::update($id, [
            'id_apoteker' => e($data['id_apoteker']),
            'nama_obat' => e($data['nama_obat']),
            'harga' => e($data['harga']),
        ]);
    }

    public function delete($id)
    {
        return  parent::delete($id);

        // return redirect('/oba');
    }

    public function search($query)
    {
        return parent::likeSearch('nama_obat', $query);
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
