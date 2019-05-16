<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Biodata;

class BiodataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
    public function show($id)
    {
        $biodata=Biodata::find($id);
        return view('biodata.detail',compact('biodata'));
    } 
    public function edit($id)
    {
        $biodata=Biodata::find($id);
        return view('biodata.edit',compact('biodata'));
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
    public function update(Request $request,$id)
    {
 
        $this->validate($request,[
            'namaSiswa'=>'required',
            'alamatSiswa'=>'required'
        ]);
        $biodata=Biodata::find($id);
        $biodata->namaSiswa=$request->get('namaSiswa');
        $biodata->alamatSiswa=$request->get('alamatSiswa');
        $biodata->save();
        return redirect()->route('biodata.index')->with('success','Update biodata successfully');
    }
    public function destroy($id)
    {
        $biodata=Biodata::find($id);
        $biodata->delete();
        return redirect()->route('biodata.index')->with('success','Biodata Siswa deleted success');
    }
}
