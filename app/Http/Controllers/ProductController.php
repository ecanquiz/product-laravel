<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use App\Models\{
    Product,
    Presentation
};
use App\Http\Services\Product\{
    IndexProductService,
    StoreProductService,
    UpdateProductService
};
use App\Http\Requests\Product\{
    StoreProductRequest,
    UpdateProductRequest
    
};
use App\Http\Resources\ProductResource;

class ProductController extends Controller
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
            return IndexProductService::execute($request);            
        //}
        //return  response()->json(["message" => "Forbidden"], 403);
    }

    public function show(Product $product): JsonResponse
    {
        return response()->json($product, 200);
    }

    public function update(UpdateProductRequest $request, Product $product): JsonResponse
    {        
        //if (Auth::user()->isAdmin()) {
            return UpdateProductService::execute($request, $product);
        //}
        //return  response()->json(["message" => "Forbidden"], 403);
    }

    public function store(StoreProductRequest $request): JsonResponse
    {
        //if (Auth::user()->isAdmin()) {
            return StoreProductService::execute($request);
        //}
        //return  response()->json(["message" => "Forbidden"], 403);
    }

    public function destroy(Request $request): JsonResponse
    {
        $count = Presentation::where('product_id', $request->id)->count();           
        if (!$count){        
            Product::destroy($request->id);
            return response()->json(204);            
        }
        return  response()->json(["message" => "Sorry, there are $count associated records"], 403);
    }

    /*public function get(Request $request)
    {
        return Product::get($request);
    }

    public function index()
    {
        $products = Product::get((object)['type'=>'list']);
        return view('product.index', compact('products'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function show(Product $product) { }

    public function edit(Request $request)
    {
        //$product = Product::get((object)[
        //    'type'=>'regist',
        //    'value'=>$request->id
        //]);
        $prod = (object)['id' => $request->id ];
        return view('product.edit', compact('prod'));
    }

    public function regist(Request $request)
    {
        return Product::regist($request);
    }

    public function destroy(Product $product) { }    
    
    public function photo(Request $request){
        //$name = $request->photo->getClientOriginalName();
        $ext = $request->photo->getClientOriginalExtension();
        $name = 'productId_' . $request->productId;   
        $request->photo->storeAs('public/product', $name . '.' . $ext); 
        $product = Product::find($request->productId);
        $product->photo = $name . '.' . $ext;
        return $product->save();
    }*/
    
    /////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    //public function index()
    //{
    //    return view('product::index');
    //}

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    //public function create()
    //{
    //    return view('product::create');
    //}

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    //public function store(Request $request)
    //{
        //
    //}

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    //public function show($id)
    //{
    //    return view('product::show');
    //}

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    //public function edit($id)
    //{
    //    return view('product::edit');
    //}

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    //public function update(Request $request, $id)
    //{
    //    //
    //}

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    //public function destroy($id)
    //{
    //    //
    //}
}
