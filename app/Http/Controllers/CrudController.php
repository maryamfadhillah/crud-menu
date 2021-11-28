<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CrudController extends Controller
{
    public function index(Menu $dataMenu){

        $dataMenu = Menu::latest()->paginate('5');
        return view('index', compact('dataMenu'))->with('i', (request()->input('page', 1) -1) * 5);

    }

    // tampilan create
    public function create()
    {
        return view('create');
    }

    // simpan data ke database
    public function store(Request $request){

        $request->validate([
            'menu' => 'required',
            'desc' => 'required',
            'harga' => 'required',
        ]);

        $input = $request->all();
        Menu::create($input);
        return redirect()->route('menu.index')->with('success', 'Menu berhasil ditambahkan');
    }

    public function show(Menu $dataMenu)
    {
        return view('menu', compact('dataMenu',));
    }

    // tampilan edit
    public function edit($dataMenu)
    {
        $dataMenu = DB::table('menu')
        ->where('id', '=', $dataMenu)
        ->get();
        
        return view('edit', compact('dataMenu'));
    }

    // proses update
    public function update(Request $request, $id)
    {
            $student = Menu::find($id);
            $student->menu = $request->input('menu');
            $student->desc = $request->input('desc');
            $student->harga = $request->input('harga');
            $student->update();
            return redirect()->route('menu.index')->with('success','Menu berhasil diupdate');
    }

    // delete
    public function destroy($dataMenu)
    {
        $dataMenu = DB::table('menu')
        ->where('id', '=', $dataMenu)
        ->delete();

        return redirect()->route('menu.index')->with('success', 'Menu berhasil dihapus');
    }
}
