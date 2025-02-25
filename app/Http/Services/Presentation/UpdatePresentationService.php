<?php
namespace App\Http\Services\Presentation;

use Illuminate\Http\JsonResponse;
use App\Models\Presentation;
use App\Http\Requests\Presentation\UpdatePresentationRequest;

class UpdatePresentationService
{
  
    static public function execute(UpdatePresentationRequest $request, Presentation $presentation): JsonResponse
    {     
        $presentation->product_id = $request->product_id;
        $presentation->bar_cod = $request->bar_cod;
        $presentation->packing = $request->packing_json;
        $presentation->status = $request->status;
        
        $presentation->save();        

        return response()->json([
            'message' => 'Presentación actualizada'            
        ], 200);
    }

}
