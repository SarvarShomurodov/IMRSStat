<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewFromRequest;
use App\Models\News;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NewsController extends Controller
{
    public function clientindex(): View
    {
        $news = News::all();
        return view('client.index',compact('news'));

    }

    public function index(): View
    {
        $news = News::all();
        return view('admin.news.index',compact('news'));
    }

    public function create(): View
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'required|image|max:2048', // 2MB Max
            'date' => 'required|max:255',
        ]);

        $imagePath = $request->file('image')->store('news_images', 'public');

        News::create([
            'name' => $request->name,
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
            'date' => $request->date,
        ]);

        return redirect()->route('news.index')->with('success', 'News article created successfully.');
    }
}
