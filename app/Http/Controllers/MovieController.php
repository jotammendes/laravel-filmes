<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('index', compact('movies'));
    }


    public function create()
    {
        $countries = Country::all();
        return view('create',compact('countries'));

    }


    public function store(Request $request)
    {

        $dados = $request->all();

        $dados['image'] = $request->file('image')->store('movies','public');

        Movie::create($dados);

        return redirect(route('movie.index'));
    }


    public function search(Request $request)
    {

        $movies = Movie::where('title', 'like' ,'%'  . $request->title .'%' )->get();

        return view('index',compact('movies'));
    }


    public function edit($id)
    {

        $movie = Movie::find($id);

        return view('edit',compact('movie'));
    }

    public function destroy($id)
    {
        $movie = Movie::find($id);
        // use Illuminate\Support\Facades\Storage;
        Storage::delete('public/' . $movie->image);
        $movie->delete();
        return redirect(route('movie.index'));
    }


    public function update(Request $request,$id)
    {
        $movie = Movie::find($id);

        $dados = $request->all();

        if($request->hasFile('image')){
            Storage::delete('public/' . $movie->image);
            $dados['image'] = $request->file('image')->store('movies','public');
        }


        $movie->update($dados);

        return redirect(route('movie.index'));
    }
}
