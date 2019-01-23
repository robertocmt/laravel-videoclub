<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use Illuminate\Support\Facades\Auth;

class CatalogController extends Controller
{
    public function getIndex()
    {
    	return view('catalog.index')->with('pelicula', Movie::all());
    }

    public function getShow($id)
    {
    	return view('catalog.show')->with('pelicula', Movie::findOrFail($id));
    }

    public function getCreate()
    {
    	return view('catalog.create');
    }

    public function getEdit($id)
    {
    	return view('catalog.edit', array('pelicula'=>Movie::findOrFail($id)));
    }

    public function postCreate(Request $request)
    {
    	$pelicula = new Movie();
    	$pelicula->title = $request->get('title');
    	$pelicula->year = $request->get('year');
    	$pelicula->director = $request->get('director');
    	$pelicula->poster = $request->get('poster');
    	$pelicula->synopsis = $request->get('synopsis');
    	$pelicula->save();
    	return redirect('/catalog');
    }
    public function putEdit(Request $request, $id){
    	$pelicula = Movie::findOrFail($id);
    	$pelicula->title = $request->get('title');
    	$pelicula->year = $request->get('year');
    	$pelicula->director = $request->get('director');
    	$pelicula->poster = $request->get('poster');
    	$pelicula->synopsis = $request->get('synopsis');
    	$pelicula->save();
    	return redirect('/catalog/show/'.$id);
    }
}
