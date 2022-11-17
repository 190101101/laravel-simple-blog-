<?php 

if($request->hasFile('settings_value')){
    $request->validate([
        'settings_value' => 'required|image|mimes:jpeg,jpg,png|max:2048'
    ]);
    $filename = uniqid().'.'.$request->settings_value->getClientOriginalExtension();
    $request->settings_value->move(public_path('files/image', $filename));
    $request->settings_value = $filename;

    $path = 'files/image/'.$request->delete_file;
    dd($path);

    if(file_exists($path)){
        unlink(public_path($path));
    }
}

return Settings::where('id', $id)->update([
    'settings_description' => $request->settings_description,
    'settings_key' => $request->settings_key,
    'settings_value' => $request->settings_value,
    'settings_type' => $request->settings_type,
]) 
? back()->with('success', 'successfully updated')
: back()->with('error', 'something wrong');
