@extends('master.master')
@section('header')
<link rel="stylesheet" href="{{ asset('card/css/style.css') }}">
@stop
@section('title','Detail')
@section( 'content')
<div class="panel panel-profile">
    <div class="clearfix">
        <!-- LEFT COLUMN -->
        <div class="profile-left">
            <!-- PROFILE HEADER -->
            <div class="profile-header">
                <div class="overlay"></div>
                <div class="profile-main">
                    <img src="{{ asset('/images/'.$app->foto) }}" class="img-circle" alt="Avatar" style="height:120px;width:120px;border:1px solid black;">
                    <h3 class="name text-center">{{ $app->naran }}</h3>
                    <span class="online-status status-available">Available</span>
                </div>
                <div class="profile-stat">
                    <div class="row">
                        <div class="col-md-4 stat-item">
                            <span>Quantidade Setor : {{ $app->setoran->count() }}</span>
                        </div>
                        <div class="col-md-4 stat-item">
                             <span>Total Setoran : ${{ $app->setoran->sum('update_selu') }}.00</span>
                        </div>
                        <div class="col-md-4 stat-item " style="color:red;">
                             Restu<span>${{ $app->setoran->sum('update_selu') - $app->total_credito }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PROFILE HEADER -->
            <!-- PROFILE DETAIL -->
            <div class="profile-detail">
                <div class="profile-info">
                    <h4 class="heading text-center">Detalho</h4>
                    <ul class="list-unstyled list-justify">
                        <li>Naran Completo : <span>{{ $app->naran }}</span></li>
                        <li>Data Moris : <span> {{ $app->data_moris }}</span></li>
                        <li>Hela Fatin :<span>{{ $app->hela_fatin }}</span></li>
                          <li>suco <span>{{ $app->suco }}</span></li>
                        <li>Posto administrativo<span>{{ $app->padministrativo }}</span></li>
                        <li>Municipio <span>{{ $app->municipio }}</span></li>
                        <li>Salario <span>${{ $app->salario }}</span></li>
                        <li>Telemovel <span>{{ $app->phone }}</span></li>
                        <li>Durasaun Credito <span>{{ $app->durasaun->tempo }}</span></li>
                        <li>Categoria <span>{{ $app->category }}</span></li>
                        <hr>
                        <li style="border: 1px solid black;">Total Credito <span>${{ $app->total_credito }}</span></li>

                    </ul>
                </div>
                <div class="profile-info">
                    {{--  <h4 class="heading">Social</h4>  --}}
                    <div class="text-center"><a href="#" class="btn btn-primary">Edit Profile</a></div>

                </div>

            </div>
            <!-- END PROFILE DETAIL -->
        </div>
        <!-- END LEFT COLUMN -->
        <!-- RIGHT COLUMN -->
        <div class="profile-right">
            <h4 class="heading text-center" style="font-weight:1000">Update Setoran {{ $app->naran }}</h4>
            <!-- AWARDS -->
            <div class="awards">
                <div class="row">
                 <div class="col-md-2 text-left">
                     <h4 style="font-weight: 1000;">Total Credito :${{ $app->total_credito }}</h4>
                 </div>

                 <div class="col-md-2 text-left" >
                     <h4 style="font-weight: 1000;">Total Setoran :${{ $app->setoran->sum('update_selu') }}.00 </h4>
                 </div>

                 <div class="col-md-2 text-left" >
                    <h4 style="font-weight: 1000;">Durasaun : {{ $app->durasaun->tempo }} </h4>
                </div>
                <div class="col-md-2 text-left" >
                    <h4 style="font-weight: 1000;">Total Dividas : ${{$fulan*$app->durasaun->tempo }} </h4>
                </div>


                 <div class="col-md-2 text-left" style="font-weight: 1000">
                    <h4> Restu:<span style="font-weight: 1000; color: red;">${{$app->setoran->sum('update_selu')-$fulan*$app->durasaun->tempo }} </span> </h4>
                </div>


                </div>
                <div class="row">
                    <table class="table" border="1">
                        <thead>
                          <tr style="background: yellow;">
                            <th scope="col">Nu</th>
                            <th scope="col">Total Credito</th>
                            <th scope="col">Osan Inan </th>
                            <th scope="col">Jurus Mensal</th>
                            <th scope="col">Total Deposito Mensal </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>${{ $app->total_credito }}</td>
                            <td>{{( $test = $app->total_credito)/($app->durasaun->tempo)}}</td>
                            <td>${{ $osan = $app->total_credito * $app->osanfunan->osanfunan }}</td>
                            <td>${{  ($app->total_credito)/($app->durasaun->tempo)+$osan}}</td>
                          </tr>

                        </tbody>
                      </table>
                </div>

                <div class="row">

                    <table class="table table-bordered">

                        <thead class="bg-primary text-center">

                            <tr>
                                <th>N<span><sup style="text-style:underline">0</sup></span> </th>
                                <th>Naran Cliente</th>
                                <th>Code Setoran </th>
                                <th>Update Setor </th>
                                <th>Montante </th>
                                <th>Status</th>

                                <th>Metode Selu</th>
                                <th>Data Setor</th>
                                <th>Aksaun </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($app->setoran as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>FE-00{{ $loop->iteration}}</td>
                                <td> {{ $data->credito->naran }} {{ $loop->iteration }}</td>
                                <td>${{ $data->update_selu }}</td>
                                <td> <span style="background: yellow; border-radius:20px;color:black; padding:6px;font-size:12px;">{{ $data->status }}</span> </td>
                                <td>{{ $data->pending }}</td>
                                <td>{{ $data->selu }}</td>

                                <td>{{ date('D, M Y', strtotime($data->data))}}</td>
                                <td>

                                    @if(auth()->user()->role == 'admin')
                                    <a href="{{ url('/setoran/edit/'.$data->id) }}"><i class="bi-pen text-warning "></i></a>
                                    <a href="{{ url('/setoran/delete/'.$data->id) }}"><i class="bi-trash3-fill text-danger"></i></a>
                                    @endif
                                    <a href="{{ url('/sistema/print/'.$data->id) }}"><i class="bi bi-printer-fill"></i></a>

                                </td>


                            </tr>
                            @endforeach

                        </tbody>
                    </table>




                </div>
                <div class="text-center">
                    <a href="#" class="btn btn-success"> <i class="fa fa-download"></i>Downlaod</a>
                    <a href="#" class="btn btn-primary"> <span class="lnr lnr-printer"></span>Print</a>
                </div>

            </div>
            <!-- END AWARDS -->
            <!-- TABBED CONTENT -->
            <div class="custom-tabs-line tabs-line-bottom left-aligned">
                <ul class="nav" role="tablist">
                    <li class="active"><a href="#tab-bottom-left1" role="tab" data-toggle="tab">Cartaun</a></li>
                    <li><a href="#tab-bottom-left2" role="tab" data-toggle="tab">Arquivo <span class="badge">{{ $app->arcivo->count() }}</span></a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade in active" id="tab-bottom-left1">
                    {{--  ida nee mak Cartaun  --}}
                    <div class="card">
                        <div class="card-inner">
                            <div class="front">
                                <img src="{{ asset('card/img/map.png') }}" alt="" class="map-img">

                                <div class="row">

                                    <img src="/img/chip.png" alt="" width="60px">
                                </div>
                                <div class="eto">
                                    <div class="col">
                                        <h3 style="text-align: right; font-weight: 1000;">Cartão de Fundo Esperança</h3>
                                        <hr>
                                    </div>
                                    <div class="menu">
                                        <div class="testing">
                                            <img src="{{ asset('/images/'.$app->foto) }}" class="img">
                                            <div class="center">
                                                <ul>
                                                    <li class="card-no">
                                                        <p>{{ $app->clientid }}</p>

                                                    </li>
                                                    <li><span>Naran Completo : </span> {{ $app->naran }}</li>
                                                    <li><span>Data Moris : </span>{{ $app->data_moris }}</li>
                                                    <li><span>Hela Fatin : </span> {{ $app->hela_fatin }}</li>
                                                    <li><span>Suco : </span> {{ $app->suco }}</li>
                                                    <li><span>Categoria  :</span> S{{ $app->category }}</li>
                                                    <li><span>Municipio : </span> Dili</li>




                                                </ul>
                                                <p style="float: right; font-weight: 1000;">Validate : 02-10-2023</p>
                                            </div>
                                        </div>



                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>

                    {{--  ida nee Mak Ending Husi Cartaun  --}}

                    <div class="margin-top-30 text-center"><a href="#" class="btn btn-success"> <i class="fa fa-download"></i>Download </a></div>
                </div>
                <div class="tab-pane fade" id="tab-bottom-left2">
                    <div class="table-responsive">
                        <table class="table project-table">
                            <thead>
                                <tr>
                                    <th>Nu</th>
                                    <th>Images</th>
                                    <th>Naran</th>
                                    <th>Code</th>
                                    <th>Montante Transfer</th>
                                    <th>Progress</th>
                                    <th>Data Upload File</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>



                                @foreach ($app->arcivo as $data)

                                <tr>
                                    <td><a href="#">{{ $loop->iteration }}</a></td>
                                    <td><img src="{{ asset('images/'.$data->arcivo) }}" width="50;" alt=""></td>
                                    <td>{{ $data->credito->naran }}</td>
                                    <td>FE-00{{ $loop->iteration }}</td>
                                    <td>${{ $data->montante_transfer }}</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                                <span>100%</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $data->created_at->format('D,F Y') }}</td>


                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END TABBED CONTENT -->
        </div>
        <!-- END RIGHT COLUMN -->
    </div>
</div>

@stop
