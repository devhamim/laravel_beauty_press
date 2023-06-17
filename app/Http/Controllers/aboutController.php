<?php

namespace App\Http\Controllers;

use App\Models\about_banner;
use App\Models\about_team;
use App\Models\Service;
use App\Models\shedule;
use Illuminate\Http\Request;

class aboutController extends Controller
{
    //about
    function about(){
        $services = Service::get();
        $about_banner_imgs = about_banner::where('is_active', 1)->get();
        $teams = about_team::where('is_active', 1)->get();
        $shedules = shedule::where('is_active', 1)->get();
        return view('frontend.content.about', [
            'about_banner_imgs'=>$about_banner_imgs,
            'teams'=>$teams,
            'services'=>$services,
            'shedules'=>$shedules,
        ]);
    }
}
