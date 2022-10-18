<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $rules = [
            'email'     => 'required|email',
            'password'  => 'required|min:8'
        ];

        $messages = [
            'email.required'    => 'E-mail wajib diisi',
            'email.email'       => 'E-mail wajib nu baleg',
            'password.required' => 'Password wajib diisi',
            'password.min'      => 'Password minimal mengandung 8 karakter',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        $data = [
            'email'     => $request->email,
            'password'  => $request->password,
        ];

        if($request->has('remember')) {
            $remember = true;
        } else {
            $remember = false;
        }

        Auth::attempt($data, $remember);


        if(Auth::check()) {
            return redirect()->to('/seePost');
        }

        return redirect()->back()->withErrors(['error' => 'Email / Password salah'])->withInput($request->all);
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->to('/');
    }

    public function view()
    {
        $posts = DB::table('posts')->orderBy('posts.id', 'desc')->get();

        return view('welcome', ['posts' => $posts]);
    }

    public function loginUser()
    {
        return view('form.auth');
    }
}
