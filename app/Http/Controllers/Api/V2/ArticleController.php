<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleFormRequest;
use App\Http\Resources\ArticleResource;
use App\Http\Resources\AllData\ArticleAllDataResource;

class ArticleController extends Controller
{   
    /**
     * @OA\Get(
     *     path="/api/V2/articles?page={number page}&sort={category slug}&nameAuthor={name author}&titleCategory={title category}&titleArticle={title article}",
     *     summary="Get list articles",
     *     description="",
     *     tags={"Articles"},
     *     @OA\Parameter(
     *         name="number page",
     *         in="path",
     *         description="Number page",
     *         required=false,  
     *     ),
     *     @OA\Parameter(
     *         name="category slug",
     *         in="path",
     *         description="Sorting articles by category slug: all, sport, futbol, politika ...",
     *         required=false,
     *     ),
     *     @OA\Parameter(
     *         name="name author",
     *         in="path",
     *         description="Search for an article by name author",
     *         required=false,
     *     ),
     *     @OA\Parameter(
     *         name="title category",
     *         in="path",
     *         description="Search for an article by title category: Спорт, Футбол, Политика ...",
     *         required=false,
     *     ),
     *     @OA\Parameter(
     *         name="title article",
     *         in="path",
     *         description="Search for an article by title article",
     *         required=false,
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\Schema(
     *             type="array",
     *             @OA\Items(ref="#/definitions/Article")
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
    public function index(ArticleFormRequest $request)
    {
        // если есть переменные запроса то отправим данные в метод сортировки
        if (count($request->query()) > 0) {           
            $articles = Article::sort(
                $request->sort ?? 'all', 
                $request->validated()['nameAuthor'] ?? null,
                $request->validated()['titleArticle'] ?? null,
                $request->validated()['titleCategory'] ?? null,
            );  
            if ($articles->count() == 0) {
                
                return abort(404);
            }                  
        } else {
            $articles = Article::paginate(5);
        }

        return ArticleResource::collection($articles);
    }


    /**
     * @OA\Get(
     *     path="/api/V2/articles/{id}",
     *     summary="Get author information by id",
     *     description="Get article information by id",
     *     tags={"Articles"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Article id",
     *         required=true,
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\Schema(ref="#/definitions/Article"),
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
        ArticleAllDataResource::withoutWrapping();

        return new ArticleAllDataResource(Article::findOrFail($id));
    }
}
