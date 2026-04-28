<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use Intervention\Image\ImageManager;

class SettingsController extends Controller
{
    public function index()
    {
        $settings = Setting::all();
        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        foreach ($request->except('_token') as $key => $value) {

            $setting = Setting::where('key', $key)->first();
            if (!$setting) continue;

            // Handle file upload
            if ($request->hasFile($key)) {
                $file = $request->file($key);

                $manager = new ImageManager(['driver' => 'gd']);

                $image = $manager->make($file->getRealPath());

                $image->resize(1000, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });

                $image->encode('webp', 80);

                $folderPath = public_path('uploads/settings');

                if (!file_exists($folderPath)) {
                    mkdir($folderPath, 0777, true);
                }

                // $filename = uniqid() . '.webp';

                $image->save($folderPath . '/' . 'logo.png');
                $value = 'uploads/settings/' . 'logo.png';
            }

            $setting->update([
                'value' => $value
            ]);
            cache()->forget('settings');
        }

        return back()->with('success', 'Settings updated successfully');
    }
}
