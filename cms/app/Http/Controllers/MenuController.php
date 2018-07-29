<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // index van Menu wordt weergegeven.
    public function index()
    {
        $menus = Menu::all();

        return view('modules.menus.index', compact('menus'));
    }

}
