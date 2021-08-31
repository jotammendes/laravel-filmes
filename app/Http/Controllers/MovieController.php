<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        return view('movie.index', compact('movies'));
    }


    public function create()
    {
        return view('movie.create');
    }


    public function store(Request $request)
    {
        $data = $request->all();

        // Armazenar imagem
        $data['image'] = $request->file('image')->store('movies', 'public');

        $movie = Movie::create($data);


        return redirect(route('movie.index'));
    }


    public function search(Request $request)
    {
        $movies = Movie::where('title', 'LIKE', '%'.$request->title.'%')->get();

        return view('movie.index', compact('movies'));
    }


    public function edit($id)
    {
        $movie = Movie::find($id);

        return view('movie.edit',compact('movie'));
    }


    public function update(Request $request,$id)
    {
        $data = $request->all();
        $movie = Movie::find($id);

        // Se atualizou a imagem
        if ($request->hasFile('image')) {
            Storage::delete('public/' . $movie->image); //excluindo a imagem antiga
            $data['image'] = $request->file('image')->store('movies', 'public');
        }

        $movie->update($data);

        return redirect(route('movie.index'));
    }


    public function destroy($id)
    {
        $movie = Movie::find($id);

        Storage::delete('public/' . $movie->image); //excluindo a imagem

        $movie->delete();

        return redirect(route('movie.index'));
    }
}
