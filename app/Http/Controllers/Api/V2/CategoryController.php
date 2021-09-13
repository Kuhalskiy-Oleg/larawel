<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Controller;
use App\Models\CategoryArticle;
use Illuminate\Http\Request;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\AllData\CategoryAllDataResource;

class CategoryController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/V2/categories?page={number page}",
     *     summary="Get list authors",
     *     tags={"Categories"},
     *     @OA\Parameter(
     *         name="number page",
     *         in="path",
     *         description="Number page",
     *         required=false,  
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\Schema(
     *             type="array",
     *             @OA\Items(ref="#/definitions/CategoryArticle")
     *         ),
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Not Found",
     *     ),
     * )
     */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = CategoryArticle::all();

        return CategoryResource::collection($categories);
    }


    /**
     * @OA\Get(
     *     path="/api/V2/categories/{id}",
     *     summary="Get category information by id",
     *     description="Get category information by id",
     *     tags={"Categories"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Category id",
     *         required=true,
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\Schema(ref="#/definitions/CategoryArticle"),
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Not Found",
     *     ),
     * )
     */
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {   
        CategoryAllDataResource::withoutWrapping();

        return new CategoryAllDataResource(CategoryArticle::findOrFail($id));
    }
}
