<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FaqController extends Controller
{
    public function index(Request $request): View
    {
        // Get sort order from request, default to 'asc'
        $sortOrder = $request->input('sortOrder', 'asc');

        // Apply sorting and paginate the results
        $faqs = Faq::orderBy('kasblar', $sortOrder)->paginate(20);

        // Ensure pagination links carry over the current sorting order
        $faqs->appends(['sortOrder' => $sortOrder]);

        return view('client.faq', compact('faqs'));
    }
}
