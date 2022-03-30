@extends('master.master')
@section('title', 'Dasboard')
@section('content')
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Dasboard </h3>
                    <p class="panel-subtitle"><small><i>Sistema Fundu Esperanca</i></small></p>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="metric">
                                <span class="icon"><i class="fa fa-money"></i></span>
                                <p>
                                    @foreach ($saldo as $osan)
                                        <span class="number" style="font-weight:1000;">${{ $osan->saldo }}</span>
                                    @endforeach

                                    <span class="title text-center">Saldo TOTAL</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="metric">
                                <span class="icon"><i class="fa fa-shopping-bag"></i></span>
                                <p>
                                    <span class="number text-success">${{ $credito->sum('total_credito') }}</span>
                                    <span class="title">Total Osan Credito</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="metric">
                                <span class="icon"><i class="fa fa-eye"></i></span>
                                <p>
                                    <span class="number">{{ $credito->count() }}</span>
                                    <span class="title">TOTAL CLIENTES</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="metric">
                                <span class="icon"><i class="fa fa-bank"></i></span>
                                <p>
                                    <span
                                        class="number text-danger">${{ $osan->saldo - $credito->sum('total_credito') }}.00</span>
                                    <span class="title">SALDO ACTUAL</span>
                                </p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <!-- END OVERVIEW -->



        </div>
    </div>
    <!-- END MAIN CONTENT -->
@endsection
