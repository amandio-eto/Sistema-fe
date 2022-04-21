@extends('master.master')

@section('title','Edit Osan')

@section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="panel">
                    <div class="panel-heading text-center">
                        <h4 >Update Saldo</h4>
                        <div class="img">
                            <img src="{{ asset('foto/images/update.png') }}" alt="" width="80" height="80" style="border-radius: 100%;  border: 2px solid black;">
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <form action="{{ url('/setting/osan/update/'.$data->id) }}" method="POST">
                                @csrf
                            <label for="exampleInputEmail1">Saldo</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="saldo" value="{{ $data->saldo }}">

                          </div>
                          <label for=""> Tipo Utilizasaun</label>
                          <label class="fancy-radio">
                              <input name="tipo_utilizasaun" value="cash" type="radio" @if($data->tipo_utilizasaun = 'cash') selected

                              @endif>
                              <span style="text-transform: uppercase"><i></i>CASH</span>
                          </label>
                          <label class="fancy-radio">
                              <input  value="transfer" type="radio" @if($data->tipo_utilizasaun = 'transfer') selected

                              @endif name="tipo_utilizasaun">
                              <span  style="text-transform: uppercase;"><i></i>Transfer</span>
                          </label>

                          <div class="form-group">
                            <label for="exampleInputPassword1">Data</label>
                            <input type="date" class="form-control" id="exampleInputPassword1" name="data" value="{{ $data->data }}">

                          </div>


                          <div class="form-group">
                            <label for="exampleInputPassword1">Messagen</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="messagen" value="{{ $data->messagen }}">
                            <p> <smal style="color:red;font-style:italic;"> "Ida Nee Laos Obrigatorio"</smal> </p>

                          </div>



                        </div>
                        <div class="modal-footer">
                          <a href="{{ url('/setting/osan') }}" type="button" class="btn btn-danger" data-dismiss="modal"><i class="bi bi-arrow-left-circle-fill"></i> Fila Fali</a>
                          <button type="submit" class="btn btn-warning">Update Saldo <i class="bi bi-coin"></i></button>
                        </div>
                    </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
