<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Kalnoy\Nestedset\NodeTrait;

/**
 * @OA\Schema(
 *     type="object",
 *     title="categories_articles",   
 * )
 */
class CategoryArticle extends Model
{
    /**
     *  @OA\Property(
     *      property="id",
     *      type="integer"
     *  ),
     * @OA\Property(
     *      property="title",
     *      type="string"
     *  ),
     * @OA\Property(
     *      property="img",
     *      type="string"
     *  ),
     *  @OA\Property(
     *      property="description",
     *      type="string"
     *  ),
     *  @OA\Property(
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
    use HasFactory;
    use Sluggable , NodeTrait{
    	NodeTrait::replicate as replicateNode;
    	Sluggable::replicate as replicateSlug;
    }

    protected $table = 'categories_articles';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'img',
        'description',
        'slug'
    ];


    public function replicate(array $except = null)
	{
	    $instance = $this->replicateNode($except);
	    (new SlugService())->slug($instance, true);

	    return $instance;
	}

    
    public function articles()
    {
        return $this->hasMany(Article::class , 'category_id' , 'id');
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
}
