
@extends('master.master')

@section('header')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Roboto+Mono:wght@100&display=swap" rel="stylesheet">
<style>
    .table{
        font-family: 'Montserrat', sans-serif;
    }
</style>

@endsection

@section('content')
<div class="main-content">
    <container-fluid>
        <div class="row">
            <div class="col-md">

                <div class="panel">
                    <div class="panel-heading">


                        <h2 class="panel-title text-center">Log File</h2>

                        <div class="right">
                            <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                            <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                        </div>
                    </div>
                    <div class="row" style="margin-left: 10px;">
                        <div class="col">
                            <form class="navbar-form navbar-center" method="GET" action="{{ url('/logs') }}">
                                <div class="input-group text-center">
                                    <input type="text" name="buka" value="" class="form-control" placeholder="Buka "
                                        name="cari">
                                    <span class="input-group-btn"><button type="submit" class="btn btn-success"><i
                                                class="bi bi-search"></i></button></span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="panel-body no-padding">
                        <table class="table table-striped" >
                            <thead >
                                <tr>
                                    <th>Nu</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Status User</th>
                                    <th>User Modify</th>
                                    <th>Data Time</th>
                                    <th>Durasaun</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody >
                                @foreach ($logs as $key => $log)

                                <tr>

                                    <td><a href="#">{{ $logs->firstItem()+$key }}</a></td>
                                    <td>{{ $log->username }}</td>
                                    <td>{{ $log->email }}</td>
                                    <td>{{ $log->status }}</td>
                                    <td>{{ $log->user_modify }}</td>
                                    <td>{{ $log->date }}</td>
                                    <td>{{ $log->created_at->diffForHumans() }}</td>
                                    @if($log->status=='logout')

                                    <td><span class="label label-danger">logout</span></td>
                                    @elseif ($log->status=='login')
                                    <td><span class="label label-success">login</span></td>

                                    @elseif ($log->status == 'Cria Dados Registo Credito Foun')
                                    <td><span class="label label-primary">Register</span></td>
                                    @elseif($log->status =='User Delete')
                                    <td ><i class=" text-danger bi bi-x-octagon-fill"></i></td>

                                    @elseif($log->status =='Update')
                                    <td><i class="bi bi-pencil-square text-warning"></i></td>


                                    @endif


                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-md text-center">
                                {{ $logs->links() }}
                            </div>
                        </div>
                    </div>
                    {{--  <div class="panel-footer">
                        <div class="row">
                            <div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i> Last 24 hours</span></div>
                            <div class="col-md-6 text-right"><a href="#" class="btn btn-primary">View All Purchases</a></div>
                        </div>
                    </div>  --}}
                </div>
            </div>
        </div>
    </container-fluid>
</div>

@endsection
