<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoryArticle;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = CategoryArticle::all()->toTree();

        return view('api.categories.categories', compact('categories'));
    }


    public function show(string $slug)
    {
        $category = CategoryArticle::where('slug', $slug)->first();

        if (! $category) {

            return abort(404);
        }

        return view('api.categories.category_show', compact('category'));
    }
}
