<?php

namespace App\Http\Controllers;

use App\Domain\Repositories\PelangganRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PelangganController extends Controller
{
    protected $pelanggan;

    public function __construct(PelangganRepository $pelangganRepository)
    {
        $this->pelanggan = $pelangganRepository;
    }

    public function index($limit = 10)
    {
        return view('partials.pelanggan.pelanggan', [
            'pelanggan' => $this->pelanggan->getByPage($limit),
        ]);
    }

    public function getData($limit = 10)
    {
        return $this->pelanggan->getData();
    }

        public function edit($id)
    {
        return view('partials.pelanggan.edit', [
            'data' =>$this->pelanggan->find($id),
        ]);

    }

    public function store(Request $request)
    {
return        $this->pelanggan->create($request->all());
//        return redirect('/pelanggan');
    }

    public function show($id)
    {
//        return view('partials.pelanggan.detail', [
//            'data' => $this->pelanggan->find($id),
//        ]);
        return $this->pelanggan->find($id);
    }


    public function update($id, Request $request)
    {
     return   $this->pelanggan->update($id, $request->all());
    //    return redirect('/pelanggan');
    }

    public function destroy($id)
    {
        return $this->pelanggan->delete($id);
    }
}
