<?php

namespace App\Http\Controllers;

use App\Models\Topics;
use App\Http\Requests\StoreTopicsRequest;
use App\Http\Requests\UpdateTopicsRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class TopicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        return new JsonResponse(Topics::getAll());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTopicsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTopicsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     *      * @return JsonResponse
     */
    public function show($id): JsonResponse
    {
        $topic = Topics::findOrFail($id)->get();
        return new JsonResponse($topic);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Topics  $topics
     * @return \Illuminate\Http\Response
     */
    public function edit(Topics $topics)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTopicsRequest  $request
     * @param  \App\Models\Topics  $topics
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTopicsRequest $request, Topics $topics)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Topics  $topics
     * @return \Illuminate\Http\Response
     */
    public function destroy(Topics $topics)
    {
        //
    }
}
