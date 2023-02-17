<?php

namespace App\Http\Controllers;

use App\Models\Poem;
use App\Http\Requests\StorePoemRequest;
use App\Http\Requests\UpdatePoemRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Request;

class PoemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): JsonResponse
    {
        return new JsonResponse(Poem::getAll());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Poem  $poem
     * @return \Illuminate\Http\Response
     */
    public function show($id): JsonResponse
    {
        $poem = Poem::findOrFail($id)->get();
       return new JsonResponse($poem);
    }

    public function getAllByGenre($genreId): JsonResponse
    {
        $poem = Poem::getAllByGenre($genreId);
        return new JsonResponse($poem);
    }
}
