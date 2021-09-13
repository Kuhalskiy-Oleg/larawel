<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

/**
 * @OA\Schema(
 *     type="object",
 *     title="authors_articles",   
 * )
 */
class AuthorArticle extends Model
{
    /**
     *  @OA\Property(
     *      property="id",
     *      type="integer"
     *  ),
     * @OA\Property(
     *      property="name",
     *      type="string"
     *  ),
     * @OA\Property(
     *      property="avatar",
     *      type="string"
     *  ),
     *  @OA\Property(
     *      property="date_of_birth",
     *      type="string"
     *  ),
     *  @OA\Property(
     *      property="biography",
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

    protected $table = 'authors_articles';
    protected $primaryKey = 'id';
    protected $fillable = [
    	'name',
    	'avatar',
    	'date_of_birth',
    	'biography',
        'slug'
    ];


    public static function sort($nameAuthor)
    {
        if (isset($nameAuthor)) {

            return [
                'type' => 'resource',
                'resource' => AuthorArticle::where('name', $nameAuthor)->first()
            ];
        } 
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
                'source' => 'name'
            ]
        ];
    }
   
}
