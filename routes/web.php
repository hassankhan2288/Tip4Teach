<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\tipperController;
use App\Http\Controllers\Auth\TipperLoginController;
use App\Http\Controllers\Tipper\profileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Auth\TeacherLoginController;


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


Route::get('/pos-reset-password', 'Pos\ResetController@posresetForm')->name('pos.reset.branch.password');
Route::post('/pos-reset-password-link', 'Pos\ResetController@posresetLink')->name('pos.reset.link');
Route::get('/pos-reset-password/{token}', function (string $token) {
    return view('auth.passwords.reset', ['token' => $token]);
})->name('forgot-password-link');
Route::post('pos-reset-password-save', 'Pos\ResetController@posResetPassUser')->name('pos.reset.password');


/***************** Admin *******************/
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class,'index'])->name('admin.dashboard');
     /** teacher */
     Route::get('/teacher', [TeacherController::class,'index'])->name('admin.teacher')->middleware('can:teacher-list');
     Route::get('/teacher/add/{id?}', [TeacherController::class,'form'])->name('admin.teacher.form')->middleware('can:teacher-add');
     Route::post('/teacher/submit',[TeacherController::class,'submit'])->name('admin.teacher.submit');
     Route::post('/teacher/ajax',[TeacherController::class,'ajax'])->name('admin.teacher.ajax');
     Route::get('/teacher/delete/{id?}', [TeacherController::class,'delete'])->name('admin.teacher.delete')->middleware('can:teacher-delete');
     Route::get('/teacher/status/{id?}',[TeacherController::class,'teacher_status'])->name('admin.teacher.status');
     /** student */
     Route::get('/student', [UserController::class,'index'])->name('admin.student')->middleware('can:student-list');
     Route::get('/student/add/{id?}', [UserController::class,'form'])->name('admin.student.form')->middleware('can:student-add');
     Route::post('/student/submit',[UserController::class,'submit'])->name('admin.student.submit');
     Route::post('/student/ajax', [UserController::class,'ajax'])->name('admin.student.ajax');
     Route::get('/student/delete/{id?}', [UserController::class,'delete'])->name('admin.student.delete')->middleware('can:student-delete');
     Route::get('/student/status/{id?}', [UserController::class,'student_status'])->name('admin.student.status');
     /** tipper */
     Route::get('/tipper', [App\Http\Controllers\Admin\TipperController::class,'index'])->name('admin.tipper')->middleware('can:teacher-list');
     Route::get('/tipper/add/{id?}', [App\Http\Controllers\Admin\TipperController::class,'form'])->name('admin.tipper.form')->middleware('can:teacher-list');
     Route::post('/tipper/submit',[App\Http\Controllers\Admin\TipperController::class,'submit'])->name('admin.tipper.submit')->middleware('can:teacher-list');
     Route::post('/tipper/ajax',[App\Http\Controllers\Admin\TipperController::class,'ajax'])->name('admin.tipper.ajax');
     Route::get('/tipper/delete/{id?}', [App\Http\Controllers\Admin\TipperController::class,'delete'])->name('admin.tipper.delete')->middleware('can:teacher-list');
     /** Teacher Report */
     Route::get('/teacher_report', [ReportController::class,'index'])->name('admin.teacher.report')->middleware('can:reports-list');
     Route::get('/teacher_report/add/{id?}', [ReportController::class,'form'])->name('admin.teacher.report.form');
     Route::post('/teacher_report/submit',[ReportController::class,'submit'])->name('admin.teacher.report.submit');
     Route::post('/teacher_report/ajax',[ReportController::class,'ajax'])->name('admin.teacher.report.ajax');
     Route::get('/delete/{id?}', [ReportController::class,'delete'])->name('admin.teacher.report.delete');
    Route::get('/teacher_report/{id}', [ReportController::class,'invoice'])->name('admin.report.invoice');
    /** admin */
    Route::get('/sub', [AdminController::class,'index'])->name('admin.sub')->middleware('can:admin-list');
    Route::get('/sub/add/{id?}', [AdminController::class,'form'])->name('admin.sub.form')->middleware('can:admin-add');
    Route::post('/sub/submit', [AdminController::class,'submit'])->name('admin.sub.submit');
    Route::post('/sub/ajax', [AdminController::class,'ajax'])->name('admin.sub.ajax');
    Route::get('/sub/delete/{id}', [AdminController::class,'deleteAdmin'])->name('admin.sub.deleted')->middleware('can:admin-delete');
    
    /** role */
    Route::get('/role', [RoleController::class,'index'])->name('admin.role')->middleware('can:role-list');
    Route::get('/role/add/{id?}', [RoleController::class,'form'])->name('admin.role.form')->middleware('can:role-add');
    Route::post('/role/submit', [RoleController::class,'submit'])->name('admin.role.submit');
    Route::post('/role/ajax', [RoleController::class,'ajax'])->name('admin.role.ajax');

    Route::prefix('account')->group(function () {
        Route::get('/settings', 'Admin\AccountController@index')->name('admin.account.settings');
        Route::post('/save-settings', 'Admin\AccountController@saveSettings')->name('admin.account.save.settings');
    });
    Route::get('/login', 'Auth\AdminLoginController@showAdminLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@adminLogin')->name('admin.post.login');
    Route::get('/logout', 'Admin\AccountController@logoutAdmin')->name('admin.logout');

});
    // ** Website Routes * /
    Route::get('/', [frontendController::class,'index'])->name('website.home');
    Route::get('/home', [frontendController::class,'index'])->name('website.home');
    Route::get('/tip_now', [frontendController::class,'tipNow'])->name('website.tip_now');
    Route::get('/tipping/{id}', [frontendController::class,'tipping'])->name('website.tipping');
    Route::get('/about', [frontendController::class,'about'])->name('website.about');
    Route::get('/contact', [frontendController::class,'contact'])->name('website.contact');
    Route::get('/role', [frontendController::class,'role'])->name('website.role');
    Route::get('/checkout', [frontendController::class,'checkout'])->name('website.checkout');
    //** Tipper */
Route::prefix('tipper')->middleware('auth:tipper')->group(function () {
    Route::get('/setup/account', [tipperController::class,'tipperAccount'])->name('website.tipper.account');
    Route::post('/setup/account/post/{id}', [tipperController::class,'tipperAccountPost'])->name('website.tipper.account.post');
    Route::get('/logout', [tipperController::class,'tipperLogout'])->name('website.tipper.logout');

    // Dashboard
    Route::get('/dashboard', [App\Http\Controllers\Tipper\dashboardController::class,'tipperDashboard'])->name('tipper.dashboard');
    Route::get('/tip/history', [App\Http\Controllers\Tipper\dashboardController::class,'tipHistory'])->name('tipper.tip.history');
    Route::get('/tip-list', [App\Http\Controllers\Tipper\dashboardController::class,'tipList'])->name('tipper.tip.list');

    // Profile
    Route::get('/view-profile/{id}', [profileController::class,'viewProfile'])->name('tipper.view.profile');
    Route::get('/profile/edit{id}', [profileController::class,'ProfileEdit'])->name('tipper.profile.edit');
    Route::post('/profile/update{id}', [profileController::class,'ProfileUpdate'])->name('tipper.profile.update');
    Route::get('/change-password', [profileController::class,'showPassword'])->name('tipper.change.password');
    Route::post('/password-update', [profileController::class,'changePassword'])->name('tipper.password.update');

});
    Route::get('/user-signup', [TipperLoginController::class,'tipperSignup'])->name('website.tipper.signup');
    Route::post('/user/siginup/post',[TipperLoginController::class,'tipperSignupPost'])->name('website.tipper.signup.post');
    Route::get('/user-login', [TipperLoginController::class,'tipperLogin'])->name('website.tipper.login');
    Route::post('/user/login/post', [TipperLoginController::class,'tipperLoginPost'])->name('website.tipper.login.post');


// ** Teacher */
Route::prefix('teacher')->middleware('auth:teacher')->group(function () {
    Route::get('/setup/account', [App\Http\Controllers\Frontend\teacherController::class,'teacherAccount'])->name('website.teacher.account');
    Route::post('/setup/account/{id}', [App\Http\Controllers\Frontend\teacherController::class,'teacherAccountPost'])->name('website.teacher.account.post');
    Route::get('/logout', [App\Http\Controllers\Frontend\teacherController::class,'teacherLogout'])->name('website.teacher.logout');
    Route::get('/dashboard', [frontendController::class,'teacher_dashboard'])->name('teacher.dashboard');
    Route::get('/tip-received-list', [frontendController::class,'tipReceivedList'])->name('teacher.tip.received');
    // Profile
    Route::get('/view-profile/{id}', [App\Http\Controllers\Teacher\profileController::class,'viewProfile'])->name('teacher.view.profile');
    Route::get('/profile/edit{id}', [App\Http\Controllers\Teacher\profileController::class,'ProfileEdit'])->name('teacher.profile.edit');
    Route::post('/profile/update{id}', [App\Http\Controllers\Teacher\profileController::class,'ProfileUpdate'])->name('teacher.profile.update');
    Route::get('/change-password', [App\Http\Controllers\Teacher\profileController::class,'showPassword'])->name('teacher.change.password');
    Route::post('/password-update', [App\Http\Controllers\Teacher\profileController::class,'changePassword'])->name('teacher.password.update');
});

    Route::get('/signup', [TeacherLoginController::class,'teacherSignup'])->name('website.teacher.signup');
    Route::post('/siginup/post',[TeacherLoginController::class,'teacherSignupPost'])->name('website.teacher.signup.post');
    Route::get('/login', [TeacherLoginController::class,'teacherLogin'])->name('website.teacher.login');
    Route::post('/login/post', [TeacherLoginController::class,'teacherLoginPost'])->name('website.teacher.login.post');


