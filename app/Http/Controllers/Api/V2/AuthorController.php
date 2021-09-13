<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Controller;
use App\Models\AuthorArticle;
use Illuminate\Http\Request;
use App\Http\Requests\AuthorFormRequest;
use App\Http\Resources\AuthorResource;
use App\Http\Resources\AllData\AuthorAllDataResource;

class AuthorController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/V2/authors?page={number page}&nameAuthor={name author}",
     *     summary="Get list authors",
     *     tags={"Authors"},
     *     @OA\Parameter(
     *         name="number page",
     *         in="path",
     *         description="Number page",
     *         required=false,  
     *     ),
     *     @OA\Parameter(
     *         name="name author",
     *         in="path",
     *         description="Search for an author by name author",
     *         required=false,
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\Schema(
     *             type="array",
     *             @OA\Items(ref="#/definitions/AuthorArticle")
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
    public function index(AuthorFormRequest $request)
    {
        $authors = AuthorArticle::paginate(12);

        $nameAuthor = $request->validated()['nameAuthor'] ?? null;

        if (isset($nameAuthor)) {            
            $authors = AuthorArticle::where('name', $nameAuthor)->first();

            return new AuthorResource($authors);                   
        }

        return AuthorResource::collection($authors);
    }


    /**
     * @OA\Get(
     *     path="/api/V2/authors/{id}",
     *     summary="Get author information by id",
     *     description="Get author information by id",
     *     tags={"Authors"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Author id",
     *         required=true,
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\Schema(ref="#/definitions/AuthorArticle"),
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
        AuthorAllDataResource::withoutWrapping();

        return new AuthorAllDataResource(AuthorArticle::findOrFail($id));
    }
}
