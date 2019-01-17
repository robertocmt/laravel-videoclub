<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

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
}
