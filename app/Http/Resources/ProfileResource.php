<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'display_name' => $this->display_name,
            'handle' => $this->handle,
            'bio' => $this->bio,
            'avatar_url' => $this->avatar_url,
            'cover_url' => $this->cover_url,
            'followers_count' => $this->whenCounted('followers'),
            'followings_count' => $this->whenCounted('followings'),
            'posts_count' => $this->whenCounted('posts'),
            'reposts_count' => $this->whenCounted('reposts'),
            'replies_count' => $this->whenCounted('replies'),
            'likes_count' => $this->whenCounted('likes'),
            'has_followed' => $this->has_followed ?? false,
        ];
    }
}
