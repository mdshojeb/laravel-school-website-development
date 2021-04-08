<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\UserdataController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\YoutubeController;
use App\Http\Controllers\Notice;
use App\Http\Controllers\Link;

//About Us Controller
use App\Http\Controllers\AboutUs\AboutSchoolController;
use App\Http\Controllers\AboutUs\AboutCampusController;
use App\Http\Controllers\AboutUs\SchoolComity;
use App\Http\Controllers\AboutUs\Teacher;
use App\Http\Controllers\AboutUs\Memory;
//Academic Controller
use App\Http\Controllers\Academic\ClassRoutin;
use App\Http\Controllers\Academic\Suggestion;
use App\Http\Controllers\Academic\AcademicRules;
use App\Http\Controllers\Message;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class,'homepage']);

//registration
Route::post('/newregistration',[UserAuthController::class,'newreg'])->name('postreg');
//login form
Route::post('/submitlogin',[UserAuthController::class,'check'])->name('submitlogin');

//logout
Route::get('/logout',[UserAuthController::class,'logout']);

//all frontend route
Route::get('/আমাদের স্কুল সম্পর্কে',[AboutSchoolController::class,'aboutschool'])->name('about');
Route::get('/আমাদের ক্যাম্পাস',[AboutCampusController::class,'aboutcampus'])->name('campus');


Route::get('/আমাদের শিক্ষকবৃন্দ',[Teacher::class,'teacherInfo'])->name('teachers');

Route::get('/আমাদের স্মরণীয় দিনগুলী',[Memory::class,'show'] )->name('mday');
Route::get('/singlePost/{id}/{slug}',[Memory::class,'showmemory'] )->name('singlePost');


Route::get('স্কুলের পরিচালনা পর্ষদ',[SchoolComity::class,'ComityInfo'])->name('mcomity');
//Notice frontend routes
Route::get('/all-notices',[Notice::class,'allnoticeshow']);
Route::get('/show-notice/{id}',[Notice::class,'shownotice']);

// login registration route
Route::get('/register',function(){
    return view('frontend.register');
});
Route::get('/login',function(){
    return view('frontend.login');
})->name('login');


// Academic frontend route
Route::get('/class-routine',[ClassRoutin::class,'classroutin'])->name('class-routin');

Route::get('/class-suggestion',[Suggestion::class,'suggestions'])->name('suggestion');
Route::get('/academic-rules',[AcademicRules::class,'academicrules']);

Route::get('/memoryable-picture',function(){
    return view('frontend.photo-gallery');
})->name('photogallery');

Route::get('/show-message/{id}',[HomeController::class,'showmsg']);


// All backend route here
Route::middleware(['auth'])->group(function(){
    Route::get('/admin',function(){
        return view('backend.dashboard');
    });
    Route::view('/dashboard','backend.dashboard');
    //user data route
    Route::get('/userlist',[UserdataController::class,'listing']);
    Route::get('/useredit/{id}',[UserdataController::class,'useredit']);
    Route::post('/userupdate/{id}',[UserdataController::class,'userupdate']);
    Route::get('/userdelete/{id}',[UserdataController::class,'userdelete']);
    
    //contact adress routes
    Route::get('/contact-add-form', [ContactController::class,'show']);
    Route::post('/contact-update',[ContactController::class,'update']);
    //social media routes
    Route::get('/social-edit', [ContactController::class,'showsocial']);
    Route::post('/social-update', [ContactController::class,'socialupdate']);

    //youtube class add
    Route::get('/youtube-class-list', [YoutubeController::class,'show']);
    Route::view('/youtube-class-add', 'backend.social.youtube.classadd');
    Route::post('/new-class-add', [YoutubeController::class,'insert']);
    Route::get('/classdelete/{id}', [YoutubeController::class,'delete']);

    //Breaking News Routes
    Route::view('/create-notice','backend.notice.create');
    Route::post('/create-notice-post', [Notice::class,'insert']);
    Route::get('/notice-list',[Notice::class,'show']);
    Route::get('/notice-delete/{id}',[Notice::class,'delete']);


    //About Us Routes
    Route::get('/about-school-add', [AboutSchoolController::class,'show']);
    Route::post('/about-school-insert/{id}', [AboutSchoolController::class,'insert']);
    Route::get('/about-campus-add', [AboutCampusController::class,'show']);
    Route::post('/about-campus-insert/{id}', [AboutCampusController::class,'insert']);

    //teacer info 
    Route::view('/about-teacher-add','backend.about-us.teacher.create');
    Route::post('/about-teacher-create',[Teacher::class, 'create']);
    Route::get('/teacher-list',[Teacher::class, 'list']);
    Route::get('/teacher-delete/{id}',[Teacher::class, 'delete']);

    //school comity routes
    Route::view('/about-comitee-add','backend.about-us.school-comity.create');
    Route::post('/about-comitee-create',[SchoolComity::class, 'create']);
    Route::get('/comitee-list',[SchoolComity::class, 'list']);
    Route::get('/comitee-delete/{id}',[SchoolComity::class, 'delete']);

    // Memory CRUD
    Route::view('/create-memory','backend.memory.create');
    Route::get('/show-all-memory',[Memory::class,'ShowMemorylist']);
    Route::post('/memory-add',[Memory::class,'insert']);
    Route::get('/delete-memory/{id}',[Memory::class,'delete']);
    Route::get('/edit-memory/{id}',[Memory::class,'edit']);
    Route::post('/update-memory/{id}',[Memory::class,'update']);
    
    //=====================
    //academic Routes
    //====================
    //class routin CRUD
    Route::view('/class-routin-add','backend.academic.class-routin.create');
    Route::post('/upload-routin',[ClassRoutin::class, 'create']);
    Route::get('/routin-list',[ClassRoutin::class, 'list']);
    Route::get('/routin-delete/{id}',[ClassRoutin::class, 'delete']);

     //Suggestion CRUD
     Route::view('/suggestion-add','backend.academic.suggestion.create');
     Route::post('/upload-suggestion',[Suggestion::class, 'create']);
     Route::get('/suggestion-list',[Suggestion::class, 'list']);
     Route::get('/suggestion-delete/{id}',[Suggestion::class, 'delete']);

     //Academic Rules
     Route::get('/academic-rules-add',[AcademicRules::class,'show']);
     Route::post('/academic-rules-insert/{id}',[AcademicRules::class,'insert']);

     //upload slider image
     Route::view('upload-slider-image','backend.slider.create');
     Route::post('/upload-slider-image-post',[SliderController::class,'insert']);
     Route::get('/slider-image-list',[SliderController::class,'list']);
     Route::get('/slider-image-delete/{id}',[SliderController::class,'delete']);

     //Message CRUD
     Route::view('/create-message','backend.message.create');
     Route::post('/create-message-post',[Message::class,'insert']);
     Route::get('/update-message/{id}',[Message::class,'edit']);
     Route::post('/update-message-post/{id}',[Message::class,'update']);
     Route::get('/see-all-message',[Message::class,'list']);
     Route::get('/message-delete/{id}',[Message::class,'delete']);

     //Imporatant link
     Route::view('/create-link','backend.link.create');
     Route::post('create-link-post',[Link::class,'insert']);
     Route::get('/link-list',[Link::class,'list']);
     Route::get('/link-delete/{id}',[Link::class,'delete']);


    
    
});

Route::get('/time',function(){
    $a = DB::table('memory')->where('id',4)->get();
    $url=$a[0]->title;
    $exp=explode(' ',$url);
    $imp=implode('-',$exp);
    return $imp;
    
});
