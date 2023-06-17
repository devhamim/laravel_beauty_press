<?php

namespace App\Http\Controllers\Frontend;

use App\Domains\Products\Models\Product;
use Illuminate\Http\Request;

/**
 * Class HomeController.
 */

use App\Models\Info;
use App\Models\Notice;
use App\Models\Event;
use App\Models\Page;
use App\Models\Blog;
use App\Models\Slider;
use App\Models\Service;
use App\Models\Project;
use App\Models\Testmony;
use App\Models\Brand;
use App\Models\Donate;
use App\Models\Activity;
use App\Models\Gallery;
use Mail;
use App\Mail\ContactMail;
use App\Mail\EventMail;
use App\Mail\VolentiarMail;
use App\Models\appointment;
use App\Models\BlogModel;
use App\Models\contactBanner;
use App\Models\contactUs;
use App\Models\pricing;
use App\Models\secrets;
use App\Models\shedule;
use App\Models\videos;
use Carbon\Carbon;

class HomeController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $service_count = 0;
        $product = Product::all();
        $sliders = Slider::where('is_active', 1)
            ->get();

        $projects = Project::where('is_active', 1)
            ->get();

        $services = Service::where('is_active', 1)->where('homepage', 1)
            ->get();
        $service_header = Service::where('is_active', 1)->where('homepage', 1)
            ->orderBy('updated_at', 'DESC')->first();
        foreach ($services as $service) {
            $service_count += 1;
        }

        $blogs = Blog::where('is_active', 1)
            ->get();

        $testmonies = Testmony::where('is_active', 1)
            ->get();


        $event = Event::where('status', 1)
            ->take(1)
            ->orderBy('id', 'DESC')
            ->first();

        $brands = Brand::where('is_active', 1)
            ->take(5)
            ->orderBy('id', 'DESC')
            ->get();

        $images = Gallery::where('is_active', 1)->get();

        $projects = Project::where('is_active', 1)->get();

        $secrets = secrets::where('is_active', 1)->get();

        $pricings = pricing::where('is_active', 1)->get();

        $videos = videos::where('is_active', 1)->get();

        $services_all = Service::get();

        $shedules =  shedule::where('is_active', 1)->get();

        return view('frontend.index', compact('shedules','images','projects','product','pricings','videos','secrets', 'sliders', 'event', 'brands', 'services','services_all', 'testmonies', 'blogs', 'projects', 'service_count', 'service_header'));
    }



//   service_view start

function service_view($id){
    $services = Service::where('id', $id)->get();
    // $services_all = Service::get();
    return view('frontend.content.services_view', [
        'services'=>$services,
        // 'services_all'=>$services_all,
    ]);
}

// service view end

// blog start

function blog(){
    $blogs = BlogModel::where('is_active', 1)->get();
    return view('frontend.content.blog', [
        'blogs'=>$blogs,
    ]);
}

function blog_details($id){
    $blogs_details = BlogModel::where('id', $id)->get();
    return view('frontend.content.blog_details', [
        'blogs_details'=>$blogs_details,
    ]);
}

// blog end

// contact

public function contact()
    {
        $contact_banner = contactBanner::where('is_active', 1)->get();
        return view('frontend.content.contact', [
            'contact_banner'=>$contact_banner,
        ]);
    }

    // contact_submit
    function contact_submit(Request $request){
        $request->validate([
            '*'=>'required',
        ]);
        contactUs::insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'comments'=>$request->comments,
            'created_at'=>Carbon::now(),
        ]);
        return back()->withFlashSuccess('You Comment Successfully');
    }

    // appoinment.store
    function appoinment_store(Request $request){
        appointment::insert([
            'appointment_service'=>$request->appointment_service,
            'appointment_date'=>$request->appointment_date,
            'appointment_time'=>$request->appointment_time,
            'name'=>$request->name,
            'email'=>$request->email,
            'number'=>$request->number,
            'message'=>$request->message,
            'created_at'=>Carbon::now(),
        ]);
        return back()->withFlashSuccess('Appointment Sent Successfully');
    }


    public function noticedetails($id)
    {
        $notice = Notice::find($id);
        return view('frontend.content.noticedetails', compact('notice'));
    }
    public function infodetails($id)
    {
        $info = Info::find($id);

        return view('frontend.content.infodetails', compact('info'));
    }
    public function noticeall()
    {
        $notices = Notice::orderBy('id', 'DESC')->get();
        return view('frontend.content.noticeall', compact('notices'));
    }
    public function donatenow()
    {
        $donates = Donate::where('is_active', 1)
            ->orderBy('title', 'ASC')
            ->get();
        return view('frontend.content.donatenow', compact('donates'));
    }
    public function allevent()
    {
        $events = Event::where('is_active', 1)
            ->orderBy('id', 'DESC')
            ->get();
        return view('frontend.content.allevent', compact('events'));
    }
    public function allgallery()
    {
        $page = Page::where('slug', '/all/gallery')->get()->first();
        $images = Gallery::where('is_active', 1)->get();
        return view('frontend.content.allgallery', compact('page', 'images'));
    }

    public function contactsubmit(Request $request)
    {
        $item = $request;
        $adminEmail = get_setting('received_email');
        Mail::to($adminEmail)->send(new ContactMail($item));
        return back()->with('status', 'Thank you for your message. It has been sent');
    }


    public function eventsubmit(Request $request)
    {
        $item = $request;
        $adminEmail = get_setting('received_email');
        Mail::to($adminEmail)->send(new EventMail($item));
        return back()->with('status', 'Thank you for your message. It has been sent');
    }
    public function volunteersubmit(Request $request)
    {
        $item = $request;
        $adminEmail = get_setting('received_email');
        Mail::to($adminEmail)->send(new VolentiarMail($item));
        return back()->with('status', 'Thank you for your message. It has been sent');
    }
    public function eventdetails($id)
    {
        $event = Event::find($id);
        return view('frontend.content.eventdetails', compact('event'));
    }

    public function projectdetails($id)
    {
        $service = Project::find($id);
        $photo = json_decode($service->photos ?? null);
        return view('frontend.content.projectdetails', compact('service', 'photo'));
    }

    public function blogdetails($id)
    {
        $cat = [];
        $arc = [];
        $blogs = Blog::whereNotNull('categories')->get();
        foreach ($blogs as $key => $val) {
            $cat[] = $val->categories;
            $arc[] = date('Y', strtotime($val->created_at));
        }
        $archive = (array_count_values($arc));
        $count = (array_count_values($cat));
        $blog = Blog::find($id);
        $photo = json_decode($blog->multi_img ?? null);
        return view('frontend.content.blogdetails', compact('blog', 'photo', 'count', 'archive'));
    }
    public function infoall()
    {
        $infos = Info::orderBy('id', 'DESC')->get();
        return view('frontend.content.infoall', compact('infos'));
    }
    public function allbrand()
    {
        $brands = Brand::where('is_active', 1)
            ->orderBy('id', 'DESC')
            ->get();
        return view('frontend.content.allbrand', compact('brands'));
    }
    public function allactivities()
    {

        $activities = Activity::where('is_active', 1)
            ->orderBy('id', 'DESC')
            ->get();

        return view('frontend.content.allactivities', compact('activities'));
    }
    public function pageshow($slug)
    {
        $slug = '/page/' . $slug;
        $page = Page::where('slug', $slug)->get()->first();
        return view('frontend.content.dynamicpage', compact('page'));
    }




}
