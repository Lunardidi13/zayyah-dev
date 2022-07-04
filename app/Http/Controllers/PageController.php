<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function showIndex() {
        $items = DB::table('tbl_items')->get();
        return view('index', ['items' => $items]);
    }

    public function showAbout() {
        return view('layouts.about');
    }
}
