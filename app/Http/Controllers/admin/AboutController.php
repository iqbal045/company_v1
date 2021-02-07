<?php

namespace App\Http\Controllers\admin;

use App\Models\About;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AboutRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Helpers\FileHandler;

class AboutController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $about = About::with('images')->first();

        return view('admin.front-page.about.index', compact('about'));
    }

    public function edit(About $about)
    {
        return view('admin.front-page.about.edit', compact('about'));
    }

    public function update(AboutRequest $request, About $about)
    {
        DB::beginTransaction();

        try {
            $about->update([
                'title'    => $request->title,
                'subtitle' => $request->subtitle,
                'desc'     => $request->long_desc,
            ]);

            if ($request->file('about_images')) {
                // upload about photo
                foreach ($request->file('about_images') as $image) {
                    $image_path = FileHandler::upload($image, 'abouts', ['width' => About::PRODUCT_WIDTH, 'height' => About::PRODUCT_HEIGHT]);
                    $about->images()->create([ // save an image
                        'url'       => Storage::url($image_path),
                        'base_path' => $image_path,
                    ]);
                }
            }
            DB::commit();

            return redirect()->back()->with('success', 'About Updated Successfully');

        } catch (\Exception $exception) {

            report($exception);
            DB::rollBack();

            return redirect()->back()->with('error', $exception->getMessage());
        }

    }

    public function removeAboutImage(Request $request)
    {
        if ($request->ajax()) {
            $image_id = $request->image_id;
            $image    = Image::findOrFail($image_id);

            // delete root image
            FileHandler::delete($image->base_path);

            $image->delete();

            return response()->json([
                'success' => true,
                'message' => 'Product Image Successfully deleted',
            ]);

        } else {
            abort(404);
        }
    }
}
