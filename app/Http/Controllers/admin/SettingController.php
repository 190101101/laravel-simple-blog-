<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\admin\Setting;

class SettingController extends Controller
{
    public function index()
    {
        $data['setting'] = Setting::orderBy('id', 'DESC')->paginate(10);
        return view('admin.setting.index', compact('data'));
    }

    public function update($id)
    {
        $setting = Setting::where('id', $id)->first();
        return $setting 
            ? view('admin.setting.update', compact('setting'))
            : redirect('/admin/setting')->with('error', 'setting not found');
    }

    public function edit(Request $request, $id)
    {
        return Setting::where('id', $id)->update([
            'setting_value' => $request->setting_value,
        ]) 
        ? back()->with('success', 'successfully updated')
        : back()->with('error', 'something wrong');
    }

    public function delete($id)
    {
        Setting::find($id)->delete();
        return back()->with('success', 'successfully deleted');
    }
}
