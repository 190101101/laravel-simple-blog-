<?php

namespace App\Http\Middleware;

use Closure;
use App\models\admin\Setting;
use Illuminate\Support\Facades\View;

class Share
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $data['setting'] = Setting::all();

        foreach($data['setting'] as $key){
            $setting[$key->setting_key] = $key->setting_value;
        }

        View::share($setting);

        return $next($request);
    }
}
