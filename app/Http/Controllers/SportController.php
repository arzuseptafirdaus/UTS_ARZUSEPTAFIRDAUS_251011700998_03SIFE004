<?php

namespace App\Http\Controllers;

use App\Models\Sport;
use Illuminate\Http\Request;

class SportController extends Controller
{
    /**
     * Halaman Utama (Home)
     * Mengambil 4 data event highlight dan merender halaman utama (home-page)
     */
    public function home()
    {
        $highlightSports = Sport::latest()->take(4)->get();
        return view('sportify.page.home-page', compact('highlightSports'));
    }

    /**
     * Halaman Katalog Direktori Olahraga (Sport Page)
     */
   public function index(Request $request)
{
    $query = Sport::query();

    if ($request->filled('search')) {
        $searchTerm = $request->input('search');
        $query->where(function($q) use ($searchTerm) {
            $q->where('name', 'LIKE', '%' . $searchTerm . '%')
              ->orWhere('description', 'LIKE', '%' . $searchTerm . '%');
        });
    }

    if ($request->filled('category') && $request->category !== 'all') {
        $query->where('category', $request->category);
    }

    $sports = $query->latest()->get();

    return view('sportify.page.sport-page', compact('sports'));
}
    public function regulations()
    {
        return view('sportify.page.regulation-page');
    }

    public function about()
    {
        return view('sportify.page.about-page');
    }

    public function profile()
    {
        return view('sportify.page.profile-page');
    }
    
    public function show($id)
    {
        $sport = Sport::findOrFail($id);

        return view('sportify.page.detail-page', compact('sport'));
    }
}