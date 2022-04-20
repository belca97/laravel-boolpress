<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with(['category'])->get();  //stampa i valori dell'id delle categorie

        $posts = Post::paginate(2); // due elementi per pagina

        return response()->json(
            [
                'results' => $posts,
                'success' => true
            ]
        );

    }

    public function show($slug){      //$slug variabile passata dalla rotta definita nelle rotte create nell'api

        $post = Post::where('slug', '=', $slug)->with(['category', 'slug']);

        if($post) {
            return response()->json(
                [
                    'result' => $post,
                    'success' => true
                ]
                );
        } else {
            return response()->json(
                [
                    'result' => 'Nessun post disponibile',
                    'success' => false
                ]
                );
        };
    }
    //cancelliamo gli altri metodi  perchè la pagina in front-end sarà una pagina di sola lettura, non necessita di metodi di modifica o di vista
}
