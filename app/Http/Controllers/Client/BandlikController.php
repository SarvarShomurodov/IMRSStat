<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Bandlik;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BandlikController extends Controller
{
    public function index(): View
    {
        $banliks = Bandlik::all();
        return view('client.bandlik',compact('banliks'));
    }
}
