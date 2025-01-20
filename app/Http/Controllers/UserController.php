<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function indexprofile()
    {
        $user = User::findOrFail(Auth::id());
        return view('users/profile', compact('user'));
    }

    public function indexeditprofile(string $id)
    {
        $user = User::findOrFail($id);
        return view('users/detailprofile', compact('user'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'user_name' => ['required'],
            'email' => ['required', 'email'],
            'phone_number' => ['nullable', 'regex:/(0)[0-9]{9}/'],
            'address' => ['nullable', 'string'],
            'picture_profile' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        $user = User::find($id);
        if (!$user) {
            return redirect()->route('profile')->with('error', 'User not found.');
        }

        if ($request->has('picture_profile')){
            $image = $request->file('picture_profile');
            $image_url = $image->storeAs('picture_profile', $image->hashName(), 'public');
        } else {
            $image_url = $user->picture_profile;
        }

        $user->update([
            'user_name' => $request->user_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'picture_profile' => $image_url,
        ]);
        return redirect()->route('profile')->with('success', 'User updated successfully.');
    }

    public function profileAdmin($id)
    {
        $role = Role::all();
        $user = User::findOrFail($id);
        return view('admin/profileadmin', compact('user', 'role'));
    }

    public function updateadmin(Request $request, string $id)
    {
        $request->validate([
            'user_name' => ['required'],
            'email' => ['required', 'email'],
            'phone_number' => ['nullable', 'regex:/(0)[0-9]{9}/'],
            'picture_profile' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        $user = User::find($id);
        if (!$user) {
            return redirect()->route('profile')->with('error', 'User not found.');
        }

        if ($request->has('picture_profile')){
            $image = $request->file('picture_profile');
            $image_url = $image->storeAs('picture_profile', $image->hashName(), 'public');
        } else {
            $image_url = $user->picture_profile;
        }

        $user->update([
            'user_name' => $request->user_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'picture_profile' => $image_url,
        ]);
        return redirect()->route('dashboard')->with('success', 'User updated successfully.');
    }

    public function index(Request $request)
    {
        if ($request->has('search')) {
            $search = $request->input('search');
            $users = User::where('user_name', 'like', '%' . $search . '%')->paginate(10);
        } else {
            $users = User::paginate(10);
        }
        $role = Role::paginate(10);
        return view('admin/manageUsers', compact('users', 'role'));
    }

    public function profileUser($id)
    {
        $role = Role::all();
        $user = User::findOrFail($id);
        return view('admin/profileuser', compact('user', 'role'));
    }

    public function updateuser(Request $request, string $id)
    {
        $request->validate([
            'user_name' => ['required'],
            'email' => ['required', 'email'],
            'phone_number' => ['nullable', 'regex:/(0)[0-9]{9}/'],
            'address' => ['nullable', 'string'],
            'picture_profile' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        $user = User::find($id);
        if (!$user) {
            return redirect()->route('profile')->with('error', 'User not found.');
        }

        if ($request->has('picture_profile')){
            $image = $request->file('picture_profile');
            $image_url = $image->storeAs('picture_profile', $image->hashName(), 'public');
        } else {
            $image_url = $user->picture_profile;
        }

        $user->update([
            'user_name' => $request->user_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'picture_profile' => $image_url,
        ]);
        return redirect()->route('users')->with('success', 'User updated successfully.');
    }

    public function delete(string $id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users')->with('success', 'User deleted successfully.');
    }
}
