<?php

namespace Modules\Post\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;
use Modules\Comment\Transformers\CommentResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request) {
        return [
            'id' => $this->id,
            'title' => $this->title,
            // 'comments' => CommentResource::collection($this->comments),

            // 1. Send comments when loaded (in controller)
             'comments' => CommentResource::collection($this->whenLoaded('comments')),

            // 2. Send comments if it has requested in url as param '?include=comments'
//            'comments' => $this->when(
//                $request->get('include') == 'comments',
//                CommentResource::collection($this->comments),
//            ),
        ];
    }
}
