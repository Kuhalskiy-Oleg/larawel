<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AuthorArticle;


class AuthorArticleController extends Controller
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



    public function articlesOpenAuthor(string $slug)
    {
        $variable_slug = $slug??null;
        $valid_slug = $this->emptyStringValidRequest($variable_slug);
    	$author = AuthorArticle::where('slug', $valid_slug)->first();

    	if (!$author) {
    		return abort(404);
    	}

    	return view('articles/author_show', compact('author'));
    }



    public function authorsAllAuthors()
    {
    	$authors = AuthorArticle::paginate(12);
    	return view('authors/authors', compact('authors'));
    }



    public function authorsOpenAuthor(string $slug)
    {
        $variable_slug = $slug??null;
        $valid_slug = $this->emptyStringValidRequest($variable_slug);
    	$author = AuthorArticle::where('slug', $valid_slug)->first();

    	if (!$author) {
    		return abort(404);
    	}

    	return view('authors/author_show', compact('author'));
    }



    public function authorsSearchAuthor(Request $request)
    {
    	$search_FIO = $request['FIO']??null;
        $valid_search_FIO = $this->emptyStringValidRequest($search_FIO);

    	$search_author = AuthorArticle::where('FIO', $valid_search_FIO)->get();
    	$found_name = ($search_author[0]->FIO)??null;
   		
   		if(isset($found_name)){
   			return view('authors/search_author', compact('search_author'));
   		}else{
   			echo "<script>alert('Такого автора не существует')</script>";
   			return back();
   		}
   	} 
}
