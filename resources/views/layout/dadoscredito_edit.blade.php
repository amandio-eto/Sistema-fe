


@extends('master.master')

@section('title','Edit Dados')

@section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="heading text-center">
                            <h3>Update Dados Credito</h3>
                            <div class="img">
                                <img src="{{ asset('images/'.$data->foto) }}" width="200" alt="">
                            </div>
                        </div>
                        <hr>
                        <form action="{{ url('/Dadoscredito/update/'.$data->id) }}" method="POST">
                        @csrf
                        <div class="form-group {{ $errors->has('clientid') ? 'has-error' : '' }}">
                            <label for="exampleFormControlInput1"> Id Cliente:</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                name="clientid"  value="{{ $data->clientid }}">
                            @error('clientid')
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    <small class="text-danger"> {{ $message }}</small>
                                </div>
                            @enderror
                        </div>

                        <div class="form-group {{ $errors->has('naran') ? 'has-error' : '' }}">
                            <label for="exampleFormControlInput1">Naran Completo :</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                name="naran" value="{{ $data->naran }}">
                            @error('naran')
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    <small class="text-danger"> {{ $message }}</small>
                                </div>
                            @enderror
                        </div>




                         <div class="form-group  {{ $errors->has('data_moris') ? 'has-error' : '' }}">
                            <label for="exampleFormControlInput1">Data Moris :</label>
                            <input type="date" class="form-control" id="exampleFormControlInput1"
                                name="data_moris" value="{{ $data->data_moris }}">
                            @error('data_moris')
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    <small class="text-danger"> {{ $message }}</small>
                                </div>
                            @enderror
                        </div>
                        <div class="form-group  {{ $errors->has('suco') ? 'has-error' : '' }}">
                            <label for="exampleFormControlInput1">Suco :</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="suco" value="{{ $data->suco }}">
                            @error('suco')
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    <small class="text-danger"> {{ $message }}</small>
                                </div>
                            @enderror


                        </div>

                        <div class="form-group  {{ $errors->has('hela_fatin') ? 'has-error' : '' }}>
                            <label for="
                            exampleFormControlInput1">Hela Fatin :</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                name="hela_fatin" value="{{ $data->hela_fatin }}" >
                            @error('hela_fatin')
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    <small class="text-danger"> {{ $message }}</small>
                                </div>
                            @enderror
                        </div>
                        <div class="form-group  {{ $errors->has('padministrativo') ? 'has-error' : '' }}">
                            <label for="exampleFormControlInput1">Posco Administrativo :</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                name="padministrativo" value="{{ $data->padministrativo }}">
                            @error('padministrativo')
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    <small class="text-danger"> {{ $message }}</small>
                                </div>
                            @enderror
                        </div>
                        <div class="form-group  {{ $errors->has('municipio') ? 'has-error' : '' }}">
                            <label for="exampleFormControlInput1">Municipio :</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                name="municipio" value="{{ $data->municipio }}">
                            @error('municipio')
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    <small class="text-danger"> {{ $message }}</small>
                                </div>
                            @enderror

                        </div>
                        <div class="form-group  {{ $errors->has('salario') ? 'has-error' : '' }}">
                            <label for="exampleFormControlInput1">Salario :</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1"
                                name="salario" value="{{ $data->salario }}">

                            @error('salario')
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    <small class="text-danger"> {{ $message }}</small>
                                </div>
                            @enderror
                        </div>
                        <div class="form-group  {{ $errors->has('total_credito') ? 'has-error' : '' }}">
                            <label for="exampleFormControlInput1">Total Credito :</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1"
                                name="total_credito" value="{{ $data->total_credito }}">
                            @error('total_credito')
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    <small class="text-danger"> {{ $message }}</small>
                                </div>
                            @enderror
                        </div>


                        <div class="form-group  {{ $errors->has('phone') ? 'has-error' : '' }}">
                            <label for="exampleFormControlInput1">Numero Telemovel</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1"
                                name="phone" value="{{ $data->phone }}">
                            @error('phone')
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    <small class="text-danger"> {{ $message }}</small>
                                </div>
                            @enderror
                        </div>


                        <div class="form-group {{ $errors->has('durasaun') ? 'has-error' : '' }}">

                            <select class="form-control input-lg" name="durasaun_id">
                                <option value="">-- Hili --</option>

                                @foreach ($durasaun as $data)
                                    <option value="{{ $data->id }}" @if($data->id == $data->naran) selected

                                    @endif>Duarsaun {{ $data->tempo }}

                                    </option>
                                @endforeach

                            </select>
                        </div>
                        @error('durasaun')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <small class="text-danger"> {{ $message }}</small>
                            </div>
                        @enderror




                        <label class="fancy-checkbox">
                            @foreach ($osan as $money )

                            <input type="checkbox" value="{{ $money->id }}" name="osanfunan_id" >
                            <span> Osan Funan {{ $money->osanfunan }}</span>
                            @endforeach
                        </label>





                        <div class="form-group  {{ $errors->has('foto') ? 'has-error' : '' }}">
                            <label for="exampleFormControlInput1">Upload Foto :</label>
                            <input type="file" class="form-control" name="foto" value="{{ $data->foto }}" >
                            @error('foto')
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    <small class="text-danger"> {{ $message }}</small>
                                </div>
                            @enderror
                        </div>







                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"
                            style="border-radius: 40px;">Taka</button>
                        <button type="submit" class="btn btn-success" style="border-radius: 40px;">Guarda
                            Dados</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@stop
