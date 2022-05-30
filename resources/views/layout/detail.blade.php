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
                            <span>Numeru Husi Setor : {{ $app->count() }}</span>
                        </div>
                        <div class="col-md-4 stat-item">
                             <span>Total Setoran : {{ osan($app->setoran->sum('update_selu') )}}</span>
                        </div>
                        <div class="col-md-4 stat-item " >
                             Restu<span style="color:black;">{{osan($fulan*$app->durasaun->tempo-$app->setoran->sum('update_selu')) }}</span>
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
                        <li>Data Moris : <span> {{ date('m-F-Y',strtotime($app->data_moris)) }}</span></li>
                        <li>Hela Fatin :<span>{{ $app->hela_fatin }}</span></li>
                          <li>suco <span>{{ $app->suco }}</span></li>
                        <li>Posto administrativo<span>{{ $app->padministrativo }}</span></li>
                        <li>Municipio <span>{{ $app->municipio }}</span></li>
                        <li>Salario <span>{{osan($app->salario)  }}</span></li>
                        <li>Telemovel <span>{{ $app->phone }}</span></li>
                        <li>Durasaun Credito <span>{{ $app->durasaun->tempo }}</span></li>
                        <li>Categoria <span>{{ $app->category }}</span></li>
                        <hr>
                        <li style="border: 1px solid black;">Total Credito <span>{{ osan($app->total_credito) }}</span></li>

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


            <div class="left">
                <!-- Button trigger modal -->
                @if(numero($conta*100) >= numero(99))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <i class="fa fa-check-circle"></i> {{$app->naran }} Selu Lunas Ona
                </div>

                @endif

                {{--  <p>Update Persentage Setoran {{$sura = numero($conta*100)  }}</p>  --}}

                @if(numero($conta*100) == numero(100))
                        <div class="col" style="margin-bottom:10px;">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                                <i class="bi bi-plus-circle"></i> Recredito
                            </button>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal2">
                                <i class="bi bi-plus-circle"></i> Aprova Credito
                            </button>
                        </div>
                @endif

                {{--  ida nee Mak Modal 2  --}}
                <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                              </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>

                {{--  ida nee Mak Ending Husi Modal 2  --}}




                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ url('recredito/create') }}" method="POSTs">


                                <div class="form-group">
                                  <label for="exampleInputPassword1">Montante Imprestimo</label>
                                  <input type="number" name="t_imprestimo" class="form-control" id="exampleInputPassword1">
                                  <input type="hidden" name="credito_id" value="{{ $app->id }}" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Duarsaun</label>
                                    <select class="form-control" name="durasaun_id">
                                        <option >--Favor Hili ---</option>
                                        @foreach($tempo as $key => $time)
                                        <option value="{{ $time->id }}">{{ $time->tempo }}</option>
                                        @endforeach



                                    </select>
                                </div>


                                <div class="input-group date">

                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input type="date" class="form-control" name="date">
                                </div>
                                <div class="form-group" style="margin-top:12px;">
                                    <label class="fancy-checkbox">
                                        @foreach($osan as  $juru)
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





          @if (numero($conta*100) == numero(100) )
          <div class="progress">
            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:{{numero($conta*100) }}">
                <p>{{ numero($conta*100) }}</p>
            </div>
        </div>


          @elseif(numero($conta*100) >= numero(55))
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width:  {{ numero($conta*100) }};" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{ numero($conta*100) }}</div>
          </div>
          @elseif(numero($conta*100) < numero(55))
          <div class="progress">
                <div class="progress-bar bg-danger" role="progressbar" style="width:{{ numero($conta*100)  }}" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          @endif
            <h4 class="heading text-center" style="font-weight:1000">Update Setoran {{ $app->naran }}</h4>
            <!-- AWARDS -->
            <div class="awards">
                <div class="row">
                 <div class="col-md-2 text-left">
                     <h4 style="font-weight: 1000;">Total Credito :{{ osan($app->total_credito) }}</h4>
                 </div>

                 <div class="col-md-2 text-left" >
                     <h4 style="font-weight: 1000;">Total Setoran :{{ osan($persen=$app->setoran->sum('update_selu')) }}</h4>
                 </div>

                 <!-- <div class="col-md-2 text-left" >
                    <h4 style="font-weight: 1000;">Durasaun : {{ $app->durasaun->tempo }} </h4>
                </div> -->
                <div class="col-md-2 text-left" >
                    <h4 style="font-weight: 1000;">Total Dividas : {{osan($fulan*$app->durasaun->tempo) }} </h4>
                </div>

                <div class="col-md-2 text-left" >
                    <h4 style="font-weight: 1000;">Restu : <span style="font-weight: 1000; color: red;">{{osan($fulan*$app->durasaun->tempo-$app->setoran->sum('update_selu')) }} </span>  </h4>

                </div>





                </div>
                @if (numero($conta*100) <= numero(90))
                <div class="row">
                    <table class="table" border="1">
                        <thead>
                          <tr style="background: yellow;">
                            <th scope="col">Nu</th>
                            <th scope="col">Total Credito</th>
                            <th scope="col">Osan Inan </th>
                                <th scope="col">Durasaun</th>
                            <th scope="col">Jurus Mensal</th>
                            <th scope="col">Osan Administrasaun</th>
                            <th scope="col">Fee Credito</th>
                            <th scope="col">Total Deposito Mensal </th>
                            <th scope="col">Data Credito </th>

                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                              <th scope="row">1</th>
                              <td>{{ osan($app->total_credito )}}</td>

                              <td>{{osan(( $test = $app->total_credito)/($app->durasaun->tempo))}}</td>
                              <td>{{ osan($osan = $app->total_credito * $app->osanfunan->osanfunan )}}</td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td>{{ osan( ($app->total_credito)/($app->durasaun->tempo)+$osan)}}</td>
                              <td>{{ date('d-F-Y',strtotime($app->created_at)) }}</td>


                            </tr>

                            @foreach($app->double as $data)

                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ osan($data->t_imprestimo) }}</td>
                                <td>{{osan($osaninan=($data->t_imprestimo)/(optional($data->durasaun)->tempo ))}}</td>
                                <td>{{ optional($data->durasaun)->tempo }}</td>
                                <td>{{ osan($juru=($data->t_imprestimo)*optional($data->osanfunan)->osanfunan) }}</td>
                                <td></td>
                                <td></td>
                                <td>{{ osan($osaninan+$juru )}}</td>
                                <td>{{ date('d-F-Y',strtotime($data->date)) }}</td>

                        </tr>
                        @endforeach



                            {{--  @foreach ($app->double as $double )
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ osan($double->t_imprestimo )}}</td>
                                <td>{{ $app->durasaun->tempo }}</td>
                                <td></td>

                                <td>{{ $double->t_imprestimo }}</td>
                                <td>{{ $double->t_imprestimo }}</td>



                            </tr>
                            @endforeach  --}}

                        </tbody>
                      </table>
                </div>
                @endif

                <div class="row">
                    <table class="table table-bordered">

                            <thead class="bg-primary text-center">


                                <tr>
                                    <th>N<span><sup style="text-style:underline">0</sup></span> </th>
                                    <th>Nu Extrato</th>
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
                                <td></td>
                                <td>${{ $data->update_selu }}</td>
                                <td> <span style="background: yellow; border-radius:20px;color:black; padding:6px;font-size:12px;">{{ $data->status }}</span> </td>
                                <td>{{ $data->pending }}</td>
                                <td>{{ $data->selu }}</td>

                                <td>{{ date('d-F-Y', strtotime($data->data))}}</td>
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
                    <a href="{{ url('/sistema/print/'.$data->id) }}"
                    " class="btn btn-primary"> <span class="lnr lnr-printer"></span>Print</a>
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

                                    <img src="{{ asset('/img/chip.png') }}" alt="" width="60px">
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
                                    <td><a href="#">{{$loop->iteration }}</a></td>
                                    <td><img src="{{ asset('images/'.$data->arcivo) }}" width="50;" alt=""></td>
                                    <td>{{ $data->naran }}</td>
                                    <td>{{ $data->montante_transfer }}</td>
                                    <td>{{ $data->montante_transfer }}</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                                <span>100%</span>
                                            </div>
                                        </div>
                                    <td>${{ date('d-F-Y',strtotime($data->created_at)) }}</td>
                                    </td>
                                     <td><a href="{{ url('/arquivo/delete/'.$data->id) }}"><i class="bi bi-trash3 text-danger"></i></a></td>


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

@section('footer')

<script src="{{ asset('jquery/jquery.js') }}"></script>
<script>
    $(document).keyup(function(){

        var x = Number($('#totaldividas').val());
        var y = Number($('#montante').val());

        var z = x * y;
        $('#setoranmensal').val(z);



    });
</script>

@endsection
