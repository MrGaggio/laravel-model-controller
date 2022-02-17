<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//con questo percorso rende disponibile movie

use App\Movie;




class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        // prova stampa
        // dd($movies);
        return view('home');
    }
}


// 7 All’interno della funzione index() del controller, recuperate tutti i film dal database e passateli alla view, che quindi li visualizzerà a schermo, tramite delle card.