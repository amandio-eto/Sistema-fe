@extends('master.master')
@section('title', 'Dasboard')


@section('content')
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title " style="text-transform:upercase">Dasboard </h3>
                    <p class="panel-subtitle"><small><i>Sistema Fundu Esperanca</i></small></p>

                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3">
                         <div class="metric">

                                <span class="icon"><i class="bi bi-cash-coin"></i></span>
                                <p>

                                        <span class="number" style="font-weight:1000;">{{osan( $saldo->sum('saldo')) }}</span>


                                    <span class="title text-center" style="text-transform:upercase">Osan Capital</span>
                                </p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="metric">

                                   <span class="icon"><i class="bi bi-coin"></i></span>
                                   <p>

                                           <span class="number" style="font-weight:1000;">{{ osan($osan=$saldo->sum('saldo') +$update_selu->sum('update_selu'))  }}</span>


                                       <span class="title text-center" style="text-transform:upercase">------</span>
                                   </p>
                               </div>
                           </div>


                        <div class="col-md-3">
                            <div class="metric">
                                <span class="icon"><i class="fa fa-shopping-bag"></i></span>
                                <p>
                                    <span class="number text-success">{{ osan($credito->sum('total_credito')) }}</span>
                                    <span class="title">Total Osan Credito</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="metric">
                                <span class="icon"><i class="bi bi-people-fill"></i></span>
                                <p>
                                    <span class="number">{{ $credito->count()}}</span>
                                    <span class="title">TOTAL CLIENTES</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="metric">
                                <span class="icon"><i class="fa fa-money"></i></span>
                                <p>
                                    <span class="number">{{ osan($update_selu->sum('update_selu')) }}</span>
                                    <span class="title">Total Setoran</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="metric">
                                <span class="icon"><i class="fa fa-bank"></i></span>
                                <p>
                                    <span
                                        class="number text-danger">{{ osan($osan-$credito->sum('total_credito')) }}</span>
                                    <span class="title">SALDO ACTUAL</span>
                                </p>
                            </div>
                        </div>




                    </div>
                    <div class="left">
                        <button class="btn btn-primary" id="button"><i class="bi bi-graph-up"></i> Grafico</button>
                    </div>







                </div>
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md >
                                <div class="" id="chartOsan">

                                </div>

                            </div>
                        </div>

                    </div>


                </div>





            </div>



        </div>
    </div>
    <!-- END MAIN CONTENT -->
@endsection

{{--  ida nee Mak Footer  --}}
@section('footer')
<script>
    window.onload = function() {

    var chart = new CanvasJS.Chart("chartOsan", {
        theme: "light2", // "light1", "light2", "dark1", "dark2"
        exportEnabled: true,
        animationEnabled: true,
        title: {
            text: "Grafico Dados Credito"
        },
        data: [{
            type: "pie",
            startAngle: 25,
            toolTipContent: "<b>{label}</b>: ${y}",
            showInLegend: "true",
            legendText: "{label}",
            indexLabelFontSize: 16,
            indexLabel: "{label} - ${y}",
            dataPoints: [
                { y: {{ $saldototal }}, label: "Capital" },
                { y: {{ $saldo_actual }}, label: "Osan Capital + Osan Credito" },
                { y: {{ $cash }}, label: "Total Setoran" },
                { y: {{ $osanactual }}, label: "Saldo Actual" },
                { y: {{ $creditoosan }}, label: "Total Osan Credito" },
                {{--  { y: 1.22, label: "Opera" },
                { y: 0.44, label: "Others" }  --}}
            ]
        }]
    });
    chart.render();

    }
    </script>
    </head>
    <body>
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    </head>
    <body>
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>


    <script src="{{ asset('jquery/jquery.js') }}"></script>
    <script>

        $(document).ready(function(){
            $('#button').click(function(){

                $('#chartOsan').slideToggle(200);
            })



        });

    </script>

@endsection









