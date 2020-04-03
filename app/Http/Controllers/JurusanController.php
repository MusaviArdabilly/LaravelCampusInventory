<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Jurusan;
use App\Fakultas;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index(Request $request)
    // {
    //     $fakultas = Fakultas::all();
    //     $data = Jurusan::when($request->searchInput, function($query) use($request){
    //         $query->where('name', 'LIKE', '%'.$request->searchInput.'%');
    //     })->paginate(10);

    //     return view('jurusan.index', compact('data', 'fakultas'));
    // }

    public function search(Request $request){
        $fakultas = Fakultas::all();
        $search = $request->searchInput;
        $searchFakultas = DB::table('Fakultas')
                            ->select('id')
                            ->where('name', 'LIKE', '%'.$search.'%')
                            ->first();

        if(is_object($searchFakultas)){
            $src = get_object_vars($searchFakultas);
            $data = DB::table('Jurusan')->where('id_fakultas', '=', $src)->paginate(10);

            return view('jurusan.index', compact('data','fakultas'));
        }
    }

    public function index(Request $request){
        $data = Jurusan::paginate(10);
        $fakultas = Fakultas::all();

        return view('jurusan.index', compact('data','fakultas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jurusan = new Jurusan;
        $jurusan->name = $request->name;
        $jurusan->id_fakultas = $request->id_fakultas;
        $jurusan->save();

        return redirect('/jurusan');
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
        $jurusan = Jurusan::findOrFail($id);
        $fakultas = Fakultas::all();
        return view('jurusan.edit', compact('fakultas', 'jurusan'));

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
        $jurusan = Jurusan::findOrFail($id);
        $jurusan->name = $request->name;
        $jurusan->id_fakultas = $request->id_fakultas;
        $jurusan->save();

        return redirect('/jurusan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jurusan = Jurusan::find($id);
        $jurusan->delete();

        return redirect('/jurusan');
    }
}
