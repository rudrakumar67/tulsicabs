<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings;

class SettingsController extends Controller
{
    public function index()
    {
        $settings = Settings::first();
        return view('Admin.Settings.Index', compact('settings'));
    }

    public function storeSettings(Request $request)
    {
        $request->validate([
            'site_name' => 'required',
            'site_description' => 'required',
            'phone_number' => 'required|numeric',
            'email' => 'required|email',
            'address' => 'required',
            'facebook' => 'nullable|url',
            'instagram' => 'nullable|url',
            'whatsapp' => 'nullable|url',
        ]);
        $settings = Settings::firstOrNew();
        $settings->site_name = $request->site_name;
        $settings->site_description = $request->site_description;
        $settings->phone_number = $request->phone_number;
        $settings->email = $request->email;
        $settings->address = $request->address;
        if  ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logoName = time() . '.' . $logo->getClientOriginalExtension();
            $logo->move(public_path('Uploads/images/logos'), $logoName);
            $settings->logo = $logoName;
        }
        if  ($request->hasFile('favicon')) {
            $favicon = $request->file('favicon');
            $faviconName = time() . '.' . $favicon->getClientOriginalExtension();
            $favicon->move(public_path('Uploads/images/favicons'), $faviconName);
            $settings->favicon = $faviconName;
        }
        $settings->facebook = $request->facebook ? $request->facebook : $settings->facebook;
        $settings->instagram = $request->instagram ? $request->instagram : $settings->instagram;
        $settings->whatsapp = $request->whatsapp ? $request->whatsapp : $settings->whatsapp;
        $settings->save();
        return redirect()->route('admin.settings');
    }
}
