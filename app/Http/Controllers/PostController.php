<?php

namespace App\Http\Controllers;

use Canvas\Tag;
use Canvas\Post;
use Canvas\Topic;
use Canvas\UserMeta;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Canvas\Events\PostViewed;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
            $posts = \Canvas\Post::published()->orderByDesc('published_at')->get();
        

        return view('posts.index', [
            'posts' => $posts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
            $posts = \Canvas\Post::with('tags', 'topic')->published()->get();
            $post = $posts->firstWhere('slug', $slug);

            if (optional($post)->published) {
                $data = [
                    'author' => $post->UserMeta,
                    'post'   => $post,
                    'meta'   => $post->meta,
                ];

                // IMPORTANT: This event must be called for tracking visitor/view traffic
                event(new \Canvas\Events\PostViewed($post));

                return view('posts.show', compact('data'));
            } else {
                abort(404);
            }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
