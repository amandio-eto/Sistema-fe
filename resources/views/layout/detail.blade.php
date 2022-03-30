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
                            <span>Quantidade Setor</span>
                        </div>
                        <div class="col-md-4 stat-item">
                             <span>Total Setoran</span>
                        </div>
                        <div class="col-md-4 stat-item">
                            -$2174.00 Restu <span>Points</span>
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
                        <li>Durasaun Credito <span>{{ $app->durasaun }}</span></li>
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
                     <h4 style="font-weight: 1000;">Total Credito ${{ $app->total_credito }}</h4>
                 </div>

                 <div class="col-md-2 text-left" >
                     <h4 style="font-weight: 1000;">Total Setoran : </h4>
                 </div>
                 <div class="col-md-2 text-left" style="font-weight: 1000">
                    <h4 style="font-weight: 1000;">Restu : </h4>
                </div>


                </div>

                <div class="row">

                    <table class="table table-bordered">

                        <thead class="bg-primary text-center">

                            <tr>
                                <th>N<span><sup style="text-style:underline">0</sup></span> </th>
                                <th>Naran Cliente </th>
                                <th>Total Setor</th>
                                <th>Data Setor</th>
                                <th>Metode Selu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td>Steve</td>
                                <td>Jobs</td>
                                <td>@steve</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Simon</td>
                                <td>Philips</td>
                                <td>@simon</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Jane</td>
                                <td>Doe</td>
                                <td>@jane</td>
                            </tr>
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
                    <li><a href="#tab-bottom-left2" role="tab" data-toggle="tab">Projects <span class="badge">7</span></a></li>
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
                                    <th>Title</th>
                                    <th>Progress</th>
                                    <th>Leader</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="#">Spot Media</a></td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                                <span>60% Complete</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td><img src="assets/img/user2.png" alt="Avatar" class="avatar img-circle"> <a href="#">Michael</a></td>
                                    <td><span class="label label-success">ACTIVE</span></td>
                                </tr>
                                <tr>
                                    <td><a href="#">E-Commerce Site</a></td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;">
                                                <span>33% Complete</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td><img src="assets/img/user1.png" alt="Avatar" class="avatar img-circle"> <a href="#">Antonius</a></td>
                                    <td><span class="label label-warning">PENDING</span></td>
                                </tr>
                                <tr>
                                    <td><a href="#">Project 123GO</a></td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;">
                                                <span>68% Complete</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td><img src="assets/img/user1.png" alt="Avatar" class="avatar img-circle"> <a href="#">Antonius</a></td>
                                    <td><span class="label label-success">ACTIVE</span></td>
                                </tr>
                                <tr>
                                    <td><a href="#">Wordpress Theme</a></td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                                <span>75%</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td><img src="assets/img/user2.png" alt="Avatar" class="avatar img-circle"> <a href="#">Michael</a></td>
                                    <td><span class="label label-success">ACTIVE</span></td>
                                </tr>
                                <tr>
                                    <td><a href="#">Project 123GO</a></td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                                <span>100%</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td><img src="assets/img/user1.png" alt="Avatar" class="avatar img-circle"> <a href="#">Antonius</a></td>
                                    <td><span class="label label-default">CLOSED</span></td>
                                </tr>
                                <tr>
                                    <td><a href="#">Redesign Landing Page</a></td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                                <span>100%</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td><img src="assets/img/user5.png" alt="Avatar" class="avatar img-circle"> <a href="#">Jason</a></td>
                                    <td><span class="label label-default">CLOSED</span></td>
                                </tr>
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
