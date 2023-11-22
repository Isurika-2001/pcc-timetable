<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class RegisterController extends Controller
{
    public function create(Request $request)
    {
        // Validation rules for registration form
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        // Redirect back if validation fails with errors and old input
        if ($validator->fails()) {
            return redirect('/admin/register')
                        ->withErrors($validator)
                        ->withInput()
                        ->with('error', 'Registration failed. Please correct the errors.');
        }

        try {
            // Create a new user record
            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
            ]);

            // Additional logic if required, such as assigning roles or permissions

            // Log successful registration
            Log::info("User registered successfully: {$user->email}");

            // Flash success message to the session
            return redirect()->route('admin.teacher')->with('success', 'User created successfully!');
        } catch (\Exception $e) {
            // Log registration error
            Log::error("User registration failed: {$e->getMessage()}");

            // Flash error message to the session
            return redirect('/admin/register')->withErrors(['Registration failed. Please try again.'])->with('error', 'Registration failed. Please try again.');
        }
    }
}
