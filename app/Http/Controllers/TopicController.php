<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Topic;

class TopicController extends Controller
{
    /**
     * Show the form to create a new topic
     */
    public function create()
    {
        return view('topic.create');
    }

    /**
     * Show topic
     */
    public function index(Topic $topic)
    {
        return view('topic.index', ['topic' => $topic]);
    }

    /**
     * Save new topic
     */
    public function save(Request $request)
    {
        $user = Auth::user();

        $this->validate($request, [
            'title'         => 'required|string|max:250',
            'description'   => 'required|string'
        ]);

        $topic = Topic::create([
            'user_id'       => $user->id,
            'title'         => $request->input('title'),
            'description'   => $request->input('description'),
            'last_post'     => Carbon::now(),
        ]);

        return redirect()->route('topic', $topic->id)
                ->with('message', 'New topic created!');
    }
}
