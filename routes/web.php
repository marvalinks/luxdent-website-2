<?php

use App\Http\Controllers\AdminModuleController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\CourseModuleController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\LiteracyAssessment;
use App\Http\Controllers\QuestionModuleController;
use App\Http\Controllers\StudentModuleController;
use App\Http\Controllers\UsersModuleController;
use Illuminate\Support\Facades\Route;

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

Route::get('', [FrontendController::class, 'index']);
Route::get('register', [AuthenticationController::class, 'register'])->name('register');
Route::post('register', [AuthenticationController::class, 'postRegister'])->name('register');
Route::get('login', [AuthenticationController::class, 'login'])->name('login');
Route::post('login', [AuthenticationController::class, 'postLogin'])->name('login');
Route::get('logout', [AuthenticationController::class, 'logout'])->name('logout');

Route::get('dashboard', [AuthenticationController::class, 'dashboard'])->name('dashboard');

Route::group(['middleware' => ['guest'], 'prefix' => '', 'as' => 'frontend.'], function () {
    Route::get('home', [FrontendController::class, 'home'])->name('home');
    // Route::get('about', [FrontendController::class, 'about'])->name('about');
    Route::get('course', [FrontendController::class, 'course'])->name('course');
    Route::get('accounting', [FrontendController::class, 'accounting'])->name('accounting');
    Route::get('contact', [FrontendController::class, 'contact'])->name('contact');
    Route::get('services', [FrontendController::class, 'services'])->name('services');
    Route::get('it-services', [FrontendController::class, 'it'])->name('it');
});
Route::group(['middleware' => ['auth'], 'prefix' => 'student', 'as' => 'student.'], function () {
    Route::get('dashboard', [StudentModuleController::class, 'dashboard'])->name('dashboard');

    Route::get('my-account', [StudentModuleController::class, 'myAccount'])->name('my.account');
    Route::post('my-account', [StudentModuleController::class, 'postMyAccount'])->name('my.account');
    Route::post('complete-profile', [StudentModuleController::class, 'completeProfile'])->name('complete.profile');
    
    Route::group(['middleware' => ['complete.profile']], function () {
        Route::get('course-registration', [StudentModuleController::class, 'registerCourse'])->name('register.course');
        Route::get('modules-registration/{id}', [StudentModuleController::class, 'registerModules'])->name('register.modules');
        Route::get('modules-payment/{id}', [StudentModuleController::class, 'payModules'])->name('pay.modules');
        Route::post('modules-payment/{id}', [StudentModuleController::class, 'payModulesPost'])->name('pay.modules');
    
        Route::group(['middleware' => ['no.registration']], function () {
            Route::get('my-courses', [StudentModuleController::class, 'myCourses'])->name('my.courses');
            Route::get('my-courses/{id}', [StudentModuleController::class, 'myCoursesModules'])->name('my.courses.module');
            Route::get('lesson/{id}', [StudentModuleController::class, 'myLesson'])->name('my.lesson');
            Route::get('my-payments', [StudentModuleController::class, 'myPayments'])->name('my.payments');
            Route::get('support', [StudentModuleController::class, 'support'])->name('support');
            Route::post('support', [StudentModuleController::class, 'postSupport'])->name('support');
            Route::get('my-questions', [StudentModuleController::class, 'myQuestions'])->name('my.questions');
            Route::get('quiz/{id}', [StudentModuleController::class, 'quiz'])->name('my.quiz');
            
        });
    });
});
Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('dashboard', [AdminModuleController::class, 'dashboard'])->name('dashboard');
    Route::get('support', [AdminModuleController::class, 'support'])->name('support');
    Route::post('support-update/{id}', [AdminModuleController::class, 'postSupport'])->name('update.support');
    Route::get('payments', [AdminModuleController::class, 'payments'])->name('payments');
    Route::get('verify-payments/{id}', [AdminModuleController::class, 'verifyPayments'])->name('verify.payments');

    Route::group(['middleware' => ['auth'], 'prefix' => 'courses', 'as' => 'courses.'], function () {
        Route::get('', [CourseModuleController::class, 'index'])->name('index');
        Route::get('add', [CourseModuleController::class, 'addCourse'])->name('add');
        Route::post('add', [CourseModuleController::class, 'postCourse'])->name('add');

        Route::get('edit/{id}', [CourseModuleController::class, 'editCourse'])->name('edit');
        Route::post('edit/{id}', [CourseModuleController::class, 'updateCourse'])->name('edit');


        Route::group(['middleware' => ['auth'], 'prefix' => 'modules', 'as' => 'modules.'], function () {
            Route::get('edit/{id}', [CourseModuleController::class, 'editModules'])->name('edit');
            Route::post('edit/{id}', [CourseModuleController::class, 'updateModules'])->name('edit');
            Route::get('{id}', [CourseModuleController::class, 'modules'])->name('index');
            Route::get('{id}/add', [CourseModuleController::class, 'addModules'])->name('add');
            Route::post('{id}/add', [CourseModuleController::class, 'postModules'])->name('add');
        });

        Route::group(['middleware' => ['auth'], 'prefix' => 'lessons', 'as' => 'lessons.'], function () {
            Route::get('edit/{id}', [CourseModuleController::class, 'editLessons'])->name('edit');
            Route::post('edit/{id}', [CourseModuleController::class, 'updateLessons'])->name('edit');
            Route::get('{id}', [CourseModuleController::class, 'lessons'])->name('index');
            Route::get('{id}/add', [CourseModuleController::class, 'addLessons'])->name('add');
            Route::post('{id}/add', [CourseModuleController::class, 'postLessons'])->name('add');
        });
    });

    Route::group(['middleware' => ['auth'], 'prefix' => 'users', 'as' => 'users.'], function () {
        Route::get('', [UsersModuleController::class, 'index'])->name('index');
        Route::get('add', [UsersModuleController::class, 'addUsers'])->name('add');
        Route::post('add', [UsersModuleController::class, 'postUsers'])->name('add');
        Route::get('edit/{id}', [UsersModuleController::class, 'editUsers'])->name('edit');
        Route::post('edit/{id}', [UsersModuleController::class, 'updateUsers'])->name('edit');
    });

    Route::group(['middleware' => ['auth'], 'prefix' => 'questions', 'as' => 'questions.'], function () {
        Route::get('pull/{id}', [QuestionModuleController::class, 'adminIndex'])->name('index');
        Route::get('add/{id}', [QuestionModuleController::class, 'adminAdd'])->name('add');
        Route::post('add/{id}', [QuestionModuleController::class, 'adminPost'])->name('add');
        Route::get('edit/{id}', [QuestionModuleController::class, 'adminEdit'])->name('edit');
        Route::post('edit/{id}', [QuestionModuleController::class, 'adminUpdate'])->name('edit');
    });

    Route::group(['middleware' => ['auth'], 'prefix' => 'literacy', 'as' => 'literacy.'], function () {
        Route::get('pull/{id}', [LiteracyAssessment::class, 'adminIndex'])->name('index');
        Route::get('add/{id}', [LiteracyAssessment::class, 'adminAdd'])->name('add');
        Route::post('add/{id}', [LiteracyAssessment::class, 'adminPost'])->name('add');
        Route::get('edit/{id}', [LiteracyAssessment::class, 'adminEdit'])->name('edit');
        Route::post('edit/{id}', [LiteracyAssessment::class, 'adminUpdate'])->name('edit');
    });

});

