<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index()
    {
        $films = Film::latest()->get();
        return view('films.index', compact('films'));
    }

    public function create()
    {
        return view('films.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required',
            'sutradara' => 'required',
            'tahun_rilis' => 'required|integer',
            'genre' => 'required',
            'durasi' => 'required|integer'
        ]);

        Film::create($validated);

        return redirect()->route('films.index')
            ->with('success', 'Film berhasil ditambahkan');
    }

    public function edit(Film $film)
    {
        return view('films.edit', compact('film'));
    }

    public function update(Request $request, Film $film)
    {
        $validated = $request->validate([
            'judul' => 'required',
            'sutradara' => 'required',
            'tahun_rilis' => 'required|integer',
            'genre' => 'required',
            'durasi' => 'required|integer'
        ]);

        $film->update($validated);

        return redirect()->route('films.index')
            ->with('success', 'Data film berhasil diperbarui');
    }

    public function destroy(Film $film)
    {
        $film->delete();

        return redirect()->route('films.index')
            ->with('success', 'Film berhasil dihapus');
    }
}
