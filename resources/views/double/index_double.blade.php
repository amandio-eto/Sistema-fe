@extends('master.master')
@section('title', 'Recredito')

@section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md">

                <div class="panel">

                    <div class="panel-heading">


                        <h2 class="panel-title text-center">Recredito</h2>





                        <div class="right">
                            <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                            <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button><br>

                            <!-- Button trigger modal -->
                        </div>



                    </div>












                    <div class="row" style="margin-left: 10px;">
                        <div class="col">
                            <form class="navbar-form navbar-center" method="GET" action="http://localhost/fe/public/logs">
                                <div class="input-group text-center">
                                    <input type="text" name="buka" value="" class="form-control" placeholder="Buka ">
                                    <span class="input-group-btn"><button type="submit" class="btn btn-success"><i class="bi bi-search"></i></button></span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="panel-body no-padding">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nu</th>
                                    <th>Naran Cliente</th>
                                    <th>Durasaun</th>
                                    <th>Data </th>
                                    <th>Montante Imprestimo</th>
                                    <th>Deposito Mensal</th>
                                    <th>Total Dividas</th>
                                    <th>Aksaun</th>

                                    {{--  <th>Status</th>  --}}
                                </tr>
                            </thead>
                            <tbody>
                                @csrf
                                @foreach($doubles as $double)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ optional($double->credito)->naran }}</td>
                                    <td>{{ $tempo = optional($double->durasaun)->tempo }}</td>
                                    <td>{{ date('d-F-Y', strtotime($double->date)) }}</td>
                                    <td>{{ osan($osaninan=$double->t_imprestimo) }}</td>

                                    <td>{{osan($tdividas=($double->t_imprestimo / $tempo) + ($osaninan*$double->osanfunan->osanfunan))}}</td>
                                    <td>{{ osan($tdividas* $tempo) }}</td>

                                    <td>
                                    <a href="{{ url('recredito/edit/'.$double->id) }}"> <i class="text-warning bi bi-pencil-square"></i></a>
                                    <a onclick="return comfirm('Ita Boot Hakarak Hamos Dados Refere?')" href="{{ url('recredito/delete/'.$double->id) }}"><i class="bi text-danger bi-x-circle"></i></a>

                                    </td>


                                </tr>


                                @endforeach

                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-md text-center">

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@stop
@section('footer')
<script src="{{ asset('jquery/jquery.js') }}"></script>
<script>

    $('#chevron').click(function(){
        $('.table').css('color','red');
        event.preventDefault();
    });

</script>

@stop
