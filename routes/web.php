<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CategoryArticleController;
use App\Http\Controllers\AuthorArticleController;
use App\Models\Articles;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//главная страница
Route::get('/', function()
{
	return view('welcome');
});




//список статей
Route::get('/articles', [ArticlesController::class, 'articlesAllArticles']);

Route::get('/articles/article/{slug}', [ArticlesController::class, 'articlesOpenArticle'])->where('slug', '[-\w]+')->name('open_article');

Route::get('/articles/author/{slug}', [AuthorArticleController::class, 'articlesOpenAuthor'])->where('slug', '[-\w]+')->name('open_author');

Route::get('/articles/category/{slug}', [CategoryArticleController::class, 'articlesOpenCategory'])->where('slug', '[-\w]+')->name('open_category');

Route::post('/articles/search_article' , [ArticlesController::class, 'searchArticle'])->name('search_article');

Route::post('/articles' , [ArticlesController::class, 'sortArticle'])->name('sort_article');





//список категорий
Route::get('/categories', [CategoryArticleController::class, 'categoriesAllCategories']);

Route::get('/categories/{slug}', [CategoryArticleController::class, 'categoriesOpenCategory'])->where('slug', '[-\w]+')->name('categories_open_category');





//список авторов
Route::get('/authors', [AuthorArticleController::class, 'authorsAllAuthors']);

Route::get('/authors/{slug}', [AuthorArticleController::class, 'authorsOpenAuthor'])->where('slug', '[-\w]+')->name('authors_open_author');

Route::post('/authors/search_author' , [AuthorArticleController::class, 'authorsSearchAuthor'])->name('search_author');