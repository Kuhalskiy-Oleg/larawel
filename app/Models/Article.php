<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Http\Resources\CategoryArticleResource;

/**
 * @OA\Schema(
 *     type="object",
 *     title="articles",   
 * )
 */
class Article extends Model
{
    /**
     *  @OA\Property(
     *      property="id",
     *      type="integer"
     *  ),
     * @OA\Property(
     *      property="author_id",
     *      type="integer"
     *  ),
     * @OA\Property(
     *      property="category_id",
     *      type="integer"
     *  ),
     *  @OA\Property(
     *      property="title",
     *      type="string"
     *  ),
     *  @OA\Property(
     *      property="img",
     *      type="string"
     *  ),
     * @OA\Property(
     *      property="announcement",
     *      type="string"
     *  ),
     * @OA\Property(
     *      property="text",
     *      type="string"
     *  ),
     * @OA\Property(
     *      property="slug",
     *      type="string"
     *  ),
     * @OA\Property(
     *      property="created_at",
     *      type="string"
     *  ),
     * @OA\Property(
     *      property="updated_at",
     *      type="string"
     *  )
     */
    use HasFactory , Sluggable;

    protected $table = 'articles';
    protected $primaryKey = 'id';
    protected $foreignkey = [
        'author_id',
        'category_id',
    ];
    protected $fillable = [
    	'title',
    	'img',
    	'announcement',
    	'text',
        'slug'
    ];


    public static function sort(
        $slugCategory,
        $nameAuthor,
        $titleArticle,
        $titleCategory
    ) {       
        // если сортировки по категориям не будет, то будем производить поиск статьи от модели Article
        if ($slugCategory == 'all') {
            
            // если для поиска статьи введено только название статьи
            if (isset($titleArticle) && ! isset($nameAuthor) && ! isset($titleCategory)) {

                return Article::where('title', $titleArticle)->paginate(5);

            // если для поиска статьи введено только имя автора 
            } elseif (isset($nameAuthor) && ! isset($titleArticle) && ! isset($titleCategory)) {

                return Article::
                whereHas('AuthorArticle', function($q) use($nameAuthor){
                    $q->where('name', $nameAuthor);
                })  
                ->paginate(5);
           
            // если для поиска статьи введено только название категории
            }  elseif (isset($titleCategory) && ! isset($titleArticle) && ! isset($nameAuthor)) {

                return Article::
                whereHas('CategoryArticle', function($q) use($titleCategory){
                    $q->where('title', $titleCategory);
                })  
                ->paginate(5);
         
            // если для поиска статьи введено название статьи и имя автора
            } elseif (isset($titleArticle) && isset($nameAuthor) && ! isset($titleCategory)) {

                return Article::where('title', $titleArticle)
                ->whereHas('AuthorArticle', function($q) use($nameAuthor){
                    $q->where('name', $nameAuthor);
                })      
                ->paginate(5);
            

            // если для поиска статьи введено название категории и имя автора
            } elseif (isset($titleCategory) && isset($nameAuthor) && ! isset($titleArticle)) {

                return Article::
                whereHas('AuthorArticle', function($q) use($nameAuthor){
                    $q->where('name', $nameAuthor);
                })  
                ->whereHas('CategoryArticle', function($q) use($titleCategory){
                    $q->where('title', $titleCategory);
                })      
                ->paginate(5);
             
            // если для поиска статьи введено название категории и название статьи
            } elseif (isset($titleCategory) && isset($titleArticle) && ! isset($nameAuthor)) {

                return Article::where('title', $titleArticle)
                ->whereHas('CategoryArticle', function($q) use($titleCategory){
                    $q->where('title', $titleCategory);
                })      
                ->paginate(5);
               
            // если для поиска статьи заполнены все поля 
            } elseif (isset($titleArticle) && isset($nameAuthor) && isset($titleCategory)) {

                return Article::where('title', $titleArticle)
                ->whereHas('AuthorArticle', function($q) use($nameAuthor){
                    $q->where('name', $nameAuthor);
                })  
                ->whereHas('CategoryArticle', function($q) use($titleCategory){
                    $q->where('title', $titleCategory);
                })  
                ->paginate(5);
            } 

            // если поисковых атрибутов нет то возвращаем все статьи
            return Article::paginate(5);

        // если сортировки по категориям произведена то будем производить поиск статьи от модели CategoryArticle в которой вызовем метод articles() в котором проиписана связь один ко многоим т.е одной категории может принадлежать много статей и от этого метода будем производить поиск совпадений с таблицами в котоых есть связь с таблицей Article с помощью метода whereHas()
        } else {

            $category = CategoryArticle::where('slug', $slugCategory)->first();

            // если для поиска статьи введено только название статьи
            if (isset($titleArticle) && ! isset($nameAuthor) && ! isset($titleCategory)) {

                return $category ? $category->articles()->where('title', $titleArticle)->paginate(5) : null;

            // если для поиска статьи введено только имя автора 
            } elseif (isset($nameAuthor) && ! isset($titleArticle) && ! isset($titleCategory)) {

                return $category ? $category->articles()
                ->whereHas('AuthorArticle', function($q) use($nameAuthor){
                    $q->where('name', $nameAuthor);
                })  
                ->paginate(5) : null;

            // если для поиска статьи введено только название категории
            } elseif (isset($titleCategory) && ! isset($titleArticle) && ! isset($nameAuthor)) {

                return $category ? $category->articles()
                ->whereHas('CategoryArticle', function($q) use($titleCategory){
                    $q->where('title', $titleCategory);
                })  
                ->paginate(5) : null;
         
            // если для поиска статьи введено название статьи и имя автора
            } elseif (isset($titleArticle) && isset($nameAuthor) && ! isset($titleCategory)) {

                return $category ? $category->articles()
                ->where('title', $titleArticle)
                ->whereHas('AuthorArticle', function($q) use($nameAuthor){
                    $q->where('name', $nameAuthor);
                })      
                ->paginate(5) : null;
            
            // если для поиска статьи введено название категории и имя автора
            } elseif (isset($titleCategory) && isset($nameAuthor) && ! isset($titleArticle)) {

                return $category ? $category->articles()
                ->whereHas('AuthorArticle', function($q) use($nameAuthor){
                    $q->where('name', $nameAuthor);
                }) 
                ->whereHas('CategoryArticle', function($q) use($titleCategory){
                    $q->where('title', $titleCategory);
                })    
                -> paginate(5) : null;
             
            // если для поиска статьи введено название категории и название статьи
            } elseif (isset($titleCategory) && isset($titleArticle) && ! isset($nameAuthor)) {

                return $category ? $category->articles()
                ->where('title', $titleArticle)
                ->whereHas('CategoryArticle', function($q) use($titleCategory){
                    $q->where('title', $titleCategory);
                })     
                ->paginate(5) : null;
               
            // если для поиска статьи заполнены все поля 
            } elseif (isset($titleArticle) && isset($nameAuthor) && isset($titleCategory)) {

                return $category ? $category->articles()
                ->where('title', $titleArticle)
                ->whereHas('AuthorArticle', function($q) use($nameAuthor){
                    $q->where('name', $nameAuthor);
                })  
                ->whereHas('CategoryArticle', function($q) use($titleCategory){
                    $q->where('title', $titleCategory);
                })  
                ->paginate(5) : null;
            } 

            // если поисковых атрибутов нет то возвращаем все статьи
            return $category ? $category->articles()->paginate(5) : null;
        }

        // если cортировка не выбрана то возвращаем все статьи
        return Article::paginate(5);
    }


    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }


    public function categoryArticle()
    {   
    	return $this->belongsTo(CategoryArticle::class , 'category_id' , 'id');
    }


    public function authorArticle()
    {
    	return $this->belongsTo(AuthorArticle::class, 'author_id' , 'id');
    }

}
