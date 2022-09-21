<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ChatController;
// use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InstrucUserController;
use App\Http\Controllers\RequestController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sign_in', [AuthController::class, 'sign_in'])->name('sign_in');
Route::post('/sign_in', [AuthController::class, 'sign_in_user'])->name('sign_in');
Route::get('/sign_up', [AuthController::class, 'sign_up']);
Route::post('/sign_up', [AuthController::class, 'sign_up_user'])->name('sign_up');
Route::get('/forgot_password', [AuthController::class, 'forgot_password']);
Route::get('/instruc_register', [AuthController::class, 'instruc_register'])->name('instruct_sign_in');
Route::post('/instruc_register', [AuthController::class, 'register_instruc'])->name('instruct_sign_in');



Route::get('admin-dashboard', [AdminController::class, 'index'])->name('admin_dashboard');

Route::get('admin-courses', [AdminController::class, 'show_courses'])->name('admin_courses');
Route::get('admin-create-course', [AdminController::class, 'show_course_create'])->name('admin_new_course');
Route::post('admin-create-course', [AdminController::class, 'new_course'])->name('admin_new_course');
Route::get('admin-course-detail/{id}', [AdminController::class, 'show_course_detail']);

Route::get('admin-instructors', [AdminController::class, 'show_instructors']);

Route::get('admin-users', [AdminController::class, 'show_users']);
Route::get('admin-user-detail/{id}', [AdminController::class, 'show_user_detail']);
Route::get('admin-instructor-detail', [AdminController::class, 'show_instructor_detail']);
Route::get('admin-instructor-detail', [AdminController::class, 'show_instructor_detail']);
Route::get('admin-books', [AdminController::class, 'show_books'])->name('admin_books');
Route::get('admin-book-new', [AdminController::class, 'show_book_new'])->name('admin_new_book');
Route::post('admin-book-new', [AdminController::class, 'new_book'])->name('admin_new_book');
Route::post('/admin_sign_out', [AdminController::class, 'sign_out'])->name('sign_out_admin');



Route::get('/home', [UserController::class, 'home'])->name('home');

Route::get('/courses', [CourseController::class, 'index']);
Route::get('/course-detail/{id}', [CourseController::class, 'detail']);


Route::get('/instructors', [InstructorController::class, 'index']);
Route::get('/instructor-detail/{id}', [InstructorController::class, 'detail']);


Route::get('/instruc-details', [InstrucUserController::class, 'get_details'])->name('instruc_details');

Route::get('/book-library', [BookController::class, 'index']);

Route::get('/user-dashboard', [UserController::class, 'index']);
Route::get('/user-bookmark', [UserController::class, 'bookmark']);
Route::get('/user-edit-profile', [UserController::class, 'edit']);
Route::post('/user-edit-profile', [UserController::class, 'edit_user'])->name('edit_user');
Route::post('/user-edit-image', [UserController::class, 'edit_user_image'])->name('update_image_user');
Route::get('/user-setting', [UserController::class, 'setting']);
Route::get('/user-delete-account', [UserController::class, 'delete']);
Route::get('/user-sign-out', [UserController::class, 'edit']);
Route::get('/user-details', [UserController::class, 'details'])->name('user_details');
Route::post('/user-details', [UserController::class, 'update_details'])->name('update_user_details');
Route::post('/sign_out', [UserController::class, 'sign_out'])->name('sign_out');
// Route::post('/sign_out')
Route::get('/user-requests', [UserController::class, 'requests'])->name('user_request');

Route::get('/user/chat', [ChatController::class, 'index']);

Route::get('/mate', [UserController::class, 'find_mates'])->name('find_mates')->middleware('student');


Route::post('/send-request', [RequestController::class, 'new_request'])->name('send_request');
Route::post('/respond-request', [Requestcontroller::class, 'respond'])->name('respond_request');
