<?php

namespace Modules\PostCategory\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;
use Modules\Post\Transformers\PostResource;

class PostCategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        return [
            'id' => $this->id,
            'name' => $this->name,
            'parent_id' => $this->parent_id,
            'slug' => $this->slug,
            'posts' => PostResource::collection($this->posts),
        ];
    }
}
