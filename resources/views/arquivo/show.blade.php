 @extends('master.master')

@section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="panel">
            <div class="panel-heading">
                @if(session('success'))



                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <i class="fa fa-check-circle"></i>{{ session('success') }}
                </div>




            @endif
                <h3 class="panel-title text-center">Arquivo Images Husi Cliente Transferensia</h3>
                <div class="right">
                    <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                    <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>

                </div>
                <div class="left">
                    <a href="{{ url('/arquivo/file') }}"> <i class="bi bi-arrow-left-square-fill">Fila Fali</i></a>


                </div>

            </div>
            <div class="row">
                <div class="container" style="margin:40px;">
                    <form action="{{ url('/arquivo/show') }}" method="GET">
                        <input type="text" placeholder="buka client nia Naran" name="buka">
                        <button type="submit"><i class="fa fa-search"></i></button>
                      </form>
                </div>
            </div>

            <div class="panel-body no-padding">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Image Trasferensia</th>
                            {{--  <th>Naran Cliente</th>  --}}
                            <th>Montante Tansfersia</th>
                            <th>Code Transfersia</th>
                            <th>Commentario</th>
                            <th>Data</th>
                            <th>Download File</th>
                            <th>Uplaod Husi</th>
                            <th>Aksaun</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $key=> $arq)

                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><img src="{{ asset('images/'.$arq->arcivo) }}" width="100px;" alt=""></td>
                            {{--  <td  style="text-transform: uppercase">{{ $data->credito->naran }}</td>  --}}
                            <td>${{ $arq->montante_transfer }}</td>
                            <td>{{ $arq->comment }}</td>
                            <td>Fe-00{{ $loop->iteration }}</td>
                            <td>{{ $arq->created_at->format('D,F,Y') }}</td>
                            <td> <i class="fa fa-download"></i></td>
                            <td><span class="label label-success" style="text-transform: uppercase">Completo</span></td>
                            <a href=""></a>
                            <td><a href="{{ url('/arquivo/delete/'.$arq->id) }}"><i class="bi bi-trash3 text-danger"></i></a>
                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>

            <div class="panel-footer">
                <div class="row">

                    {{--  <div class="col-md-6 text-right">{{ $data->links()}}</div>  --}}

                </div>
            </div>
        </div>

    </div>
</div>
@stop
