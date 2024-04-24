<?php
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


Route::get('/pos-reset-password', 'Pos\ResetController@posresetForm')->name('pos.reset.branch.password');
Route::post('/pos-reset-password-link', 'Pos\ResetController@posresetLink')->name('pos.reset.link');
Route::get('/pos-reset-password/{token}', function (string $token) {
    return view('auth.passwords.reset', ['token' => $token]);
})->name('forgot-password-link');
Route::post('pos-reset-password-save', 'Pos\ResetController@posResetPassUser')->name('pos.reset.password');


/***************** Admin *******************/
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class,'index'])->name('admin.dashboard');
     /** teacher */
     Route::get('/teacher', [App\Http\Controllers\Admin\TeacherController::class,'index'])->name('admin.teacher')->middleware('can:teacher-list');
     Route::get('/teacher/add/{id?}', [App\Http\Controllers\Admin\TeacherController::class,'form'])->name('admin.teacher.form')->middleware('can:teacher-add');
     Route::post('/teacher/submit',[App\Http\Controllers\Admin\TeacherController::class,'submit'])->name('admin.teacher.submit');
     Route::post('/teacher/ajax',[App\Http\Controllers\Admin\TeacherController::class,'ajax'])->name('admin.teacher.ajax');
     Route::get('/teacher/delete/{id?}', [App\Http\Controllers\Admin\TeacherController::class,'delete'])->name('admin.teacher.delete')->middleware('can:teacher-delete');
     Route::get('/teacher/status/{id?}',[App\Http\Controllers\Admin\TeacherController::class,'teacher_status'])->name('admin.teacher.status');
     /** student */
     Route::get('/student', [App\Http\Controllers\Admin\UserController::class,'index'])->name('admin.student')->middleware('can:student-list');
     Route::get('/student/add/{id?}', [App\Http\Controllers\Admin\UserController::class,'form'])->name('admin.student.form')->middleware('can:student-add');
     Route::post('/student/submit',[App\Http\Controllers\Admin\UserController::class,'submit'])->name('admin.student.submit');
     Route::post('/student/ajax', [App\Http\Controllers\Admin\UserController::class,'ajax'])->name('admin.student.ajax');
     Route::get('/student/delete/{id?}', [App\Http\Controllers\Admin\UserController::class,'delete'])->name('admin.student.delete')->middleware('can:student-delete');
     Route::get('/student/status/{id?}', [App\Http\Controllers\Admin\UserController::class,'student_status'])->name('admin.student.status');
     /** tipper */
     Route::get('/tipper', [App\Http\Controllers\Admin\TipperController::class,'index'])->name('admin.tipper')->middleware('can:teacher-list');
     Route::get('/tipper/add/{id?}', [App\Http\Controllers\Admin\TipperController::class,'form'])->name('admin.tipper.form')->middleware('can:teacher-list');
     Route::post('/tipper/submit',[App\Http\Controllers\Admin\TipperController::class,'submit'])->name('admin.tipper.submit')->middleware('can:teacher-list');
     Route::post('/tipper/ajax',[App\Http\Controllers\Admin\TipperController::class,'ajax'])->name('admin.tipper.ajax');
     Route::get('/tipper/delete/{id?}', [App\Http\Controllers\Admin\TipperController::class,'delete'])->name('admin.tipper.delete')->middleware('can:teacher-list');
     /** Teacher Report */
     Route::get('/teacher_report', [App\Http\Controllers\Admin\ReportController::class,'index'])->name('admin.teacher.report')->middleware('can:reports-list');
     Route::get('/teacher_report/add/{id?}', [App\Http\Controllers\Admin\ReportController::class,'form'])->name('admin.teacher.report.form');
     Route::post('/teacher_report/submit',[App\Http\Controllers\Admin\ReportController::class,'submit'])->name('admin.teacher.report.submit');
     Route::post('/teacher_report/ajax',[App\Http\Controllers\Admin\ReportController::class,'ajax'])->name('admin.teacher.report.ajax');
     Route::get('/delete/{id?}', [App\Http\Controllers\Admin\ReportController::class,'delete'])->name('admin.teacher.report.delete');
    Route::get('/teacher_report/{id}', [App\Http\Controllers\Admin\ReportController::class,'invoice'])->name('admin.report.invoice');
    /** admin */
    Route::get('/sub', [App\Http\Controllers\Admin\AdminController::class,'index'])->name('admin.sub')->middleware('can:admin-list');
    Route::get('/sub/add/{id?}', [App\Http\Controllers\Admin\AdminController::class,'form'])->name('admin.sub.form')->middleware('can:admin-add');
    Route::post('/sub/submit', [App\Http\Controllers\Admin\AdminController::class,'submit'])->name('admin.sub.submit');
    Route::post('/sub/ajax', [App\Http\Controllers\Admin\AdminController::class,'ajax'])->name('admin.sub.ajax');
    Route::get('/sub/delete/{id}', [App\Http\Controllers\Admin\AdminController::class,'deleteAdmin'])->name('admin.sub.deleted')->middleware('can:admin-delete');
    
    /** role */
    Route::get('/role', [App\Http\Controllers\Admin\RoleController::class,'index'])->name('admin.role')->middleware('can:role-list');
    Route::get('/role/add/{id?}', [App\Http\Controllers\Admin\RoleController::class,'form'])->name('admin.role.form')->middleware('can:role-add');
    Route::post('/role/submit', [App\Http\Controllers\Admin\RoleController::class,'submit'])->name('admin.role.submit');
    Route::post('/role/ajax', [App\Http\Controllers\Admin\RoleController::class,'ajax'])->name('admin.role.ajax');

    Route::prefix('account')->group(function () {
        Route::get('/settings', 'Admin\AccountController@index')->name('admin.account.settings');
        Route::post('/save-settings', 'Admin\AccountController@saveSettings')->name('admin.account.save.settings');
    });
    Route::get('/login', 'Auth\AdminLoginController@showAdminLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@adminLogin')->name('admin.post.login');
    Route::get('/logout', 'Admin\AccountController@logoutAdmin')->name('admin.logout');

});
    // ** Website Routes * /
    Route::get('/', [App\Http\Controllers\Frontend\frontendController::class,'index'])->name('website.home');
    Route::get('/home', [App\Http\Controllers\Frontend\frontendController::class,'index'])->name('website.home');
    Route::get('/tip_now', [App\Http\Controllers\Frontend\frontendController::class,'tipNow'])->name('website.tip_now');
    Route::get('/about', [App\Http\Controllers\Frontend\frontendController::class,'about'])->name('website.about');
    Route::get('/contact', [App\Http\Controllers\Frontend\frontendController::class,'contact'])->name('website.contact');
    Route::get('/role', [App\Http\Controllers\Frontend\frontendController::class,'role'])->name('website.role');
    Route::get('/teacher/signup', [App\Http\Controllers\Frontend\frontendController::class,'teacherSignup'])->name('website.teacher.signup');
    Route::get('/setup/teacher/account', [App\Http\Controllers\Frontend\frontendController::class,'teacherAccount'])->name('website.teacher.account');
    Route::get('/teacher/login', [App\Http\Controllers\Frontend\frontendController::class,'teacherLogin'])->name('website.teacher.login');
    //** Tipper */
Route::prefix('tipper')->group(function () {
    // Route::get('/home', [App\Http\Controllers\Frontend\frontendController::class,'index'])->name('website.home');
    Route::get('/setup/account', [App\Http\Controllers\Frontend\tipperController::class,'tipperAccount'])->name('website.tipper.account');
    Route::post('/setup/account/post/{id}', [App\Http\Controllers\Frontend\tipperController::class,'tipperAccountPost'])->name('website.tipper.account.post');
    Route::get('/signup', [App\Http\Controllers\Frontend\tipperController::class,'tipperSignup'])->name('website.tipper.signup');
    Route::post('/siginup/post',[App\Http\Controllers\Frontend\tipperController::class,'tipperSignupPost'])->name('website.tipper.signup.post');
    Route::get('/login', [App\Http\Controllers\Frontend\tipperController::class,'tipperLogin'])->name('website.tipper.login');
    Route::post('/login/post', [App\Http\Controllers\Frontend\tipperController::class,'tipperLoginPost'])->name('website.tipper.login.post');
    Route::get('/logout', [App\Http\Controllers\Frontend\tipperController::class,'tipperLogout'])->name('website.tipper.logout');
});
// ** Teacher */
Route::prefix('teacher')->group(function () {
    // Route::get('/home', [App\Http\Controllers\Frontend\frontendController::class,'index'])->name('website.home');
    Route::get('/setup/account', [App\Http\Controllers\Frontend\teacherController::class,'teacherAccount'])->name('website.teacher.account');
    Route::post('/setup/account/{id}', [App\Http\Controllers\Frontend\teacherController::class,'teacherAccountPost'])->name('website.teacher.account.post');
    Route::get('/signup', [App\Http\Controllers\Frontend\teacherController::class,'teacherSignup'])->name('website.teacher.signup');
    Route::post('/siginup/post',[App\Http\Controllers\Frontend\teacherController::class,'teacherSignupPost'])->name('website.teacher.signup.post');
    Route::get('/login', [App\Http\Controllers\Frontend\teacherController::class,'teacherLogin'])->name('website.teacher.login');
    Route::post('/login/post', [App\Http\Controllers\Frontend\teacherController::class,'teacherLoginPost'])->name('website.teacher.login.post');
    Route::get('/logout', [App\Http\Controllers\Frontend\teacherController::class,'teacherLogout'])->name('website.teacher.logout');
});
    Route::get('/dashboard', [App\Http\Controllers\Frontend\frontendController::class,'teacher_dashboard'])->name('teacher.dashboard');


