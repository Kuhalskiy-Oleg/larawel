<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class AuthorArticle extends Model
{
    use HasFactory , Sluggable;

    protected $table = 'author_articles';
    protected $primaryKey = 'id';
    protected $fillable = [
    	'FIO',
    	'avatar',
    	'year_of_birth',
    	'biography',
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
                'source' => 'FIO'
            ]
        ];
    }
   
}
