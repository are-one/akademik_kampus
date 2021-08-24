<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\Matakuliah;

class MatakuliahController extends Controller
{
    function json()
    {
        return DataTables::of(Matakuliah::all())
        ->addColumn('action', function ($row) {
            return '<a href="/matakuliah/'.$row->kode_mk.'/edit" class="btn btn-primary btn-sm">Edit</a>';
        })
        ->make(true);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('matakuliah.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('matakuliah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $matakuliah = New Matakuliah();
        $matakuliah->create($request->all());
        return redirect('/matakuliah');
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
        $data['matakuliah'] = Matakuliah::where('kode_mk',$id)->first();
        return view('matakuliah.edit', $data);
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
        $matakuliah = Matakuliah::where('kode_mk', $id);
        $matakuliah->update($request->except('_method', '_token'));
        return redirect('matakuliah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}