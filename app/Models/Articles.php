<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Articles extends Model
{
    use HasFactory , Sluggable;

    protected $table = 'articles';
    protected $primaryKey = 'id';
    protected $foreignkey = [
        'author',
        'categories',
    ];
    protected $fillable = [
    	'name_article',
    	'image',
    	'announcement',
    	'text',
    ];


    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name_article'
            ]
        ];
    }

    public function categoryArticle()
    {
    	return $this->belongsTo(CategoryArticle::class , 'categories' , 'id');
    }

    public function authorArticle()
    {
    	return $this->belongsTo(AuthorArticle::class, 'author' , 'id');
    }

}
