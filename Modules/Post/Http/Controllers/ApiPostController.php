<?php

namespace Modules\Post\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Post\Entities\Post;
use Modules\Post\Transformers\PostCollection;
use Modules\PostCategory\Entities\PostCategory;

class ApiPostController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index() {
        // 1. Get all posts with comments (load comments relation)
        // return new PostCollection(Post::query()->with('comments')->get());

        // 2. Or get relations by url param, '?include=comments'
        return new PostCollection(Post::all());

    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request) {
        dd('api/store');
        $inputs = $request->all();
        return Post::query()->create($inputs);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id) {
        return Post::query()->findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id) {
        $inputs = $request->all();
        $post = Post::query()->findOrFail($id);
        return $post->update($inputs);
    }


    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id) {
//        dd('api/destroy');
        $post = Post::query()->findOrFail($id)->delete();
//        return response(
//            'Success', 200
//        )->header('Content-Type', 'text/plain');

        return response()->json([
            'status' => 200,
            'message' => 'Success',
            'post' => $post
        ]);
    }
}
