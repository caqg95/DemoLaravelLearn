<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Biodata;

class BiodataController extends Controller
{
    public function index()
    {
        $biodatas = Biodata::latest()->paginate(5);
        return view('biodata.index', compact('biodatas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('biodata.create');
    } 
    public function store(Request $request)
    {
 
        $this->validate($request,[
            'namaSiswa'=>'required',
            'alamatSiswa'=>'required'
        ]);
        Biodata::create($request->all());
        return redirect()->route('biodata.index')->with('success','New biodata created successfully');
    }
}
