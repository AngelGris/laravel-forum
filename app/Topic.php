<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    /**
     * Parse as Carbon date
     *
     * @var array
     */
    protected $dates = ['last_post'];

    /**
     * Get the owner of the topic
     *
     * @return User
     */
    public function owner()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get posts in the topic
     *
     * @return array Post
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
