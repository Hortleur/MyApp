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
     * Display the specified resource.
     *
     *      * @return JsonResponse
     */
    public function show($id): JsonResponse
    {
        $topic = Topics::findOrFail($id)->get();
        return new JsonResponse($topic);
    }
}
