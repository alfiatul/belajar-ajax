<?php

namespace App\Http\Controllers;

use App\Domain\Entities\Apoteker;
use App\Domain\Repositories\ApotekerRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ApotekerController extends Controller
{
    protected $apoteker;

    public function __construct(ApotekerRepository $apoteker)
    {
        $this->apoteker = $apoteker;
    }

    public function index($limit = 10)
    {
        return view('partials.apoteker.apoteker', [
            'apoteker' => $this->apoteker->getByPage($limit),
        ]);
    }
    public function getData($limit = 10)
    {
        return $this->apoteker->getData();
    }
    public function edit($id)
    {
        return view('partials.apoteker.edit', [
            'data' =>$this->apoteker->find($id),
        ]);

    }

    public function store(Request $request)
    {
        $this->apoteker->create($request->all());
        return redirect('/apoteker');
    }

    public function show($id)
    {
        return view('partials.apoteker.detail', [
            'data' => $this->apoteker->find($id),
        ]);
    }

    public function update($id, Request $request)
    {
        $this->apoteker->update($id, $request->all());
        return redirect('/apoteker');
    }

    public function destroy($id)
    {
        return $this->apoteker->delete($id);
    }
}
