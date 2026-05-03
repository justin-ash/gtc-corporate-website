<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\File;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::latest()->paginate(15);
        return view('admin.banner.index', compact('banners'));
    }

    public function create()
    {
        return view('admin.banner.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'main_title' => 'required|string',
            'description' => 'required|string',
            'button_link' => 'required|string',
            'image.*' => 'required',
            'is_active' => 'required|boolean',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('banners', 'public');
        }
        $data['image'] = $request->image ? $request->image[0] : null;
        Banner::create($data);

        return response()->json([
            'status' => true,
            'message' => 'Banner created successfully'
        ]);
    }

    public function edit(Banner $banner)
    {
        return view('admin.banner.edit', compact('banner'));
    }

    public function update(Request $request, Banner $banner)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'main_title' => 'required|string',
            'description' => 'required|string',
            'button_link' => 'required|string',
            'image.*' => 'required',
            'is_active' => 'required|boolean',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('banners', 'public');
        }
        $data['image'] = $request->image ? $request->image[0] : null;
        $banner->update($data);

        return response()->json([
            'status' => true,
            'message' => 'Banner updated successfully'
        ]);
    }

    public function destroy(Banner $banner)
    {
        $banner->delete();
        return back()->with('success', 'Deleted');
    }

    public function deleteImage(Request $request)
    {
        $relativePath = $request->input('path');

        if (!str_starts_with($relativePath, 'uploads/banner')) {
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
        $value = "";

        if ($request->hasFile("image")) {

            $file = $request->file("image");

            // Create folder if not exists
            $folderPath = public_path('uploads/banner');

            if (!file_exists($folderPath)) {
                mkdir($folderPath, 0777, true);
            }

            // Keep original extension
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();

            // Move file directly (no processing)
            $file->move($folderPath, $filename);

            $value = 'uploads/banner/' . $filename;
        }

        return response()->json([
            'paths' => $value
        ]);
    }
}
