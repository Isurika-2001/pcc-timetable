<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        $user = auth()->user();

        // Check user role and return the corresponding dashboard view
        switch ($user->user_type) {
            case 'admin':
                return redirect()->route('admin.dashboard');
            case 'staff':
                return redirect()->route('staff.dashboard');
            case 'teacher':
                return redirect()->route('teacher.dashboard');
            case 'user':
                return redirect()->route('user.dashboard');
            default:
                abort(403, 'Unauthorized');
        }
    })->name('dashboard');
});

Route::middleware(['auth', 'user-type:admin'])->group(function () {
    // admin dashboard
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/register', [AdminController::class, 'register'])->name('admin.register');
    // web.php
    Route::post('/admin/register', [App\Http\Controllers\Auth\RegisterController::class, 'create'])
    ->middleware(['admin', 'web'])
    ->name('admin.register.post');


    // class room routes
    Route::get('/admin/primary-classroom', function () {
        return view('admin.classroom.primary-classroom');
    })->name('admin.primary-classroom');
    Route::get('/admin/secondary-classroom', function () {
        return view('admin.classroom.secondary-classroom');
    })->name('admin.secondary-classroom');
    Route::get('/admin/ol-classroom', function () {
        return view('admin.classroom.ol-classroom');
    })->name('admin.ol-classroom');
    Route::get('/admin/al-classroom', function () {
        return view('admin.classroom.al-classroom');
    })->name('admin.al-classroom');
    Route::get('/admin/lab', function () {
        return view('admin.classroom.lab');
    })->name('admin.lab');


    // subject routes
    Route::get('/admin/primary-subject', function () {
        return view('admin.subject.primary-subject');
    })->name('admin.primary-subject');
    Route::get('/admin/secondary-subject', function () {
        return view('admin.subject.secondary-subject');
    })->name('admin.secondary-subject');
    Route::get('/admin/ol-subject', function () {
        return view('admin.subject.ol-subject');
    })->name('admin.ol-subject');
    Route::get('/admin/al-subject', function () {
        return view('admin.subject.al-subject');
    })->name('admin.al-subject');

    // teacher routes
    Route::get('/admin/teacher', function () {
        return view('admin.teacher.teacher');
    })->name('admin.teacher');

    // resource routes
    Route::get('/admin/it-lab-resource', function () {
        return view('admin.resource.it-lab-resource');
    })->name('admin.it-lab-resource');
    Route::get('/admin/science-lab-resource', function () {
        return view('admin.resource.science-lab-resource');
    })->name('admin.science-lab-resource');
});

Route::middleware(['auth', 'user-type:staff'])->group(function () {
    Route::get('/staff/dashboard', [StaffController::class, 'dashboard'])->name('staff.dashboard');
    // Add other staff routes here
});

Route::middleware(['auth', 'user-type:teacher'])->group(function () {
    Route::get('/teacher/dashboard', [TeacherController::class, 'dashboard'])->name('teacher.dashboard');

    Route::get('/teacher/timetable-allocation', function () {
        return view('teacher.timetable-allocation');
    })->name('teacher.timetable-allocation');
});

Route::middleware(['auth', 'user-type:user'])->group(function () {
    Route::get('/user/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
    // Add other user routes here
});
