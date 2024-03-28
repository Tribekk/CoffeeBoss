<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request){
        $user = $request->only(['email', 'password']);
        if(auth()->attempt($user)){
            return redirect(route('user.thisUser'));
        }
        return redirect(route('user.login'))->withErrors('Не верно введён логин и/или пароль');
    }

    public function logout(){
        auth()->logout();
        return redirect()->intended('/');
    }

    public function signup(Request $request){
        $request->validate([
            "email" => ["required", "email", "string", "unique:users"],
            "password" => ["required", "confirmed", "min:8"],
            'name' => ['required', 'string']
        ]);
        $user = User::create([
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'name' => $request->name
        ]);
        if($request['check']!=''){
            Auth::login($user);
        }
        return redirect(route('user.thisUser'));
    }

    public function user(){
        $user = auth()->user();

        return view('user.user', compact('user'));
    }
    public function destroy(){
        auth()->user()->delete();

        return view('user.login');
    }

    public function avatar(Request $request){
        $path = $request->file('file')->store('avatars', 'public');
        $user = Auth::user();
        $user->avatar = $path;
        $mime = $request->file('file')->getMimeType();
        if ($mime[0]!='i' and $mime[1]!='m'){
            return redirect(route('user.update.avatar'))->withErrors('Выберите фото');
        }
        if ($user->save()){
            return redirect(route('user.thisUser'));
        }
        return redirect(route('user.thisUser'))->withErrors('Файл повреждён');
    }

    public function password(Request $request){
        $request->validate([
            "password" => ["required", "confirmed", "min:8"]
        ]);
        $user = auth()->user();
        if (Hash::check($request->oldPassword, $user->password)) {
            $user->password = bcrypt($request->password);
            $user->save();
            return redirect(route('user.update.password'))->withErrors('Успех');
        }
        return redirect(route('user.update.password'))->withErrors('Не верный пароль');
    }
}
