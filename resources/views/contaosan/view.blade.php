@extends('master.master')

@section('header')
<style>
    .thead{
        /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#e1ffff+0,e1ffff+7,e1ffff+12,fdffff+24,e6f8fd+45,c8eefb+66,bee4f8+81 */
  background: #e1ffff; /* Old browsers */
  background: -moz-linear-gradient(top,  #e1ffff 0%, #e1ffff 7%, #e1ffff 12%, #fdffff 24%, #e6f8fd 45%, #c8eefb 66%, #bee4f8 81%); /* FF3.6-15 */
  background: -webkit-linear-gradient(top,  #e1ffff 0%,#e1ffff 7%,#e1ffff 12%,#fdffff 24%,#e6f8fd 45%,#c8eefb 66%,#bee4f8 81%); /* Chrome10-25,Safari5.1-6 */
  background: linear-gradient(to bottom,  #e1ffff 0%,#e1ffff 7%,#e1ffff 12%,#fdffff 24%,#e6f8fd 45%,#c8eefb 66%,#bee4f8 81%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e1ffff', endColorstr='#bee4f8',GradientType=0 ); /* IE6-9 */

  text-transform:uppercase;
    }
</style>

@endsection

@section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="row">

            <div class="container">

                <div class="row">
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                          <i class="fa fa-check-circle"></i>  {{ session('success') }}
                    </div>
                    @endif

                    <div class="panel">

                        <div class="panel-heading">


                            <h2 class="panel-title text-center">Log File</h2>





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
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button style="padding:6px;boder-radius:100%;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <form>
                                        <div class="form-group">
                                          <label for="exampleInputEmail1">Email address</label>
                                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                        </div>
                                        <div class="form-group">
                                          <label for="exampleInputPassword1">Password</label>
                                          <input type="password" class="form-control" id="exampleInputPassword1">
                                        </div>


                                      </form>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="bi bi-x"></i> Calcela</button>
                                    <button type="button" class="btn btn-success"><i class="bi bi-check"></i> Guarda</button>
                                </div>
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
                                        <th>Montante</th>
                                        <th>Data</th>
                                        <th>Create By</th>
                                        <th>Aksaun</th>

                                    </tr>
                                </thead>

                                    @foreach ($total as $data )

                                <tr>

                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ osan($data->total) }}</td>
                                    <td>{{ date('d-F-Y',strtotime($data->created_at)) }}</td>
                                    <td>{{ $data->User->name }}</td>

                                    <td>
                                        <a type="submit" href="{{ url('/contaosan/edit/'.$data->id) }}">
                                            <i type="submit" class="text-warning bi bi-pencil-square"></i>
                                        </a>
                                        <a type="submit" onclick="return confirm('Ita Boot Hakarak Hamos dados Refere')" href="{{ url('/contaosan/destroy/'.$data->id) }}"><i style="submit" class=" text-danger bi bi-x-octagon-fill"></i></a>
                                        <a href=""><i class="bi bi-printer-fill"></i></a>
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
