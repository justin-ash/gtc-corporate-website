<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\File;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->paginate(10);
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.add');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'project_name' => 'required|max:255',
            'short_description' => 'required|max:255',
            'detail_text' => 'required',
            'project_location' => 'required|max:255',
            'project_type' => 'required|max:255',
            'established_date' => 'required|date',
            'website' => 'required|url',
            'gallery.*' => 'required'
        ]);
        Project::create($validated);

        return response()->json([
            'status' => true,
            'message' => 'Project created successfully'
        ]);
    }


    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);

        $validated = $request->validate([
            'project_name' => 'required|max:255',
            'short_description' => 'required|max:255',
            'detail_text' => 'required',
            'project_location' => 'required|max:255',
            'project_type' => 'required|max:255',
            'established_date' => 'required|date',
            'website' => 'required|url',
            'gallery.*' => 'required'
        ]);

        // Handle gallery update
        $gallery = $project->gallery ?? [];

        $project->update([
            ...$validated,
            'gallery' => $gallery
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Project updated successfully'
        ]);
    }


    public function destroy($id)
    {
        Project::findOrFail($id)->delete();

        return redirect()->back()->with('success', 'Deleted successfully');
    }

    public function deleteImage(Request $request)
    {
        $relativePath = $request->input('path');

        if (!str_starts_with($relativePath, 'uploads/projects')) {
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

            $folderPath = public_path('uploads/projects');

            if (!file_exists($folderPath)) {
                mkdir($folderPath, 0777, true);
            }

            $filename = uniqid() . '.webp';

            $image->save($folderPath . '/' . $filename);
            $value = 'uploads/projects/' . $filename;
        }

        return response()->json([
            'paths' => $value
        ]);
    }
}
