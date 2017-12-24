<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * Get the author of the post
     *
     * @return User
     */
    public function author()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the topic in which the post is found
     *
     * @return Topic
     */
    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }
}
