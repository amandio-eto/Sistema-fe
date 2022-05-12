@extends('master.master')
@section('title', 'Dados Credito')


@section('content')
    <div class="main-content">
        <div class="container-fluid">
            @if(session('success'))



                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <i class="fa fa-check-circle"></i>{{ session('success') }}
                </div>




            @endif




            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title text-center">DADOS CREDITO</h3>
                    <div class="left">
                        <i type="button" class="lnr lnr-plus-circle" data-toggle="modal" data-target="#exampleModal"></i>
                        <a href="" class="btn btn-success"><i class="bi bi-book"></i> Impor Exel</a>



                    </div>



                </div>
                <div class="pull-right">
                    <form class="navbar-form navbar-center" method="GET" action="/Dadoscredito">
                        <div class="input-group text-center">
                            <input type="text" value="" class="form-control" placeholder="Search dashboard..."
                                name="cari">
                            <span class="input-group-btn"><button type="submit" class="btn btn-success"><i
                                        class="bi bi-search"></i></button></span>
                        </div>
                    </form>
                </div>




                {{-- ida nee Mak Modal --}}

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <form action="{{ url('/Dadoscredito/create') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-content">
                                <div class="modal-header text-center">
                                    <h5 class="modal-title text-center" id="exampleModalLabel">Registo Cliente Fundu
                                        Esperanca
                                    </h5>
                                    <img src="{{ asset('assets/img/ma.png') }}" alt="" width="100" height="100">








                                </div>



                                <div class="modal-body">
                                    <div class="form-group {{ $errors->has('clientid') ? 'has-error' : '' }}">
                                        <label for="exampleFormControlInput1">Client Id :</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            name="clientid">
                                        @error('clientid')
                                            <div id="validationServer03Feedback" class="invalid-feedback">
                                                <small class="text-danger"> {{ $message }}</small>
                                            </div>
                                        @enderror
                                    </div>

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



                                    <div class="form-group  {{ $errors->has('suco') ? 'has-error' : '' }}">
                                        <label for="exampleFormControlInput1">Suco :</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="suco">
                                        @error('suco')
                                            <div id="validationServer03Feedback" class="invalid-feedback">
                                                <small class="text-danger"> {{ $message }}</small>
                                            </div>
                                        @enderror
                                    </div>  <div class="form-group  {{ $errors->has('data_moris') ? 'has-error' : '' }}">
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




                                    </div>


                                    <div class="form-group {{ $errors->has('durasaun') ? 'has-error' : '' }}">

                                        <select class="form-control input-lg" name="durasaun_id">
                                            <option value="">-- Hili --</option>

                                            @foreach ($durasaun as $data)
                                                <option value="{{ $data->id }}">Duarsaun {{ $data->tempo }}

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

										<input type="checkbox" value="{{ $money->id }}" name="osanfunan_id">
										<span> Osan Funan {{ $money->osanfunan }}</span>
                                        @endforeach
									</label>
                                    <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                                        <label for="exampleFormControlInput1">Numero Telemovel :</label>
                                        <input type="number" class="form-control" id="exampleFormControlInput1"
                                            name="phone" >

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

        <div class="row">
           
            <div class="col-md-12">
                <div class="row">
                    <div class="col-8" style="margin-left: 40px;">
                        <div class="dataTables_length" id="sampleTable_length">
                            <label>Haree 
                                <select name="sampleTable_length" aria-controls="sampleTable" class="form-control form-control-sm" name="show">
                                    <option value="10">10</option>
                                        <option value="20">20</option> 
                                        <option value="50">50 </option>
                                     <option value="100">100</option>
                                </select>
                            </label>
                        </div>
                    </div>
                </div>
                
              <div class="card">
                <div class="table-responsive pt-3">
                  <table class="table table-striped project-orders-table">
                    <thead style="text-transform: uppercase;weight:1000;background:#844fc1;color:white;">
                      <tr>
                        <th class="ml-5">Nu</th>
                        <th>Foto</th>
                        <th>Id Cliente</th>
                        <th>Naran</th>
                        <th>Total Credito</th>
                        <th>Total Setoran</th>
                        <th>Durasaun</th>
                        <th>Juru Mensal</th>
                        <th>Setoran Mensal</th>
                        <th>Total Dividas</th>
                        <th>Progresso</th>
                        <th style="padding-left: 100px;">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($app as $data)

                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td> <img src="{{ asset ('images/'.$data->foto) }}" width="40" height="40" > </td>
                            <td>{{ $data->clientid }}</td>
                        <td>{{ $data->naran }}</td>
                        <td>{{ osan($total_credito=$data->total_credito) }}</td>
                        <td>{{ osan(($progress=$data->osancredito())) }}</td>
                        <td>{{ $tempo=$data->durasaun->tempo }}</td>
                        <td>{{osan(($osan = $data->total_credito * $data->osanfunan->osanfunan)) }}</td>
                        <td>{{ osan(($total_credito/$tempo)+$osan)  }}</td>
                        <td>{{ osan($dividas=($total_credito)+($osan*$tempo))  }}</td>
                        <td>


                             <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:{{numero(($progress/$dividas)*100)  }}">
                                <p>{{ numero(($progress/$dividas)*100) }}</p>
                            </div>
                            </div>

                         </td>

                        <td>
                          <div class="d-flex align-items-center">
                            <a type="button" href="{{ url('/Dadoscredito/edit/'.$data->id) }}" class="btn-sm btn-warning btn-sm btn-icon-text mr-3">
                                <i class="bi bi-pen"></i>
                              Edit
                            </a>
                            <a type="button" href="{{ url('/Dadoscredito/delete/'.$data->id) }}"  class="btn-sm  btn-danger btn-sm btn-icon-text" style="margin:0 3px;">
                                <i class="bi bi-trash3"></i>
                              Delete

                            </a>
                            <a type="button" href="{{ url('Detail/'.$data->id) }}" class="btn-sm btn-primary btn-sm btn-icon-text">
                                <i class="bi bi-eye"></i>
                                Detail
                                <i class="typcn typcn-delete-outline btn-icon-append"></i>
                            </a>
                        </div>
                    </td>
                    @endforeach
                </tr>
                    </tbody>
                  </table>
                  <div class="row">
                      <div class="col text-center">
                          {{ $app->links() }}
                  
                      </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
    </div>

    </div>
    </div>


@endsection

@section('footer')

<script src="{{ asset('sata/assets/vendors/jquery/dist/jquery.min.js') }}" type="text/javascript"></script>







@endsection
