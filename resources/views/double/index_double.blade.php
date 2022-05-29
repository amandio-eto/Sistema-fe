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


                    <div class="row">
                        <div class="col">
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-left:20px;">
                                <i class="bi bi-plus-circle"></i> Recredito
                              </button>



                        </div>




                    </div>




                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title text-center" id="exampleModalLabel">Recredito</h3>
                                <button style="padding:6px;boder-radius:100%;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form action="{{ url('recredito/create') }}" method="POSTs">
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Naran Cliente</label>
                                      <select class="form-control" name="credito_id">
                                          <option value="cheese">--Hili naran----</option>
                                          @foreach($credito as $credit)
										<option value="{{ $credit->id }}">{{ $credit->clientid }}-{{ $credit->naran }}</option>
                                         @endforeach

								    	</select>

                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputPassword1">Montante Imprestimo</label>

                                      <input type="number" name="t_imprestimo" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Duarsaun</label>
                                        <select class="form-control" name="durasaun_id">
                                            <option >--Favor Hili ---</option>
                                            @foreach($durasaun as $key => $tempo)
                                            <option value="{{ $tempo->id }}">{{ $tempo->tempo }}</option>
                                            @endforeach



                                        </select>
                                    </div>


                                    <div class="input-group date">

                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        <input type="date" class="form-control" name="date">
                                    </div>
                                    <div class="form-group" style="margin-top:12px;">
                                        <label class="fancy-checkbox">
                                            @foreach($osanfunan as  $juru)
                                            <input value="{{ $juru->id }}" type="checkbox" name="osanfunan_id">
                                            <span>{{ $juru->osanfunan }}</span>
                                            @endforeach
                                        </label>

                                    </div>









                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="bi bi-x"></i> Calcela</button>
                                    <button type="submit" class="btn btn-success"><i class="bi bi-check"></i> Guarda</button>
                                </div>
                            </form>
                            </div>
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
                                    <th>Durasaun</th>
                                    <th>Aprovado</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($doubles as $double)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ optional($double->credito)->naran }}</td>
                                    <td>{{ $tempo = optional($double->durasaun)->tempo }}</td>
                                    <td>{{ date('d-F-Y', strtotime($double->date)) }}</td>
                                    <td>{{ osan($double->t_imprestimo) }}</td>
                                    <td>{{osan($osan=(($double->t_imprestimo)/(optional($double->durasaun)->tempo)) + ($osanfunan=($double->t_imprestimo)/(optional($double->durasaun)->tempo)))}}</td>
                                    <td>{{osan($osan + ($osanfunan * $tempo ))}}</td>

                                    <td>
                                        <i class="text-warning bi bi-pencil-square"></i>
                                        <i class="bi text-danger bi-x-circle"></i>
                                    </td>
                                    <td>
                                         <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal" style="margin-left:20px;">
                                        <i class="bi bi-check2-all"></i>Aprova Recredito
                                        </button>
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
