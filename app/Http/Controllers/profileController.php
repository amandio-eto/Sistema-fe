<?php

namespace App\Http\Controllers;

use App\User as AppUser;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Psy\CodeCleaner\FunctionReturnInWriteContextPass;
use Psy\Command\ListCommand\FunctionEnumerator;
use SimpleSoftwareIO\QrCode\Generator;


class profileController extends Controller
{
    public function index()
    {


        $user = auth()->user();
        $qrcode = new Generator;
        return view('profile.index_profile',compact('qrcode','user'));


    }

    // ida nee Mak Troka Passwor Husi Sistema Fe

    public function UpdatePasssword(Request $request){


        $user = auth()->user();
        $olpasswors = $request->old_password;
        $request->validate([

                'old_password' => 'required',
                'password' => 'required|min:8|string|confirmed'
        ]);
        if(hash::check($olpasswors,$user->password)){


                $user->update([
                    'password'=> bcrypt(request('password'))
                ]);
                return redirect('/auth/logout');

        }else{

            return back()->withErrors(['old_password' => 'Password Anterior La Hanesan']);
        }

    }

    // ida nee mak Hohan Husi Troka Password Husi Sistema Fe

    //ida nee mak    edit  Foto Husi cliet Sira
    public Function EditFoto(Request $request)
    {


    $user = Auth::user();
    $user->update([

        'foto' => $request['foto']
    ]);

    if ($request->hasFile('foto')) {

        $request->file('foto')->move('images/', $request->file('foto')->getClientOriginalName());
        $user->foto =  $request->file('foto')->getClientOriginalName();
        $user->save();
    }
    return back()->with('success','ita Boot Nia Nia Profile Foto Update Ona');


    }

    // ida nee Mak Rohan Edit foto Husi User Sira

}
