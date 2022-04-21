<?php

namespace App\Http\Controllers;

use \App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Validation\Rules\Unique;

class AuthController extends Controller
{
    public function login()
    {
        return view('Auth.login');
    }

    public function postlogin(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/Dasboard');
        }
        return redirect('/auth/login');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/auth/login');
    }

    // ida nee Mka Halo User Husi SIstema Iha Base de Dados\

    public function create()
    {

        // ida nee Mak User Husi Sistema
        $data = User::all();
        return view('Auth.create', compact('data'));




        // ida nee Mak ENding Husi Sistema



    }

    public function register(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|string|',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6',
            'role' => 'required',
            'foto' => 'required',



        ]);

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'role' => $request['role'],
            'foto' => $request['foto'],
            'password' => bcrypt($request['password']),
            'confirm' => $request->password
        ]);
        $user->save();


        if ($request->hasFile('foto')) {

            $request->file('foto')->move('arquivo/', $request->file('foto')->getClientOriginalName());
            $user->foto =  $request->file('foto')->getClientOriginalName();
            $user->save();
        }

        return redirect('/auth/create/user')->with('success', 'Conta Utiligador Cria Ona ho Successo');
    }

    public function delete($id)
    {
        $data = User::find($id);
        $data->delete($id);
        return redirect('/auth/create/user')->with('success', 'Conta Utiligador Hamos Ona ho Successo');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('Auth.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|string|',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6',
            'role' => 'required',
            'foto' => 'required'

        ]);

        $user = User::find($id);
        $user->update([
            'name' => $request['name'],
            'email' => $request['email'],
            'role' => $request['role'],
            'foto' => $request['foto'],
            'password' => bcrypt($request['password']),
            'confirm' => $request->password
        ]);
        $user->save();


        if ($request->hasFile('foto')) {

            $request->file('foto')->move('images/', $request->file('foto')->getClientOriginalName());
            $user->foto =  $request->file('foto')->getClientOriginalName();
            $user->save();
        }
        return redirect('/auth/create/user')->with('success', 'Ita Boot nia Dados Update Ona');
    }
}
