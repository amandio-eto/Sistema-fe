@extends('master.master')
@section('header')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

@stop



@section('content')

<div class="main-content">
    <div class="container-fluid">
        <!-- OVERVIEW -->
        <div class="panel panel-headline">
            <div class="left">
                <a type="button" href="{{ url('/request/create') }}" class="btn btn-primary">Cria Request</a>
                <a type="button" class="btn btn-danger">Delete</a>

            </div>

            <div class="panel-heading">
                <h3 class="panel-title">Total Pedido </h3>
                <p class="panel-subtitle">Period: Oct 14, 2016 - Oct 21, 2016</p>
            </div>

            <div class="panel-body">
                <div class="row justify-content-center">
                    <div class="col-md">
                        <!-- PANEL HEADLINE -->
                        <div class="panel panel-headline">
                            <div class="panel-heading">
                                <h3 class="panel-title">Panel Headline</h3>
                                <p class="panel-subtitle">Panel to display most important information</p>
                            </div>
                            <div class="panel-body">
                                <h4>Panel Content</h4>
                                <p>Objectively network visionary methodologies via best-of-breed users. Phosfluorescently initiate go forward leadership skills before an expanded array of infomediaries. Monotonectally incubate web-enabled communities rather than process-centric.</p>
                            </div>
                        </div>
                        <!-- END PANEL HEADLINE -->
                    </div>




                </div>

            </div>
        </div>




    </div>
</div>






@endsection
