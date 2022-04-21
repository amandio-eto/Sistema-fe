<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\credito;
use \App\saldoosan;
use \App\durasaun;
use \App\idcredito;
use App\osanfunan;
use RealRashid\SweetAlert\Facades\Alert;

class dadoscreditoController extends Controller
{
    public function index(Request $request)
    {


        if ($request->has('cari')) {
            $app = credito::where('naran', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $app = credito::orderBy('id', 'DESC')->Paginate(20);
        };


        $saldo = saldoosan::all();
        $id = idcredito::all();
        $durasaun = durasaun::all();
        $osan = osanfunan::all();

        return view('layout.dadoscredito', compact('saldo', 'durasaun', 'id', 'app', 'osan'));
    }

    public function report()
    {
        return view('layout.report');
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


        if ($request->hasFile('foto')) {

            $request->file('foto')->move('images/', $request->file('foto')->getClientOriginalName());
            $app->foto =  $request->file('foto')->getClientOriginalName();
            $app->save();
        }


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
        return redirect('/Dadoscredito')->with('success', 'Dados Ita Boot Nia Dados Update Ona  ');
    }

    // ida nee Mak Nia Post Update Mak Nee









    // ida nee mak Delete
    public function delete($id)
    {
        $app = credito::find($id);
        $app->delete($app);
        return redirect('/Dadoscredito')->with('success', 'Dados Ita Boot Hamos Ona');
    }




    // ida nee mak Detail Huis Sistema

    public function detail($id)
    {
        $app = credito::find($id);
        $fulan = ($app->total_credito) / ($app->durasaun->tempo) + ($app->total_credito * $app->osanfunan->osanfunan);
        return view('layout.detail', compact('app', 'fulan'));
    }
}
