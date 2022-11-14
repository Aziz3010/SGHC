<?php

namespace App\Http\Controllers;

use App\Models\SettingsTwo;
use Illuminate\Http\Request;

class SettingsTwoController extends Controller
{
    public function index()
    {
        $data = SettingsTwo::all();
        return view("websiteTwo", ["allSections" => $data]);
    }

    public function showForms()
    {
        $sectionsArrange = SettingsTwo::all();
        return view("admin/settingsTwo/rearrange", ["sectionsArrange" => $sectionsArrange]);
    }

    public function reArrange(Request $request)
    {
        $selectedSection = SettingsTwo::findOrFail($request->sectionID);
        $newArrange = $request->arrange;
        $newDisplay = $request->display;

        if ($selectedSection !== null) {
            $selectedSection->update(['arrange' => $newArrange, 'display' => $newDisplay]);
        //     // return redirect(url("/"));
            return redirect(url("/admin/settingsTwo/rearrange"));
        }
    }
}
