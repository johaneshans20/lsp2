<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index', [
            'title' => 'Beranda',
            'kursus' => Kursus::latest()->get()
        ]);
    }
}
