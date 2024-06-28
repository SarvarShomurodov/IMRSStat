<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Maosh;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MaoshController extends Controller
{
    public function index(): View
    {
        $maoshes = Maosh::all();
        return view('client.progress.engyuqorimaosh',compact('maoshes'));
    }
    public function index_prog(): View
    {
        $maoshes = Maosh::all();
        return view('client.progress.savollar',compact('maoshes'));
    }
}
