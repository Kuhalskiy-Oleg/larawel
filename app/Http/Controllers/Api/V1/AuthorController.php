<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AuthorArticle;
use App\Http\Requests\AuthorFormRequest;

class AuthorController extends Controller
{
    public function index(AuthorFormRequest $request)
    {
        // на страницу с авторами могут отправлятся данные с коллекцией объектов или всего один объект и для этого существуют разные способы отображения этих данных в view, для этого cделаем различая между этими объектами с помощью переменной $authors в которой будет массив где будет указано, кокой объект будет использоваться . в методе sort будет присвоено значение 'type' => 'resource', и в view будем использовать условия if чтобы различать пришедшие данные и обрабатывать их нужным способом
        $authors = [
            'type' => 'collection',
            'collection' => AuthorArticle::paginate(12)
        ];

        $nameAuthor = $request->validated()['nameAuthor'] ?? null;

        // отправялем данные в метод сортировки
        if (isset($nameAuthor)) {            
            $authors = AuthorArticle::sort($nameAuthor);                    
        }

        if ($authors['type'] == 'collection') {
            $response = array(
                'authors' => $authors,
                'pagination' => $authors['collection']->appends(request()->query())->links("pagination::bootstrap-4")
            );
        } elseif ($authors['type'] == 'resource') {
            $response = array(
                'authors' => $authors,
            );
        }
    
        if ($request->ajax()) {

            return view('api.render.authors.render_authors',compact('response'))->render();
        }

        return view('api.authors.authors', compact('authors'));
    }


    public function show(string $slug)
    {
        $author = AuthorArticle::where('slug', $slug)->first();

        if (! $author) {

            return abort(404);
        }

        return view('api.authors.author_show', compact('author'));
    }
}
