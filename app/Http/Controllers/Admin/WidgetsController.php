<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Widget;

class WidgetsController extends Controller
{
    public function index()
    {
        $widgets = Widget::latest()->paginate(15);
        return view('admin.widgets.index', compact('widgets'));
    }

    public function create()
    {
        return view('admin.widgets.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'widget_code' => 'required||unique:widgets,widget_code',
            'is_active' => 'required'
        ]);
        Widget::create($data);

        return response()->json([
            'status' => true,
            'message' => 'Widget created successfully'
        ]);
    }

    public function edit($id)
    {
        $widget = Widget::findOrFail($id);
        return view('admin.widgets.edit', compact('widget'));
    }

    public function update(Request $request, $id)
    {
        $widget = Widget::findOrFail($id);

        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'widget_code' => 'required||unique:widgets,widget_code,' . $id,
            'is_active' => 'required'
        ]);

        $widget->update($data);

        return response()->json([
            'status' => true,
            'message' => 'Widget updated successfully'
        ]);
    }

    public function destroy($id)
    {
        Widget::findOrFail($id)->delete();
        return back()->with('success', 'Deleted');
    }
}
