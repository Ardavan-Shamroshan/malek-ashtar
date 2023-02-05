<?php

namespace Modules\PostCategory\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\PostCategory\Entities\PostCategory;
use Modules\PostCategory\Http\Requests\PostCategoryRequest;
use Modules\PostCategory\Transformers\PostCategoryResource;
use Modules\PostCategory\Transformers\PostCategoryCollection;

class ApiPostCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index() {
        // return 10 post categories per page where has active status (status = 1) using PostCategory collection
        return new PostCategoryCollection(PostCategory::all());

        // return 10 post categories per page where has active status (status = 1) using PostCategory resource
        // return new PostCategoryResource(PostCategory::query()->find(1));


        // return 10 post categories per page where has active status (status = 1)
        // return PostCategory::query()->status()->paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request) {
        dd('api/store');
        $inputs = $request->all();
        return PostCategory::query()->create($inputs);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id) {
        return PostCategory::query()->findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id) {

        $inputs = $request->all();
        $postcategory = PostCategory::query()->findOrFail($id);
        return $postcategory->update($inputs);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id) {
        dd('api/destroy');
        $postcategory = PostCategory::query()->findOrFail($id)->delete();
    }
}
