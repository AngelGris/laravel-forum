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
        $topics = Topic::orderBy('last_post', 'DESC')->get();

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
}
