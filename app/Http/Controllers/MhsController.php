<?php

namespace App\Http\Controllers;

use App\Models\Mhs;
use Illuminate\Http\Request;

class MhsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $mhs = Mhs::all();
        $mhs = Mhs::latest()->paginate(5);
        return view('mhs.index', compact('mhs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mhs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'npm' => 'required',
            'nama' => 'required',
            'jurusan' => 'required',
            'alamat' => 'required',
        ]);

        Mhs::create($request->all());
        return redirect()->route('mhs.index')->with('success', 'Data mahasiswa telah dibuat!');
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
        $mhs = Mhs::find($id);
        return view('mhs.edit', compact('mhs'));
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
        $request->validate([
            'npm' => 'required',
            'nama' => 'required',
            'jurusan' => 'required',
            'alamat' => 'required',
        ]);
        
        $mhs = Mhs::find($id);
        $mhs->update($request->all());
        return redirect()->route('mhs.index')->with('success', 'Data mahasiswa telah diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mhs = Mhs::find($id);
        $mhs->delete();
        return redirect()->route('mhs.index')->with('success', 'Data mahasiswa telah diupdate!');
    }
}
