@extends('master.master')
@section('title', 'Dados Credito')


@section('content')
    <div class="main-content">
        <div class="container-fluid">



            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title text-center">DADOS CREDITO</h3>
                    <div class="left">

                        <i type="button" class="lnr lnr-plus-circle" data-toggle="modal" data-target="#exampleModal"></i>
                        <a href="" class="btn btn-success"><i class="bi bi-book"></i> Impor Exel</a>



                    </div>


                </div>
                {{-- <div class="pull-right">
                    <form class="navbar-form navbar-center" method="GET" action="/Dadoscredito">
                        <div class="input-group text-center">
                            <input type="text" value="" class="form-control" placeholder="Search dashboard..."
                                name="cari">
                            <span class="input-group-btn"><button type="submit" class="btn btn-success"><i
                                        class="bi bi-search"></i></button></span>
                        </div>
                    </form>
                </div> --}}




                {{-- ida nee Mak Modal --}}

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <form action="/Dadoscredito/create" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-content">
                                <div class="modal-header text-center">
                                    <h5 class="modal-title text-center" id="exampleModalLabel">Registo Cliente Fundu
                                        Esperanca
                                    </h5>
                                    <img src="{{ asset('assets/img/ma.png') }}" alt="" width="100" height="100">
                                    <label class="fancy-checkbox text-left">
                                        @foreach ($id as $data)
                                            <input type="checkbox"
                                                value="  FE998000{{ $data->id + 1 . $loop->iteration . date('y') . $app->count() }}"
                                                name="clientid">

                                            <span>
                                                <p style="border: 1px solid black;">
                                                    FE998000{{ $data->id + 1 . $loop->iteration . date('y') . $app->count() }}
                                                </p>
                                            </span>
                                        @endforeach

                                    </label>

                                </div>



                                <div class="modal-body">

                                    <div class="form-group {{ $errors->has('naran') ? 'has-error' : '' }}">
                                        <label for="exampleFormControlInput1">Naran Completo :</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            name="naran">
                                        @error('naran')
                                            <div id="validationServer03Feedback" class="invalid-feedback">
                                                <small class="text-danger"> {{ $message }}</small>
                                            </div>
                                        @enderror
                                    </div>


                                    <div class="form-group  {{ $errors->has('data_moris') ? 'has-error' : '' }}">
                                        <label for="exampleFormControlInput1">Data Moris :</label>
                                        <input type="date" class="form-control" id="exampleFormControlInput1"
                                            name="data_moris">
                                        @error('data_moris')
                                            <div id="validationServer03Feedback" class="invalid-feedback">
                                                <small class="text-danger"> {{ $message }}</small>
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group  {{ $errors->has('hela_fatin') ? 'has-error' : '' }}>
                                        <label for="
                                        exampleFormControlInput1">Hela Fatin :</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            name="hela_fatin">
                                        @error('hela_fatin')
                                            <div id="validationServer03Feedback" class="invalid-feedback">
                                                <small class="text-danger"> {{ $message }}</small>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group  {{ $errors->has('suco') ? 'has-error' : '' }}">
                                        <label for="exampleFormControlInput1">Suco :</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="suco">
                                        @error('suco')
                                            <div id="validationServer03Feedback" class="invalid-feedback">
                                                <small class="text-danger"> {{ $message }}</small>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group  {{ $errors->has('padministrativo') ? 'has-error' : '' }}">
                                        <label for="exampleFormControlInput1">Posco Administrativo :</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            name="padministrativo">
                                        @error('padministrativo')
                                            <div id="validationServer03Feedback" class="invalid-feedback">
                                                <small class="text-danger"> {{ $message }}</small>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group  {{ $errors->has('municipio') ? 'has-error' : '' }}">
                                        <label for="exampleFormControlInput1">Municipio :</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            name="municipio">
                                        @error('municipio')
                                            <div id="validationServer03Feedback" class="invalid-feedback">
                                                <small class="text-danger"> {{ $message }}</small>
                                            </div>
                                        @enderror

                                    </div>
                                    <div class="form-group  {{ $errors->has('salario') ? 'has-error' : '' }}">
                                        <label for="exampleFormControlInput1">Salario :</label>
                                        <input type="number" class="form-control" id="exampleFormControlInput1"
                                            name="salario">

                                        @error('salario')
                                            <div id="validationServer03Feedback" class="invalid-feedback">
                                                <small class="text-danger"> {{ $message }}</small>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group  {{ $errors->has('total_credito') ? 'has-error' : '' }}">
                                        <label for="exampleFormControlInput1">Total Credito :</label>
                                        <input type="number" class="form-control" id="exampleFormControlInput1"
                                            name="total_credito">
                                        @error('total_credito')
                                            <div id="validationServer03Feedback" class="invalid-feedback">
                                                <small class="text-danger"> {{ $message }}</small>
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-check">


                                        @foreach ($saldo as $osan)
                                            <input class="form-check-input" type="checkbox" value="{{ $osan->saldo }}"
                                                id="defaultCheck1" name="source">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Osan Inan ${{ $osan->saldo }}
                                            </label>
                                            @error('source')
                                                <div id="validationServer03Feedback" class="invalid-feedback">
                                                    <small class="text-danger"> {{ $message }}</small>
                                                </div>
                                            @enderror



                                            <input class="form-check-input" type="checkbox"
                                                value="{{ $osan->osan_funa }}" id="defaultCheck1" name="osan_funan">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Custu Osan Funan {{ $osan->osan_funa }}
                                            </label>
                                            @error('osan_funan')
                                                <div id="validationServer03Feedback" class="invalid-feedback">
                                                    <small class="text-danger"> {{ $message }}</small>
                                                </div>
                                            @enderror
                                        @endforeach


                                    </div>


                                    <div class="form-group {{ $errors->has('durasaun') ? 'has-error' : '' }}">

                                        <select class="form-control input-lg" name="durasaun">
                                            @foreach ($durasaun as $data)
                                                <option value="">-- Hili --</option>

                                                <option value="{{ $data->fulan_6 }}">Fulan {{ $data->fulan_6 }}
                                                </option>
                                                <option value="{{ $data->tinan_1 }}">Tinan 1 ({{ $data->tinan_1 }})
                                                </option>
                                                <option value="{{ $data->tinan_2 }}">Tinan 2 ({{ $data->tinan_2 }})
                                                </option>
                                                /option>
                                            @endforeach

                                        </select>
                                    </div>
                                    @error('durasaun')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            <small class="text-danger"> {{ $message }}</small>
                                        </div>
                                    @enderror
                                    <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                                        <label for="exampleFormControlInput1">Numero Telemovel :</label>
                                        <input type="number" class="form-control" id="exampleFormControlInput1"
                                            name="phone">

                                        @error('phone')
                                            <div id="validationServer03Feedback" class="invalid-feedback">
                                                <small class="text-danger"> {{ $message }}</small>
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group  {{ $errors->has('foto') ? 'has-error' : '' }}">
                                        <label for="exampleFormControlInput1">Upload Foto :</label>
                                        <input type="file" class="form-control" name="foto">
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
        {{-- ida nee Mak Rohan Husi Modal --}}

        <div class="panel-body">
            <table class="table table-condensed">
                <thead>
                    <tr style="font-size: 14px;">
                        <th>N <span><sup><u>0</u></sup></span></th>
                        <th>FOTO</th>
                        <th>ID CREDITO</th>
                        <th>NARAN</th>
                        <th>HELA FATIN</th>
                        <th>SUCO</th>
                        <th>P.ADIM</th>
                        <th>SALARIO</th>
                        <th>TOTAL-CREDITO</th>
                        <th>SOURCE</th>
                        <th>CU.FUNAN</th>
                        <th>TELEMOVEL</th>
                        <th>POSISAUN</th>
                        <th>CATEGORIA</th>
                        <th>ACSAUN</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($app as $data)
                        <tr style="font-size: 14px;">
                            <td></td>
                            <td><img src="{{ $data->getfoto() }}" alt=""
                                    style="width:40px;height:40px;boder:black 1px solid;"></td>
                            <td>{{ $data->clientid }}</td>
                            <td>{{ $data->naran }}</td>
                            <td>{{ $data->hela_fatin }}</td>
                            <td>{{ $data->suco }}</td>
                            <td>{{ $data->padministrativo }}</td>
                            <td>${{ $data->salario }}</td>
                            <td>${{ $data->total_credito }}</td>
                            <td>${{ $data->source }}</td>
                            <td>{{ $data->osan_funan }}</td>
                            <td>{{ $data->phone }}</td>
                            <td></td>
                            <td>{{ $data->category }}</td>
                            <td>
                                <a href=""> <i class="bi bi-pen text-warning"></i></a></a>
                                <a href="/Dadoscredito/delete/{{ $data->id }}" class="delete">
                                    <i class="bi bi-trash text-danger " siswa-id="{{ $data->id }}" name="{{ $data->naran }}"></i></a>
                                <a href="/Detail/{{ $data->id  }}"><i class="bi bi-eye"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    {{-- /Dadoscredito/delete/{{ $data->id }} --}}



                </tbody>
            </table>
            <div class="pull-left">
                Dados
                {{ $app->firstItem() }}
                iha {{ $app->lastItem() }}
                Total {{ $app->total() }}
            </div>
            <div class="pull-right">
                {{ $app->links() }}
            </div>

        </div>
    </div>

    </div>
    </div>


@endsection

@section('footer')







@endsection
