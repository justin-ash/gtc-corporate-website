<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\SeoPage;

class SeoPageController extends Controller
{
    public function index()
    {
        $seos = SeoPage::latest()->paginate(10);
        return view('admin.seo.index', compact('seos'));
    }

    public function create()
    {
        $dbSlugs = Project::pluck('slug')->toArray();
        $pageList = ['home', 'about', 'services', 'projects', 'contact'];
        $allPages = array_unique(array_merge($pageList, $dbSlugs));
        return view('admin.seo.create', compact('allPages'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'page' => 'required|unique:seo_pages,page',
            'meta_title' => 'required',
            'meta_keywords' => 'required',
            'meta_description' => 'required',
        ]);

        SeoPage::create($data);

        return response()->json([
            'status' => true,
            'message' => 'SEO created successfully'
        ]);
    }

    public function edit($id)
    {
        $seo = SeoPage::findOrFail($id);
        $dbSlugs = Project::pluck('slug')->toArray();
        $pageList = ['home', 'about', 'services', 'projects', 'contact'];
        $allPages = array_unique(array_merge($pageList, $dbSlugs));
        return view('admin.seo.edit', compact('seo', 'allPages'));
    }

    public function update(Request $request, $id)
    {
        $seo = SeoPage::findOrFail($id);

        $data = $request->validate([
            'page' => 'required|unique:seo_pages,page,' . $id,
            'meta_title' => 'nullable',
            'meta_keywords' => 'nullable',
            'meta_description' => 'nullable',
        ]);

        $seo->update($data);

        return response()->json([
            'status' => true,
            'message' => 'SEO updated successfully'
        ]);
    }

    public function destroy($id)
    {
        SeoPage::findOrFail($id)->delete();
        return back()->with('success', 'Deleted');
    }
}
