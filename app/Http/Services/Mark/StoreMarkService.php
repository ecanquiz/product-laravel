<?php
namespace App\Http\Services\Mark;

use Illuminate\Http\JsonResponse;
use App\Models\Mark;
use App\Http\Requests\Mark\StoreMarkRequest;

class StoreMarkService
{
  
    static public function execute(StoreMarkRequest $request): JsonResponse
    {     
        $mark = new Mark();
        $mark->name = $request->name;        
        $mark->save();

        return response()->json(["message"=> "Marca creada"], 201);
    }

}
