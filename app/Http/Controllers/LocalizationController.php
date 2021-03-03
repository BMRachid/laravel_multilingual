<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class LocalizationController extends Controller
{
    // get the lang from uri
    public function index($locale){
        // by default $locale = 'en' (inside config/app.php)
        // update with new value
        //App::setlocale($locale);

        // we store the variable in the session. It will be used by the middleware
        // Http\Middleware
        session()->put('locale', $locale);

        // redirect
        return redirect()->back();
    }
}
