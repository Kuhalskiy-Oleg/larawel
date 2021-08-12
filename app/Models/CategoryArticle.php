<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Kalnoy\Nestedset\NodeTrait;

class CategoryArticle extends Model
{
    use HasFactory;
    use Sluggable , NodeTrait{
    	NodeTrait::replicate as replicateNode;
    	Sluggable::replicate as replicateSlug;
    }

    public function replicate(array $except = null)
	{
	    $instance = $this->replicateNode($except);
	    (new SlugService())->slug($instance, true);

	    return $instance;
	}

    protected $table = 'category_articles';
    protected $primaryKey = 'id';
    protected $fillable = [
    	'name',
    	'img',
    	'description',
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
                'source' => 'name'
            ]
        ];
    }



    //метод для получения предков у вложенного списка nested set
    protected $appends = ['parents'];
	public function getParentsAttribute()
	{
	    $collection = collect([]);
	    $parent = $this->parent;
	    while($parent) {
	        $collection->push($parent);
	        $parent = $parent->parent;
	    }

	    return $collection;
	}
  
}
