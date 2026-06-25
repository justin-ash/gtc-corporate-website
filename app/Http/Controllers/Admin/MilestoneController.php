<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Milestone;

class MilestoneController extends Controller
{
    public function index()
    {
        $milestones = Milestone::latest()->get();

        return view('admin.milestones.index', compact('milestones'));
    }

    public function create()
    {
        return view('admin.milestones.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'year' => 'required',
            'image' => 'nullable|image'
        ]);



        Milestone::create([
            'title' => $request->title,
            'description' => $request->description,
            'year' => $request->year,
        ]);

        return redirect()->route('admin.milestones.index')
            ->with('success', 'Milestone added successfully');
    }

    public function edit($id)
    {
        $milestone = Milestone::findOrFail($id);

        return view('admin.milestones.edit', compact('milestone'));
    }

    public function update(Request $request, $id)
    {
        $milestone = Milestone::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'year' => 'required',
            'image' => 'nullable|image'
        ]);

        $milestone->update([
            'title' => $request->title,
            'description' => $request->description,
            'year' => $request->year,
        ]);

        return redirect()->route('admin.milestones.index')
            ->with('success', 'Milestone updated successfully');
    }

    public function destroy($id)
    {
        $milestone = Milestone::findOrFail($id);

        $milestone->delete();

        return redirect()->route('admin.milestones.index')
            ->with('success', 'Milestone deleted successfully');
    }
}
