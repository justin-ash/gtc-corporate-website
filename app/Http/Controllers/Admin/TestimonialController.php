<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\File;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::latest()->paginate(15);
        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonials.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'role' => 'required',
            'rating' => 'required|integer|min:1|max:5',
            'message' => 'required',
            'image' => 'nullable',
            'is_active' => 'required'
        ]);
        $data['image'] = $request->image ? $request->image[0] : null;
        Testimonial::create($data);

        return response()->json([
            'status' => true,
            'message' => 'Testimonial created successfully'
        ]);
    }

    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, $id)
    {
        $testimonial = Testimonial::findOrFail($id);

        $data = $request->validate([
            'name' => 'required',
            'role' => 'nullable',
            'rating' => 'required|integer|min:1|max:5',
            'message' => 'nullable',
            'image' => 'nullable',
            'is_active' => 'required'
        ]);
        $data['image'] = $request->image ? $request->image[0] : $testimonial->image;
        $testimonial->update($data);

        return response()->json([
            'status' => true,
            'message' => 'Testimonial updated successfully'
        ]);
    }

    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);

        if ($testimonial->image && file_exists(public_path($testimonial->image))) {
            unlink(public_path($testimonial->image));
        }

        $testimonial->delete();

        return back()->with('success', 'Deleted');
    }

    public function deleteImage(Request $request)
    {
        $relativePath = $request->input('path');

        if (!str_starts_with($relativePath, 'uploads/testimonails')) {
            return response()->json(['error' => 'Invalid path'], 400);
        }

        $fullPath = public_path($relativePath);

        if (File::exists($fullPath)) {
            File::delete($fullPath);

            return response()->json([
                'status' => true,
                'path' => $relativePath
            ]);
        }

        return response()->json([
            'status' => false,
            'message' => 'File not found'
        ], 404);
    }

    public function uploadGallery(Request $request)
    {
        $paths = [];
        $value = "";
        if ($request->hasFile("image")) {
            $file = $request->file("image");

            $manager = new ImageManager(['driver' => 'gd']);

            $image = $manager->make($file->getRealPath());

            $image->resize(1000, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            $image->encode('webp', 80);

            $folderPath = public_path('uploads/testimonails');

            if (!file_exists($folderPath)) {
                mkdir($folderPath, 0777, true);
            }

            $filename = uniqid() . '.webp';

            $image->save($folderPath . '/' . $filename);
            $value = 'uploads/testimonails/' . $filename;
        }

        return response()->json([
            'paths' => $value
        ]);
    }
}
