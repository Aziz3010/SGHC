<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {

        $allSections = Setting::orderBy('arrange', 'asc')->get();
        return view("website", ["allSections" => $allSections]);
    }

    public function showForms()
    {
        $sectionsArrange = Setting::all();
        return view("admin/settings/rearrange", ["sectionsArrange" => $sectionsArrange]);
    }

    public function reArrange(Request $request)
    {
        $selectedSection = Setting::findOrFail($request->sectionID);
        $newArrange = $request->arrange;
        $newDisplay = $request->display;

        if ($selectedSection !== null) {
            $selectedSection->update(['arrange' => $newArrange, 'display' => $newDisplay]);
            // return redirect(url("/"));
            return redirect(url("/admin/settings/rearrange"));
        }
    }
}
