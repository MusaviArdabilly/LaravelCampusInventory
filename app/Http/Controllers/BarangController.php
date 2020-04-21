<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\File;
use App\Exports\BarangExport;
use Illuminate\Http\Request;
use App\Barang;
use App\Ruangan;
use App\User;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Barang::when($request->searchInput, function($query) use($request){
            $query->where('item', 'LIKE', '%'.$request->searchInput.'%');
        })->paginate(10);
        $ruangan = Ruangan::all();
        $user = User::all();

        return view('barang.index', compact('data', 'ruangan', 'user'));
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
        $this->validate($request, [
            'item' => 'required',
            'total' => 'required',
            'broken' => 'required',
            'itempic' => 'required',
            'created_by' => 'required',
            'id_ruangan' => 'required'
        ]);

        $itempicture = 'barang-'.date('Ymdhis').'.'.$request->itempic->getClientOriginalExtension();
        $request->itempic->move('uploads', $itempicture);

        $barang = new Barang;
        $barang->item = $request->item;
        $barang->total = $request->total;
        $barang->broken = $request->broken;
        $barang->itempic =  $itempicture;
        $barang->created_by = $request->created_by;
        $barang->id_ruangan = $request->id_ruangan;
        $barang->save();

        return redirect('/barang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Barang::find($id);
        $ruangan = Ruangan::all();

        return view('barang.edit', compact('data', 'ruangan'));
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
            'item' => 'required',
            'total' => 'required',
            'broken' => 'required',
            'created_by' => 'required',
            'updated_by' => 'required',
            'id_ruangan' => 'required',
            'itempic' => 'required'
        ]);

        $barang = Barang::find($id);
        $barang->item = $request->item;
        $barang->total = $request->total;
        $barang->broken = $request->broken;
        $barang->created_by = $request->created_by;
        $barang->updated_by = $request->updated_by;
        $barang->id_ruangan = $request->id_ruangan;
        if( $request->itempic){
            $itempicture = 'barang-'.date('Ymdhis').'.'.$request->itempic->getClientOriginalExtension();
            $request->itempic->move('uploads', $itempicture);
            $barang->itempic = $itempicture;
        }
        $barang->save();

        return redirect('/barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = Barang::find($id);
        $barang->delete();

        return redirect('/barang');
    }

    public function export(Request $request){
        return Excel::download(new BarangExport, date("Y-m-d").'-Data Barang'.'.xlsx');
    }
}
