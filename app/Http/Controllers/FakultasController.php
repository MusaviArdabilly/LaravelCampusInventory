<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\LengthAwarePaginator;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\FakultasImport;
use Illuminate\Http\Request;
use App\Fakultas;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Fakultas::when($request->searchInput, function($query) use($request){
            $query->where('faculty', 'LIKE', '%'.$request->searchInput.'%');
        })->paginate(10);

        return view('fakultas.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function import(Request $request)
    {
        $this->validate($request, [
            'excel' => 'required'
        ]);

        $file = $request->file('excel');
        $filename = rand().$file->getClientOriginalName();
        $file->move('uploads/Fakultas/',$filename);
        Excel::import(new FakultasImport, public_path('uploads/Fakultas/'.$filename));

        return redirect('/fakultas')  ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'faculty' => 'required|unique:fakultas',
        ]);

        $fakultas = new Fakultas;
        $fakultas->faculty = $request->faculty;
        $fakultas->save();

        return redirect('/fakultas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) 
    {
        $fakultas = Fakultas::find($id);

        return view('fakultas.edit', compact('fakultas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'faculty' => 'required|unique:fakultas',
        ]);
        
        $fakultas = Fakultas::find($id);
        $fakultas->faculty = $request->faculty;
        $fakultas->save();

        return redirect('/fakultas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fakultas = Fakultas::find($id);
        $fakultas->delete();

        return redirect('/fakultas');
    }
}
