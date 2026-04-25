<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

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

    // ✅ Store
    public function store(Request $request)
    {
        $validated = $request->validate([
            'project_name' => 'required|max:255',
            'short_description' => 'nullable|max:255',
            'detail_text' => 'nullable',
            'project_location' => 'nullable|max:255',
            'project_type' => 'nullable|max:255',
            'established_date' => 'nullable|date',
            'website' => 'nullable|url',
            'gallery.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);

        // Upload gallery images
        $gallery = [];
        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $image) {
                $path = $image->store('projects', 'public');
                $gallery[] = $path;
            }
        }

        Project::create([
            ...$validated,
            'gallery' => $gallery
        ]);

        return redirect()->route('admin.projects.index')
            ->with('success', 'Project created successfully');
    }

    // ✅ Edit Form
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('admin.projects.edit', compact('project'));
    }

    // ✅ Update
    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);

        $validated = $request->validate([
            'project_name' => 'required|max:255',
            'short_description' => 'nullable|max:255',
            'detail_text' => 'nullable',
            'project_location' => 'nullable|max:255',
            'project_type' => 'nullable|max:255',
            'established_date' => 'nullable|date',
            'website' => 'nullable|url',
            'gallery.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);

        // Handle gallery update
        $gallery = $project->gallery ?? [];

        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $image) {
                $path = $image->store('projects', 'public');
                $gallery[] = $path;
            }
        }

        $project->update([
            ...$validated,
            'gallery' => $gallery
        ]);

        return redirect()->route('admin.projects.index')
            ->with('success', 'Project updated successfully');
    }

    // ✅ Delete
    public function destroy($id)
    {
        Project::findOrFail($id)->delete();

        return redirect()->back()->with('success', 'Deleted successfully');
    }

    public function deleteImage(Request $request)
    {
        if (Storage::disk('public')->exists($request->path)) {
            Storage::disk('public')->delete($request->path);
        }

        return response()->json(['status' => true]);
    }

    public function uploadGallery(Request $request)
    {
        $paths = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('projects', 'public');
                $paths[] = $path;
            }
        }

        return response()->json([
            'paths' => $paths
        ]);
    }
}
