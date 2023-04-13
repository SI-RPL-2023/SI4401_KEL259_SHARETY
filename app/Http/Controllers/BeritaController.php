<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        return view('berita.index', [
            'data' => Berita::inRandomOrder()
        ]);
    }

    public function detail($slug)
    {
        $data = Berita::where('slug', $slug)->first();
        return view('berita.detail', [
            'data' => $data
        ]);
    }
}
