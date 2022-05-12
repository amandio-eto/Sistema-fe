
{{--  ida nee Mak Husi View  --}}

@extends('master.master')

@section('content')
<div class="main-content">
    <div class="container-fluid">


          <div class="row">
              <div class="col-md-6">
                  @if(session('success'))
                  <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <i class="fa fa-check-circle"></i> {{ session('success') }}
                </div>

                  @endif

                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Informasaun</h3>
                        <div class="left">

                            <a href="{{ url('/avisu') }}">
                                <i type="button"  class="bi bi-arrow-left-circle-fill" data-toggle="modal" data-target="#exampleModal">Fila Fali </i></a>






                        </div>
                    </div>
                    <div class="panel-body">
                        @foreach ($data as $info )

                        <div class="card-body">
                            <h5 class="card-title">Titulo  : <span style="font-weight: 1000;">{{ $info->titlu }}</span> </h5>
                            <p class="card-text"> Redasaun : <span>{{ $info->avisu }}</span> </p>
                            <hr>
                            <a href="{{ url('/avisu/view/delete/'.$info->id) }}" class="badge badge-danger" style="background: red;"><i class="lnr lnr-trash"></i> Hamos</a>
                            <a href="{{  url('/avisu/view/edit/'.$info->id) }}" class="badge badge-warning"  style="background:yellow;color:black;" ><i class="lnr lnr-pencil"></i> Update</a>
                        </div>
                        @endforeach

                    </div>
                </div>

              </div>
          </div>
    </div>
</div>

@stop

{{--  ida nee Mak Rohan View   --}}
