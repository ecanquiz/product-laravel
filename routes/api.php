<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    AuthController,
    AuthMenuController,
    UserController,
    TokenController,
    AvatarController,
    MenuController,
    RoleController,
    CategoryController,
    MarkController,
    ProductController,
    PresentationController
};

/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');*/


Route::post('/sanctum/token', TokenController::class);
Route::middleware(['auth:sanctum'])->group(function () {
    //Route::prefix('users')->middleware(['role:admin'])->group(function () {
    Route::prefix('users')->group(function () {
       Route::get('/auth', AuthController::class);
       Route::get('/auth-menu', AuthMenuController::class);
       Route::get('/{user}', [UserController::class, 'show']);        
       Route::get('/', [UserController::class, 'index']);
       Route::post('/', [UserController::class, 'store']);
       Route::post('/{user}', [UserController::class, 'update']);
       Route::delete('/{id}', [UserController::class,'destroy']);
       Route::post('/auth/avatar', [AvatarController::class, 'store']);
    });
       
    Route::prefix('menus')->group(function () {
        Route::get('/', [MenuController::class, 'index']);
        Route::get('/children/{menuId}', [MenuController::class, 'children']);
        Route::post('/', [MenuController::class, 'store']);  
        Route::put('/{menu}', [MenuController::class, 'update']);
        Route::delete('/{id}', [MenuController::class,'destroy']);
    });
   
    Route::prefix('roles')->group(function () {
        Route::get('/helperTables', fn() => response()->json([
            "roles" => \App\Models\Role::get()
        ], 200));
        Route::get('/{role}', [RoleController::class, 'show']);
        Route::get('/', [RoleController::class, 'index']);       
        Route::post('/', [RoleController::class, 'store']);        
        Route::put('/{role}', [RoleController::class, 'update']);
        Route::delete('/{id}', [RoleController::class,'destroy']);        
    });
});

Route::prefix('category')->group(function () {
    Route::get('/get/{type}/{value?}', [CategoryController::class, 'get']);
    Route::middleware(['auth:sanctum'])->group(function () {
        Route::post('/regist', [CategoryController::class, 'regist']);
        Route::delete('/remove/{id}', [CategoryController::class, 'destroy']);
    });
});

Route::prefix('marks')->group(function () {
  Route::get('/', [MarkController::class, 'index']);
  Route::get('/list', [MarkController::class, 'list']);
  Route::get('/{mark}', [MarkController::class, 'show']);
  Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/', [MarkController::class, 'store']);
    Route::put('/{mark}', [MarkController::class, 'update']);
    Route::delete('/{id}', [MarkController::class,'destroy']);
  });
});

Route::prefix('products')->group(function () {
  Route::get('/', [ProductController::class, 'index']);  
  Route::get('/{product}', [ProductController::class, 'show']);
  Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/', [ProductController::class, 'store']);
    Route::put('/{product}', [ProductController::class, 'update']);
    Route::delete('/{id}', [ProductController::class,'destroy']);
  });
});

Route::get('/presentation-search', [PresentationController::class,'search']);
Route::prefix('presentations')->group(function () {
  Route::get('/{presentationId}/only-one', [PresentationController::class, 'showOnlyOneByPresentation']);
  Route::get('/{productId}/all', [PresentationController::class, 'showAllByProduct']);
  Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/', [PresentationController::class, 'store']);
    Route::put('/{presentation}', [PresentationController::class, 'update']);
    Route::delete('/{id}', [PresentationController::class,'destroy']);
  });
});
Route::post('/presentation-fileupload/{presentation}', [PresentationController::class,'fileUpload']);  

Route::prefix('error')->group(function () {
    Route::get('/not-auth', function(){        
        abort(403, 'This action is not authorized.');        
    });

    Route::get('/not-found', function(){        
        abort(404, 'Page not found.');        
    });

    Route::get('/', function(){        
        abort(500, 'Something went wrong');        
    });
    /*Route::get('/custom', function(){
        throw new \App\Exceptions\CustomException('Error: Levi Strauss & CO.', 501);
    });*/
});

