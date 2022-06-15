


@extends('master.master')
@section('header')

<style>
    .i{
        height: 200px;
        padding: 20px;

        border: 1px solid black;

        margin: 40,  40px;
        border-left: 2px solid black;
    }
    .icon ul {

        position: relative;
        display: flex;
        justify-content: center;
        list-style: none;
        flex-wrap: wrap;
        margin: 10px 0;

    }
    .icon ul li a{

        font-size: 4em;
        height: 100px;
        width: 100px;
        display: inline-block;
        transition: 0.5px;
    }


.border a{

    margin-bottom: 20px;
    box-shadow: 0 3px 20px rgba(0, 0, 0, 0.5);
    border-radius: 20px;




}

#span i{

    color: red;
    font-weight: 500px;
    font-size: 3em;
    justify-content: center;
    padding:0 15px;
}










</style>

@endsection

@section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="row">

        </div>
        <div class="container text-center text-white" >
            <div class="col-md text-white icon" >
               <ul style="border-bottom: 1px dashed  black;">
                   <li class="border"><a href="{{ url('/Dasboard')}}"><i class=" text-white bi bi-bank2"></i></a><span id="span"><i class="bi bi-arrow-right"></i></span></li>
                    <li class="border"><a href="{{ url('/chatify') }}"><i class="bi bi-chat-dots"></i></a> <span id="span"><i class="bi bi-arrow-right"></i></span></li>
                    <li class="border"><a href="{{ url('/Dadoscredito') }}"><i class="fa fa-database"></i></a> <span id="span"><i class="bi bi-arrow-right"></i></span></li>
                   <li class="border"> <a target="_blank" href="{{ url('/setoran/show') }}"><i class="bi bi-bank"></i></a> <span id="span"><i class="bi bi-arrow-right"></i></span></li>
                   <li class="border"> <a href="{{ url('/setting/osan') }}"><i class="bi bi-coin"></i></a> <span id="span"><i class="bi bi-arrow-right"></i></span></li>
                   <li  class="border"> <a href="{{ url('/auth/create/user') }}"><i class="bi bi-people"></i></a> <span id="span"></li>




              </ul >

              <ul>
                <li class="border"><a href="{{ url('/Report')}}"><i class="lnr lnr-chart-bars"></i></a> <span id="span"><i class="bi bi-arrow-right"></i></span> </li>
                <li class="border"><a href="{{ url('/arquivo/file') }}"><i class="bi bi-images"></i></a> <span id="span"><i class="bi bi-arrow-right"></i></span></li>
                 <li class="border"><a href="{{ url('/Transaction') }}"><i class="bi bi-wallet2"></i></a> <span id="span"><i class="bi bi-arrow-right"></i></span></li>
                 <li class="border"><a href="{{ url('/recredito') }}"><i class="bi bi-plus-circle"></i></a> <span id="span"><i class="bi bi-arrow-right"></i></span></li>
                 <li class="border"><a href="{{ url('/contaosan') }}"><i class="bi bi-calculator"></i></a> <span id="span"><i class="bi bi-arrow-right"></i></span></li>
                 <li class="border"><a href="{{ url('/logs') }}"><i class="bi bi-file-text"></i></a> </li>

              </ul>
            </div>
            <hr>

            <div class="panel">
                <div class="row">
                    <div class="col" id="chartContainer">

                    </div>
                </div>
            </div>







        </div>
    </div>
</div>

@stop
@section('footer')
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script>
    window.onload = function () {

    var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        title: {
            text: "Classificação Credito"
        },
        axisX: {
            interval: 1
        },
        axisY: {
            {{--  title: "Expenses in Billion Dollars",  --}}
            includeZero: true,
            scaleBreaks: {
                type: "wavy",
                customBreaks: [{
                    startValue: 80,
                    endValue: 210
                    },
                    {
                        startValue: 230,
                        endValue: 600
                    }
            ]}
        },
        data: [{
            type: "bar",
            toolTipContent: "<img src=\"https://canvasjs.com/wp-content/uploads/images/gallery/javascript-column-bar-charts/\"{url}\"\" style=\"width:40px; height:20px;\"> <b>{label}</b><br>Budget: ${y}bn<br>{gdp}% of GDP",
            dataPoints: [
                { label: "Israel", y: 17.8, gdp: 5.8, url: "israel.png" },
                { label: "United Arab Emirates", y: 22.8, gdp: 5.7, url: "uae.png" },
                { label: "Brazil", y: 22.8, gdp: 1.3, url: "brazil.png"},
                { label: "Australia", y: 24.3, gdp: 2.0, url: "australia.png" },
                { label: "South Korea", y: 36.8, gdp: 2.7, url: "skorea.png" },
                { label: "Germany", y: 41.1, gdp: 1.2, url: "germany.png" },
                { label: "Japan", y: 46.1, gdp: 1.0, url: "japan.png" },
                { label: "United Kingdom", y: 48.3, gdp: 1.9, url: "uk.png" },
                { label: "India", y: 55.9, gdp: 2.5, url: "india.png" },
                { label: "Russia", y: 69.2, gdp: 5.3, url: "russia.png" },
                { label: "China", y: 215.7, gdp: 1.9, url: "china.png" },
                { label: "United States", y: 611.2, gdp: 3.3, url: "us.png" }
            ]
        }]
    });
    chart.render();

    }
    </script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
@stop
