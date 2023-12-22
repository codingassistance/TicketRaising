<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function getUserInfo()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $admin = User::where('dropdown', 'Admin')->first();
            return view('profiles.profile_info', [
                'userData' => $user,
                'admin' => $admin
            ]);
        } else {
            return view('home.land');
        }
    }

    public function edit()
    {
        if (Auth::check()) {
            $user = Auth::user();
            return view('profiles.profile_edit', [
                'user' => $user,
            ]);
        } else {
            return view('home.land');
        }
    }

    public function update(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $user = User::where('token', $user->token)->first();
            $request->validate([
                'fname' => 'required|string|max:255',
                'semail' => 'required|email|unique:users,semail,' . $user->id,
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);
            if ($request->hasFile('image')) {
                $image_name = time() . '.' . $request->image->extension();
                $request->image->move(public_path('users'), $image_name);
                $path = "/users/" . $image_name;
                $user->image = $path;
            }
            $user->fname = $request->input('fname');
            $user->lname = $request->input('lname');
            $user->semail = $request->input('semail');
            $user->save();
            return redirect()->route('profile.info')
                ->with('success', 'Profile updated successfully');
        } else {
            return view('home.land');
        }
    }
    public function destroy()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $user = User::where('token', $user->token)->first();
            $user->delete();
            Auth::logout();
            return view('home.land');
        }
        return view('home.land');
    }
}
