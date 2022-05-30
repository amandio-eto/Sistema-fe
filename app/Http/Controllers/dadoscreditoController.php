<?php



namespace App\Http\Controllers;

use App\arcivo;
use Illuminate\Http\Request;
use \App\credito;
use App\double;
use \App\saldoosan;
use \App\durasaun;
use \App\idcredito;
use App\osanfunan;
use App\level;
use App\logs;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use RealRashid\SweetAlert\Facades\Alert;

class dadoscreditoController extends Controller
{
    public function index(Request $request)
    {

        if ($request->has('buka')) {
            $app = credito::where('naran', 'LIKE', '%' . $request->buka . '%')
                ->OrWhere('clientid', 'LIKE', '%' . $request->buka . '%')
                ->get();
        } else {

            $app = credito::with('durasaun','osanfunan','setoran','osanfunan')->orderBy('id', 'ASC', 'naran', 'ASC')->get();



        }




        $saldo = saldo();
        $id = idcredito::all();
        $durasaun = durasaun::all();
        $osan = osanfunan::all();

        return view('layout.dadoscredito', compact('saldo', 'durasaun', 'id', 'app', 'osan'));
    }

    public function report()
    {

        $credito = credito::with('setoran')->get();
        return view('layout.report', compact('credito'));
    }

    // ida nee mak Create

    public function create(Request $request)

    {

        $this->validate($request, [

            'naran' => 'required',
            'data_moris' => 'required',
            'suco' => 'required',
            'padministrativo' => 'required',
            'municipio' => 'required',
            'salario' => 'required',
            //         'total_credito ' => 'required',
            //         'phone' => 'required',
            //         'foto' => 'required',
            //         'source' => 'required',
            //         'osan_funan' => 'required',
            //         'durasaun' => 'required',
            //         'hela_fatin' => 'required',
            //         'total_credito' => 'required',
            //         'source' => 'required',
            //         'durasaun' => 'required',
            //         'osan_funan' => 'required',
            //         'phone' => 'required',
            //         'foto' => 'required'





        ]);


        $app = credito::create($request->all());

        $user =Auth::User();
        $name = $user->name;
        $email = $user->email;
        $role = $user->role;
        $dt = Carbon::now();
        $time = $dt->toDayDateTimeString();

        $create = [

            'username' => $name,
            'email' => $email,
            'role' => $role,
            'status' => 'Cria Dados Registo Credito Foun',
            'date'=>$time,


        ];




        if ($request->hasFile('foto')) {

            $request->file('foto')->move('images/', $request->file('foto')->getClientOriginalName());
            $app->foto =  $request->file('foto')->getClientOriginalName();
            $app->save();
        }

        logs::create($create);
        return redirect('/Dadoscredito')->with('success', 'Hatama Ona ho Sucesso');
    }

    //ida nee Mak Update Husi Sistema
    public function edit($id)
    {

        $data = credito::find($id);
        $durasaun = durasaun::all();
        $osan = osanfunan::all();

        return view('layout.dadoscredito_edit', compact('data', 'durasaun', 'osan'));
    }

    public function update(Request $request, $id)
    {

        $this->validate($request, [

            'naran' => 'required',
            'data_moris' => 'required',
            'suco' => 'required',
            'padministrativo' => 'required',
            'municipio' => 'required',
            'salario' => 'required',







        ]);





        $app = credito::find($id);
        $app->update($request->all());

        $user =Auth::User();
        $name = $user->name;
        $email = $user->email;
        $role = $user->role;
        $dt = Carbon::now();
        $time = $dt->toDayDateTimeString();

        $update = [

            'username' => $name,
            'email' => $email,
            'role' => $role,
            'user_modify' => 'User Update Dados Credito',
            'status' => 'Update',
            'date'=>$time,


        ];
        logs::create($update);
        return redirect('/Dadoscredito')->with('success', 'Dados Ita Boot Nia Dados Update Ona  ');
    }

    // ida nee Mak Nia Post Update Mak Nee









    // ida nee mak Delete
    public function delete($id)
    {
        $app = credito::find($id);
        $app->delete($app);

        $user =Auth::User();
        $name = $user->name;
        $email = $user->email;
        $role = $user->role;
        $dt = Carbon::now();
        $time = $dt->toDayDateTimeString();

        $delete = [

            'username' => $name,
            'email' => $email,
            'role' => $role,
            'user_modify' => 'Delete Dados Credito',
            'status' => 'User Delete File Credito',
            'date'=>$time,


        ];
        logs::create($delete);
        return redirect('/Dadoscredito')->with('success', 'Dados Ita Boot Hamos Ona');
    }




    // ida nee mak Detail Huis Sistema

    public function detail($id)
    {

    
                        //todo Ida nee Mak Rohan Husi Ida nee Mak Rohan Husi Double
                        $app = credito::with('setoran','durasaun','arcivo','double','osanfunan')->get()->find($id);
                        $osan = osanfunan::all();
                        $tempo = durasaun::orderBy('tempo', 'ASC')->get();
                        $fulan = ($app->total_credito) / ($app->durasaun->tempo) + ($app->total_credito * $app->osanfunan->osanfunan);
                        $conta = ($app->setoran->sum('update_selu')) / ($fulan * $app->durasaun->tempo);
                        return view('layout.detail', compact('app', 'fulan', 'conta', 'tempo','osan'));
    }
}
