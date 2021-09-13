<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\CategoryArticle;
use Illuminate\Http\Request;
use App\Http\Resources\ArticleResource;
use App\Http\Resources\CategoryArticleResource;
use App\Models\Article;
use App\Http\Requests\ArticleFormRequest;

class ArticleController extends Controller
{
    public function index(ArticleFormRequest $request)
    {
        $categoryArticle = CategoryArticle::all()->toTree();

        // отправялем данные в метод сортировки
        if (count($request->query()) > 0) {           
            $articles = Article::sort(
                $request->sort ?? 'all', 
                $request->validated()['nameAuthor'] ?? null,
                $request->validated()['titleArticle'] ?? null,
                $request->validated()['titleCategory'] ?? null,
            );                    
        } else {
            $articles = Article::paginate(5);
        }

        if (isset($articles)) {
            $response = array(
                'status' => 'success',
                'articles' => $articles,
                'request' => $request->all(),
                'pagination' => $articles->appends(request()->query())->links("pagination::bootstrap-4")
            );
        }
            
        if ($request->ajax()) {

            return view('api.render.articles.render_articles',compact('response'))->render();
        }
 
        return view('api.articles.articles', compact('articles','categoryArticle'));   
    }


    public function show(string $slug)
    {
        $article = Article::where('slug', $slug)->first();

        if (! $article) {

            return abort(404);
        }

        return view('api.articles.article_show', compact('article'));
    }
}
