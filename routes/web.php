<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Front\HomeController as FrontHomeController;
use App\Http\Controllers\Front\HomeController;
use App\Models\AboutUs;
use App\Models\Blog;
use App\Models\File;
use App\Models\Hour;
use App\Models\Member;
use App\Models\MemberCategory;
use App\Models\Notice;
use App\Models\Partner;
use App\Models\ServiceCategory;
use App\Models\Slider;
use App\Models\Testimonial;



// \Illuminate\Support\Facades\View::composer(['*'], function ($site_data) {
//     $site_profile = \App\Models\SiteSetting::first();
//     $_about_us = AboutUs::select('title', 'rank', 'slug', 'excerpt')->orderBy('rank')->about()->active()->get();
//     $_service_category = ServiceCategory::select('name', 'slug', 'rank', 'status')->active()->rank()->get();
//     $_member_category = MemberCategory::whereNull('parent_id')->with('children')->active()->rank()->get();
//     $_message = Testimonial::select('id', 'name', 'post', 'photo', 'type', 'excerpt', 'slug', 'rank')->message()->active()->rank()->get(2);
//     $_event_form = \App\Models\Event::latest()->active()->limit(2)->get();
//     $_about_us_footer = AboutUs::select('*')->orderBy('rank')->first();
//     $_audio = File::where('file_type', 'audio')->first();
//     $_aboutSlider = Slider::select('photo')->orderBy('rank')->active()->skip(1)->first() ?? null;

//     $_breaking = Notice::select('title', 'slug', 'excerpt', 'created_at')->whereIn('displaystat', [1, 2])->active()->limit(10)->get();
//     $_partner = Partner::active()->rank()->get();
//     $_isinfo = Member::select('name', 'post', 'photo', 'excerpt', 'phone', 'email', 'isinfo')
//         ->active()
//         ->where('isinfo', 1)
//         ->limit(1)
//         ->get();

//     $_blog = Blog::latest()->whereIn('type', ['blog'])->latest()->active()->limit(3)->get();

//     $opening_times =  Hour::pluck('excerpt')->all();


//     $site_data->with([
//         '_seo' => \App\Models\Seo::first(),
//         '_site_profile' => $site_profile,
//         '_message' => $_message,
//         '_aboutSlider' => $_aboutSlider,
//         '_member_category' => $_member_category,

//         '_service_category' => $_service_category,
//         '_about_us' => $_about_us,
//         '_breaking' => $_breaking,
//         '_partner' => $_partner,
//         '_event_form' => $_event_form,
//         '_about_us_footer' => $_about_us_footer,
//         '_isinfo' => $_isinfo,
//         '_audio' => $_audio,
//         '_blog' => $_blog,
//         'opening_times' => $opening_times
//     ]);
// });


// Route::get('/',                     [HomeController::class, 'index'])->name('index');
// Route::get('notice-detail/{slug}',  [HomeController::class, 'noticeDetail'])->name('noticeDetail');
// Route::get('admissions',          [HomeController::class, 'admissions'])->name('admissions');
// Route::get('facility',          [HomeController::class, 'facility'])->name('facility');
// Route::get('academics',          [HomeController::class, 'academics'])->name('academics');
// Route::get('academic-detail/{slug}', [HomeController::class, 'academicDetail'])->name('academicDetail');
// Route::get('services',          [HomeController::class, 'services'])->name('services');
// Route::get('service/{slug}',           [HomeController::class, 'service'])->name('service');
// Route::get('service-detail/{slug}', [HomeController::class, 'serviceDetail'])->name('serviceDetail');
// Route::get('blog',                  [HomeController::class, 'blog'])->name('blog');
// Route::get('blog/{slug}',                  [HomeController::class, 'blogsDetail'])->name('blogDetail');
// Route::get('partner',                  [HomeController::class, 'partner'])->name('partner');
// Route::get('partner/{slug}',                  [HomeController::class, 'partnersDetail'])->name('partnerDetail');
// Route::get('news',                  [HomeController::class, 'news'])->name('news');
// Route::get('news-detail/{slug}',                  [HomeController::class, 'newsDetail'])->name('newsDetail');

// Route::get('news-detail/{slug}',                  [HomeController::class, 'newsDetail'])->name('newsDetail');
// Route::get('events',                  [HomeController::class, 'events'])->name('events');
// Route::get('event-detail/{slug}',                  [HomeController::class, 'eventsDetail'])->name('eventsDetail');
// Route::get('team',                  [HomeController::class, 'team'])->name('team');
// Route::get('aboutus/',                 [HomeController::class, 'aboutus'])->name('aboutus');
// Route::get('about-detail/{slug}',                 [HomeController::class, 'aboutDetail'])->name('aboutDetail');
// Route::get('memberMessage/{slug}',  [HomeController::class, 'memberMessageDetail'])->name('memberMessage.detail');
// Route::get('team/{slug}',           [HomeController::class, 'teamDetail'])->name('teamDetail');
// Route::get('contact',         [HomeController::class, 'contact'])->name('contact');
// Route::post('contact',        [HomeController::class, 'contactStore'])->name('contact.store');
// Route::get('event-form/{id}',         [HomeController::class, 'eventForm'])->name('eventForm');
// Route::post('event-form/{id}',        [HomeController::class, 'eventStore'])->name('event.store');
// Route::get('notice',          [HomeController::class, 'notice'])->name('notice');
// Route::get('bulletin', [HomeController::class, 'bulletin'])->name('bulletin');
// Route::get('branches', [HomeController::class, 'branches'])->name('branches');
// Route::get('downloads',         [HomeController::class, 'downloads'])->name('downloads');
// Route::get('downloads/{slug}',         [HomeController::class, 'downloadDetail'])->name('downloadDetail');
// Route::get('gallery',         [HomeController::class, 'gallery'])->name('gallery');
// Route::get('gallery/{slug}',  [HomeController::class, 'galleryDetail'])->name('gallery.detail');
// Route::get('video',         [HomeController::class, 'video'])->name('video');
// Route::get('forex',         [HomeController::class, 'forex'])->name('forex');
// Route::get('interest',         [HomeController::class, 'interest'])->name('interest');
// Route::get('career',                  [HomeController::class, 'career'])->name('career');
// Route::get('/career/{slug}', [HomeController::class, 'careerDetail'])->name('careerDetails');

// // Route::get('career/{slug}',           [HomeController::class, 'careerDetail'])->name('careerDetail');
// Route::get('faq',           [HomeController::class, 'faq'])->name('faq');

// Route::get('/bulletinView/{id}', [HomeController::class, 'viewPdf'])->name('bulletin.Viewpdf');
// Route::get('/bulletin/pdf/{id}', [HomeController::class, 'getPdf'])->name('bulletin.pdf');








// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',                     [HomeController::class, 'index'])->name('index');

Route::get('/contact', function () {
    return view('contact');
});
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
