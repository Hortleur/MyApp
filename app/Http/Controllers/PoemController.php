<?php

namespace App\Http\Controllers;

use App\Http\Resources\PoemCollection;
use App\Http\Resources\PoemResource;
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePoemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePoemRequest $request)
    {
        //
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Poem  $poem
     * @return \Illuminate\Http\Response
     */
    public function edit(Poem $poem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePoemRequest  $request
     * @param  \App\Models\Poem  $poem
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePoemRequest $request, Poem $poem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Poem  $poem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Poem $poem)
    {
        //
    }
}
