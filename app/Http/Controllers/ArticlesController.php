<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;
use App\Models\CategoryArticle;
use App\Models\AuthorArticle;

class ArticlesController extends Controller
{
     
    private function validRequest($data) 
    {
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



    public function articlesAllArticles()
    {
		$categoryArticle = CategoryArticle::get()->toTree();
    	$sum_table_articles = Articles::paginate(5);

    	return view('articles/articles', compact('sum_table_articles','categoryArticle'));
    }



    public function articlesOpenArticle(string $slug)
    {
        $variable_slug = $slug??null;
        $valid_slug = $this->emptyStringValidRequest($variable_slug);

    	$sum_table_articles = Articles::where('slug', $valid_slug)->first();

    	if (!$sum_table_articles) {
    		return abort(404);
    	}

    	return view('articles/article_show', compact('sum_table_articles'));
    }



    public function sortArticle(Request $request)
    {   
        $categoryArticle = CategoryArticle::get()->toTree();
        $select_categories = $request['categories']??null;
        $valid_select_categories = $this->emptyStringValidRequest($select_categories);

        if ($valid_select_categories == 'all') {
            $sum_table_articles = Articles::paginate(5);

            return view('articles/articles', compact('sum_table_articles','categoryArticle'));

        }else{
            $sum_table_articles = Articles::
            whereHas('CategoryArticle', function($q) use($valid_select_categories){
                $q->where('name', $valid_select_categories);
            })  
            ->paginate(5);

            return view('articles/articles', compact('sum_table_articles','categoryArticle'));
        }
    }



    public function searchArticle(Request $request)
    {	
    	$name_article = $request['name_article']??null;
    	$name_author = $request['FIO']??null;
    	$name_category = $request['name']??null;

        $valid_name_author = $this->emptyStringValidRequest($name_author);
        $valid_name_article = $this->emptyStringValidRequest($name_article);
        $valid_name_category = $this->emptyStringValidRequest($name_category);


        //если для поиска статьи введено только название статьи
    	if (isset($valid_name_article) && !isset($valid_name_author) && !isset($valid_name_category)) {
    		$search_article = Articles::where('name_article', $valid_name_article)->paginate(5);
    		$found_article = ($search_article[0]->name_article)??null;


        //если для поиска статьи введено только имя автора 
    	}elseif (isset($valid_name_author) && !isset($valid_name_article) && !isset($valid_name_category)) {
    		$search_article = Articles::
    		whereHas('AuthorArticle', function($q) use($valid_name_author){
    			$q->where('FIO', $valid_name_author);
    		}) 	
    		->paginate(5);
    		$found_article = ($search_article[0]->name_article)??null;


        //если для поиска статьи введено только название категории
    	}elseif (isset($valid_name_category) && !isset($valid_name_article) && !isset($valid_name_author)) {
    		$search_article = Articles::
    		whereHas('CategoryArticle', function($q) use($valid_name_category){
    			$q->where('name', $valid_name_category);
    		}) 	
    		->paginate(5);
    		$found_article = ($search_article[0]->name_article)??null;


        //если для поиска статьи введено название статьи и имя автора
    	}elseif (isset($valid_name_article) && isset($valid_name_author) && !isset($valid_name_category)) {
    		$search_article = Articles::where('name_article', $valid_name_article)
    		->whereHas('AuthorArticle', function($q) use($valid_name_author){
    			$q->where('FIO', $valid_name_author);
    		}) 		
    		->paginate(5);
    		$found_article = ($search_article[0]->name_article)??null;


    	//если для поиска статьи введено название категории и имя автора
    	}elseif (isset($valid_name_category) && isset($valid_name_author) && !isset($valid_name_article)) {
    		//объединяем таблицу articles с author_articles и category_articles 
    		$search_article = Articles::
    		whereHas('AuthorArticle', function($q) use($valid_name_author){
    			$q->where('FIO', $valid_name_author);
    		}) 	
    		->whereHas('CategoryArticle', function($q) use($valid_name_category){
    			$q->where('name', $valid_name_category);
    		}) 		
    		->paginate(5);
    		$found_article = ($search_article[0]->name_article)??null;


    	//если для поиска статьи введено название категории и название статьи
    	}elseif (isset($valid_name_category) && isset($valid_name_article) && !isset($valid_name_author)) {
    		$search_article = Articles::where('name_article', $valid_name_article)
    		->whereHas('CategoryArticle', function($q) use($valid_name_category){
    			$q->where('name', $valid_name_category);
    		}) 		
    		->paginate(5);
    		$found_article = ($search_article[0]->name_article)??null;


    	//если для поиска статьи заполнены все поля 
    	}elseif (isset($valid_name_article) && isset($valid_name_author) && isset($valid_name_category)) {
    		$search_article = Articles::where('name_article', $valid_name_article)
    		->whereHas('AuthorArticle', function($q) use($valid_name_author){
    			$q->where('FIO', $valid_name_author);
    		}) 	
    		->whereHas('CategoryArticle', function($q) use($valid_name_category){
    			$q->where('name', $valid_name_category);
    		}) 	
    		->paginate(5);
    		$found_article = ($search_article[0]->name_article)??null;
    	}

   		
   		if(isset($found_article)){
   			return view('articles/search_article', compact('search_article'));
   		}else{
   			echo "<script>alert('Такой статьи не существует')</script>";
   			return back();
   		}
    }
}
