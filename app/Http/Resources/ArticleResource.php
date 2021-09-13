<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'author_id' => $this->author_id,
            'category_id' => $this->category_id,
            'title' => $this->title,
            'img' => $this->img,
            'slug' => $this->slug,
        ];
    }
}
