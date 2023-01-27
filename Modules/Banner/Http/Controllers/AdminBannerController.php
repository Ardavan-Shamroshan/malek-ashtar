<?php

namespace Modules\Banner\Http\Controllers;

use App\Http\Services\Image\ImageService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Banner\Entities\Banner;
use Modules\Banner\Http\Requests\BannerRequest;
use Nette\Utils\Image;

class AdminBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index() {
        $banners = Banner::query()->paginate(10);
        $bannersCount = Banner::query()->count();
        $positions = Banner::$positions;
        return view('banner::admin.index', compact('banners', 'bannersCount', 'positions'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create() {
        $positions = Banner::$positions;
        return view('banner::admin.create', compact('positions'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(BannerRequest $request, ImageService $imageService) {
        $inputs = $request->all();

        // Image upload
        if ($request->hasFile('image')) {
            // Set image directory
            $imageService->setExclusiveDirectory('images' . DIRECTORY_SEPARATOR . 'banner');
            // Save
            $result = $imageService->fitAndSave($request->file('image'), 831, 352);
            // If createIndexAndSize failed
            if ($result === false) {
                toast('آپلود تصویر با خطا مواجه شد', 'error');
                return to_route('admin.banner');
            }
            $inputs['image'] = $result;

            Banner::query()->create($inputs);
            toast('بنر با موفقیت ایجاد شد', 'success');
            return to_route('admin.banner');
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id) {
        return view('banner::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit(Banner $banner) {
        $positions = Banner::$positions;
        return view('banner::admin.edit', compact('banner', 'positions'));

    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(BannerRequest $request, Banner $banner, ImageService $imageService) {
        $inputs = $request->all();

        // Image upload
        if ($request->hasFile('image')) {
            if (!empty($banner->image))
                $imageService->deleteImage($banner->image);

            // Set image directory
            $imageService->setExclusiveDirectory('images' . DIRECTORY_SEPARATOR . 'banner');
            // Save
            $result = $imageService->fitAndSave($request->file('image'), 831, 352);
            // If createIndexAndSize failed
            if ($result === false) {
                toast('آپلود تصویر با خطا مواجه شد', 'error');
                return to_route('admin.banner');
            }
            $inputs['image'] = $result;

            $banner->update($inputs);
            toast('بنر با موفقیت ویرایش شد', 'success');
            return to_route('admin.banner');
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(Banner $banner) {
        $banner->delete();
        toast('بنر شما با موفقیت حذف شد', 'success');
        return redirect('admin.banner');
    }

    public function status(Banner $banner) {
        $banner->status = $banner->status == 0 ? 1 : 0;
        $result = $banner->save();
        if ($result)
            if ($banner->status == 0)
                return response()->json([
                    'status' => true,
                    'checked' => false
                ]);
            else
                return response()->json([
                    'status' => true,
                    'checked' => true
                ]);
        else response()->json(['status' => false]);
    }
}
