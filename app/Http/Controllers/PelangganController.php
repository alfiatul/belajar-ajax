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
        return view('partials.pelanggan', [
            'pelanggan' => $this->pelanggan->getByPage($limit),
        ]);

    }
        public function edit($id)
    {
        return view('partials.edit', [
            'data' =>$this->pelanggan->find($id),
        ]);

    }

    public function store(Request $request)
    {
        $this->pelanggan->create($request->all());
        return redirect('/pelanggan');
    }

    public function show($id)
    {
        return view('partials.detail', [
            'data' => $this->pelanggan->find($id),
        ]);
    }

    public function update($id, Request $request)
    {
        $this->pelanggan->update($id, $request->all());
        return redirect('/pelanggan');
    }

    public function destroy($id)
    {
        return $this->pelanggan->delete($id);
    }
}
