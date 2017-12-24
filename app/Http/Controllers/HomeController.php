<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Topic;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topics = Topic::orderBy('last_post', 'DESC')->paginate(\Config::get('constants.PAGINATION_PER_PAGE'));

        $params = [
            'topics'    => $topics,
            'stats'     => [
                'total_posts'   => Post::count(),
                'total_topics'  => Topic::count(),
                'total_members' => User::where('is_administrator', FALSE)->count(),
                'latest_member' => User::where('is_administrator', FALSE)->latest()->first(),
            ]
        ];

        return view('welcome', $params);
    }

    /**
     * Search topics and posts with the given keyword
     */
    public function search(REQUEST $request)
    {
        $topics = Topic::where('title', 'LIKE', '%' . $request->input('q') . '%')->whereOr('description', 'LIKE', '%' . $request->input('q') . '%')->get();
        $posts = Post::where('post', 'LIKE', '%' . $request->input('q') . '%')->get();

        $params = [
            'q'         => $request->input('q'),
            'results'   => [],
        ];
        foreach ($topics as $topic) {
            $topic->description = html_entity_decode(strip_tags($topic->description));
            if (
                strpos($topic->title, $request->input('q')) >= 0 ||
                (
                    !empty($topic->description) &&
                    strpos($topic->description, $request->input('q')) >= 0
                )
            ) {
                $topic->title = preg_replace('/\w*?' . $request->input('q') . '\w*/i', '<span class="highlight">$0</span>', $topic->title);
                $topic->description = preg_replace('/\w*?' . $request->input('q') . '\w*/i', '<span class="highlight">$0</span>', $topic->description);
                $params['results'][] = $topic;
            }
        }
        foreach ($posts as $post) {
            $post->post = html_entity_decode(strip_tags($post->post));
            if (!empty($post->post) && strpos($post->post, $request->input('q')) >= 0) {
                $post->post = preg_replace('/\w*?' . $request->input('q') . '\w*/i', '<span class="highlight">$0</span>', $post->post);
                $params['results'][] = $post;
            }
        }

        return view('search', $params);
    }
}
