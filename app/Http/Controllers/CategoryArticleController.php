<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryArticle;


class CategoryArticleController extends Controller
{

    private function validRequest($data) {
        $data = trim($data);             
        $data = stripslashes($data);     
        $data = strip_tags($data);   
        $data = htmlspecialchars($data); 
        return $data;
    }



    private function emptyStringValidRequest($data) 
    {
        return ($this->validRequest($data) == '') ? null : $this->validRequest($data);
    }



	public function categoriesAllCategories()
	{
		$categories = CategoryArticle::get()->toTree();
		return view('categories/categories', compact('categories'));
	}



    public function articlesOpenCategory(string $slug)
    {
        $variable_slug = $slug??null;
        $valid_slug = $this->emptyStringValidRequest($variable_slug);
    	$category = CategoryArticle::where('slug', $valid_slug)->first();
    	$parents_category = CategoryArticle::where('slug', $valid_slug)->first()->getParentsAttribute();

    	if (!$category) {
    		return abort(404);
    	}

    	return view('articles/category_show', compact('category','parents_category'));
    }



    public function categoriesOpenCategory(string $slug)
    {
        $variable_slug = $slug??null;
        $valid_slug = $this->emptyStringValidRequest($variable_slug);
    	$category = CategoryArticle::where('slug', $valid_slug)->first();

    	if (!$category) {
    		return abort(404);
    	}

    	return view('categories/category_show', compact('category'));
    }

}
