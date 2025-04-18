<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'username' => 'required|string|max:255|unique:users,username',
            'phone_number' => 'required|string|regex:/^[0-9]+$/|unique:users,phone_number|min:10|max:15',
            'address' => 'required|string|max:500',
            'password' => 'required|string|confirmed|min:8',
        ]);

        // Simpan data user
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'password' => Hash::make($request->password),
        ]);

        // Redirect setelah berhasil registrasi
        return redirect()->route('login')->with('success', 'Registration successful! Please log in.');
    }

    public function login(Request $request)
    {
        $request->validate([
            'identifier' => 'required|string',
            'password' => 'required|string',
        ]);

        // Coba login menggunakan email atau username
        $credentials = filter_var($request->identifier, FILTER_VALIDATE_EMAIL)
            ? ['email' => $request->identifier, 'password' => $request->password]
            : ['username' => $request->identifier, 'password' => $request->password];

        if (Auth::attempt($credentials, $request->has('remember'))) {
            // Redirect jika berhasil
            return redirect('/')->with('success', 'Login successful!');
        }

        // Redirect jika gagal
        return back()->withErrors(['identifier' => 'The provided credentials are incorrect.'])
            ->withInput($request->except('password'));
    }

    public function change_password(Request $request)
    {
        $request->validate([
            'old_password' => ['required', function ($attribute, $value, $fail) {
                if (!Hash::check($value, Auth::user()->password)) {
                    $fail('The current password is incorrect.');
                }
            }],
            'new_password' => [
                'required',
                'confirmed',
                'min:8',
            ],
        ]);

        // Update password
        $user = Auth::user();
        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect()
            ->back()
            ->with('success', 'Password has been changed successfully.');
    }

    public function update_profile(Request $request)
    {
        $user = Auth::user();

        // Validate request
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => [
                'required',
                'string',
                'max:255',
                Rule::unique('users')->ignore($user->id)
            ],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore($user->id)
            ],
            'phone_number' => ['required', 'string', 'max:15'],
            'address' => ['required', 'string']
        ]);

        try {
            // Update user
            $user->update([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'address' => $request->address
            ]);

            return redirect()
                ->back()
                ->with('success', 'Profile updated successfully!');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('error', 'Failed to update profile. Please try again.')
                ->withInput();
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login')->with('success', 'Logout successful!');
    }
}
