<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use App\Models\Mark;
use App\Http\Services\Mark\{
    IndexMarkService,
    StoreMarkService,
    UpdateMarkService
};
use App\Http\Requests\Mark\{
    StoreMarkRequest,
    UpdateMarkRequest
    
};
use App\Http\Resources\MarkResource;

class MarkController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request): JsonResponse
    {
        //if (Auth::user()->isAdmin()) {
            return IndexMarkService::execute($request);            
        //}
        //return  response()->json(["message" => "Forbidden"], 403);
    }

    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function list(Request $request): JsonResponse
    {
        //if (Auth::user()->isAdmin()) {
            return response()->json(Mark::all());            
        //}
        //return  response()->json(["message" => "Forbidden"], 403);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Modules\Product\Http\Requests\Mark\StoreMarkRequest $request
     * @return \Illuminate\Http\JsonResponse
     */ 
    public function store(StoreMarkRequest $request): JsonResponse
    {
        //if (Auth::user()->isAdmin()) {
            return StoreMarkService::execute($request);
        //}
        //return  response()->json(["message" => "Forbidden"], 403);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Modules\Product\Http\Resources\MarkResource | \Illuminate\Http\Response
     */
    public function show(Mark $mark): MarkResource | Response
    {
        //if (Auth::user()->isAdmin()) {
          return new MarkResource($mark);
        //}
        //return  response()->json(["message" => "Forbidden"], 403);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  Modules\Product\Http\Requests\Mark\UpdateMarkRequest $request
     * @param  Modules\Product\Entities\Mark; $mark
     * @return \Illuminate\Http\JsonResponse
     */     
    public function update(UpdateMarkRequest $request, Mark $mark): JsonResponse
    {
        //if (Auth::user()->isAdmin()) {
            return UpdateMarkService::execute($request, $mark);
        //}
        //return  response()->json(["message" => "Forbidden"], 403);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Request $request): JsonResponse
    {      
        //if (Auth::user()->isAdmin()) {
            Mark::destroy($request->id);
            return response()->json(204);            
        //}
        return  response()->json(["message" => "Forbidden"], 403);
    }
    
}
