<?php

namespace App\Http\Controllers;

use App\Domain\Entities\Obat;
use App\Domain\Repositories\ObatRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ObatController extends Controller
{
    protected $Obat;

    public function __construct(ObatRepository $obatRepository)
    {
        $this->obat = $obatRepository;
    }

    public function index($limit = 10)
    {
        return view('partials.obat.obat', [
            'obat' => $this->obat->getByPage($limit),
        ]);
    }
    public function getData($limit = 10)
    {
        return $this->obat->getData();
    }
    public function edit($id)
    {
        return view('partials.obat.edit', [
            'data' =>$this->obat->find($id),
        ]);

    }

    public function store(Request $request)
    {
        return $this->obat->create($request->all());

    }

    public function show($id)
    {
        //return view('partials.obat.detail', [
//            'data' => $this->obat->find($id),
//        ]);
        return $this->obat->find($id);
    }

    public function update($id, Request $request)
    {
        return  $this->obat->update($id, $request->all());
//        return redirect('/obat');
    }

    public function destroy($id)
    {
        return $this->obat->delete($id);
    }
}
