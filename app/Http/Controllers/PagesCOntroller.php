<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PagesCOntroller extends Controller
{
    public function index()
    {
        return view('pages.layout');
    }
    public function register(Request $request)
    {
        $this->validate($request, [
            'surname' => 'required|string',
            'other_names' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required',
            'picture' => 'required|image|mimes:jpeg,png,jpg|max:6048'
        ]);
        $user = new User;
        $user->surname = $request->input('surname');
        $user->other_names = $request->input('other_names');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $fileNameWithExt = $request->picture->getClientOriginalName();
        $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $Extension = $request->picture->getClientOriginalExtension();
        $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
        $path = $request->picture->storeAs('officers', $filenameToStore, 'public');
        $user->picture = $filenameToStore;
        $user->save();
        $user->attachRole('driver');
        return redirect()->route('login');
    }
}
