<?php

namespace App\Http\Controllers;

use App\logs;
use App\Models\User as ModelsUser;
use \App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules\Unique;


class AuthController extends Controller
{
    public function login()
    {
        return view('Auth.login');
    }

    public function postlogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email|min:9',
            'password' => 'required|string'
        ]);
        if(Auth::attempt($request->only('email', 'password'))) {

        $user =Auth::User();
        $email = $user->email;
        $name = $user->name;
        $role = $user->role;
        $role = $user->role;

        $dt = Carbon::now();
        $time = $dt->toDayDateTimeString();

        $acloging= [

            'username' => $name,
            'email' => $email,
            'role' => $role,
            'status' => 'login',
            'date'=>$time,


        ];

            logs::create($acloging);
            return redirect('/home')->with('login', 'Login Sucesso');

        } else {


            return redirect('/auth/login')->with('fail', 'Username ou Password Sala');







        }

    }
    public function logout(Request $request)
    {

        $user = Auth::User();
        Session::put('user',$user);
        $user= Session::get('user');
        $email = $user->email;
        $name = $user->name;
        $role = $user->role;




        $dt = Carbon::now();
        $time = $dt->toDayDateTimeString();



        $aclog= [

            'username' => $name,
            'email' => $email,
            'role' => $role,
            'status' => 'logout',
            'date'=>$time,


        ];

        logs::create($aclog);
        Auth::logout();
        return redirect('/auth/login')->with('logout', 'Log Out ho Successo');
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
