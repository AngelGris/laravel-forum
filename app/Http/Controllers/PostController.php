<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;

class PostController extends Controller
{
    /**
     * Save new post
     */
    public function save(Request $request)
    {
        $user = Auth::user();

        $this->validate($request, [
            'post'      => 'required|string',
            'topic_id'  => 'required|integer'
        ]);

        Post::create([
            'user_id'   => $user->id,
            'topic_id'  => $request->input('topic_id'),
            'post'      => $request->input('post')
        ]);

        return redirect()->back()
                ->with('message', 'Post created');
    }
}
