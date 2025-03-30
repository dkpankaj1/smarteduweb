<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Dkpankaj1\Toastr\Services\ToasterService;
use Exception;
use Illuminate\Http\Request;
use App\Services\ImageService;


class SettingController extends Controller
{
    protected $imageService;

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    public function edit()
    {
        $setting = Setting::first();
        return view('admin.setting.edit', compact('setting'));
    }
    public function update(Request $request)
    {
        $request->validate([
            'brand_name' => 'required|string|max:255',
            'logo' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'logo_light' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'favicon' => 'nullable|mimes:ico,png|max:1024',
            'contact_email' => 'required|email|max:255',
            'contact_phone' => 'required|string|max:20',
            'contact_address' => 'required|string|max:500',
            'facebook_link' => 'nullable|url|max:255',
            'twitter_link' => 'nullable|url|max:255',
            'instagram_link' => 'nullable|url|max:255',
            'linkedin_link' => 'nullable|url|max:255',
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string|max:500',
            'meta_keywords' => 'required|string|max:500',
            'tinymce_apikey' => 'required|string|max:255'
        ]);

        try {
            $setting = Setting::first();

            $data = $request->except(['logo', 'logo_light', 'favicon']);

            if ($request->hasFile('logo')) {

                if (isset($setting->logo)) {
                    $this->imageService->delete($setting->logo);
                }
                $data['logo'] = $this->imageService->upload(
                    $request->file('logo'),
                    'uploads/logo'
                );
            }

            if ($request->hasFile('logo_light')) {

                if (isset($setting->logo_light)) {
                    $this->imageService->delete($setting->logo_light);
                }
                $data['logo_light'] = $this->imageService->upload(
                    $request->file('logo_light'),
                    'uploads/logo'

                );
            }

            if ($request->hasFile('favicon')) {

                if (isset($setting->favicon)) {
                    $this->imageService->delete($setting->favicon);
                }
                $data['favicon'] = $this->imageService->upload(
                    $request->file('favicon'),
                    'uploads/favicon'
                    
                );
            }

            // Update settings in database
            $setting->update($data);
            ToasterService::success('Settings updated successfully');
            return redirect()->back();
        } catch (Exception $e) {
            ToasterService::error($e->getMessage());
            return redirect()->back();
        }
    }
}
