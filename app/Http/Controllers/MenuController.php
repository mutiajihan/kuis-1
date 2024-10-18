<?php

namespace App\Http\Controllers;

use App\Models\Menus;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    //
    public function index(){
        $menus = Menus::all();
        return response()->json($menus);
    }

    public function store(Request $request){
        $menu = new Menus;
        $menu->nama_menu = $request->nama_menu;
        $menu->harga = $request->harga;
        $menu->detail = $request->detail;
        $menu->save();
        return response()->json([
            $menu,
            "message" => "menu berhasil ditambahkan."
        ], 201);
    }

}
