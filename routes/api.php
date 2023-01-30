<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Food;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/// a route for getting all popular food items
Route::get('/foods/popular', function(){
    return Food::all();
});

/// a route for getting all popular food items
Route::get('/foods/popular/{id}', function( $hij){
    return Food::find($hij);
});



/// a route for posting a new popular food item

Route::post('/foods/popular', function(){

    /// here we will create a new popular food record in the database
    /// and return the new record
    return Food::create([

        'id' => request('id'),
        'name' => request('name'),
        'description' => request('description'),
        'price' => request('price'),
        'stars' => request('stars'),
        'image' => request('image'),
        'location' => request('location'),
        'type_id' => request('type_id'),
    ]);
});


/// a route for updating apopular food item

Route::put('/foods/popular/{food}', function(Food $food){

   /// we will update the record here

   $success =  $food->update([

        'id' => request('id'),
        'name' => request('name'),
        'description' => request('description'),
        'price' => request('price'),
        'stars' => request('stars'),
        'image' => request('image'),
        'location' => request('location'),
        'type_id' => request('type_id'),
    ]);
/// and we will return a success message here

    return ['success' => $success];
});


// a route for deleting apopular food item

Route::delete('/foods/popular/{food}', function(Food $food){
   /// we will delete it here from the database
    $success =  $food->delete();

/// and we will return a success message here
     return ['success' => $success];
 });
 