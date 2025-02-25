<?php
namespace App\Http\Services\Presentation;

use Illuminate\Http\JsonResponse;
use App\Models\Presentation;
use App\Http\Requests\Presentation\StorePresentationRequest;

class StorePresentationService
{
  
    static public function execute(StorePresentationRequest $request): JsonResponse
    {     
        $presentation = new Presentation();

        $presentation->product_id = $request->product_id;
        $presentation->bar_cod = $request->bar_cod;
        $presentation->packing = $request->packing_json;
        $presentation->status = $request->status;        
        $presentation->save();
        $presentation->refresh();

        return response()->json([
            'message' => 'Presentación creada',
            'presentation_id' => $presentation->id
        ], 201);
    }

}
