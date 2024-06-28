<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Expected;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ExpectedController extends Controller
{
    public function index(Request $request): View
    {
        // Get sort order from request, default to 'asc'
        $sortOrder = $request->input('sortOrder', 'asc');

        // Apply sorting and paginate the results
        $expects = Expected::orderBy('kasblar', $sortOrder)->paginate(20);

        // Ensure pagination links carry over the current sorting order
        $expects->appends(['sortOrder' => $sortOrder]);

        return view('client.expected', compact('expects'));
    }
}
