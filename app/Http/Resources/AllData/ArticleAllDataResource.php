<?php

namespace App\Http\Resources\AllData;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleAllDataResource extends JsonResource
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
            'author_id' => new AuthorAllDataResource($this->authorArticle),
            'category_id' => new CategoryAllDataResource($this->categoryArticle),
            'title' => $this->title,
            'img' => $this->img,
            'announcement' => $this->announcement,
            'text' => $this->text,
            'slug' => $this->slug,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
