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

    }
</style>

@endsection

@section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="row">

            <div class="container">
                <div class="row">
                    <div class="col">
                        <!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" style="margin-bottom:6px;">
    <span class="lnr lnr-plus-circle"></span> Cria Level
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel">Level Credito</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ url('/setting/level/create') }}" method="POST" >
            @csrf
            <div class="form-group @error('code') is-invalid @enderror">
              <label for="exampleInputEmail1">Code</label>
              <input type="text" name="code" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('code') }}">
              @error('code')
              <div class="invalid-feedback">
                    <small class="text-danger">{{ $message }}</small>
              </div>
            @enderror

            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Level</label>
              <input type="number" name="level" class="form-control" id="exampleInputPassword1" value="{{ old('level') }}">

            </div>
            @error('level')
            <div class="invalid-feedback">
                  <small class="text-danger">{{ $message }}</small>
            </div>
          @enderror

            <label>Autorizado Por : {{ auth()->user()->name }}</label>
            <label class="fancy-checkbox">
                <input value="{{auth()->user()->id}}" type="checkbox" name="user_id">
                <span>{{ auth()->user()->role }} </span>
            </label>
            @error('user_id')
            <div class="invalid-feedback">
                  <small class="text-danger">{{ $message }}</small>
            </div>
          @enderror

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Taka</button>
                <button type="submit" class="btn btn-primary">Send</button>
            </div>
        </form>
    </div>
  </div>
</div>

                    </div>
                </div>
                <div class="row">
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                          <i class="fa fa-check-circle"></i>  {{ session('success') }}
                    </div>
                    @endif
                    <div class="col-8">
                        <table class="table hover" style="box-shadow:0 5px 35px rgba(0,0,0,1)">


                            <thead class="thead">
                              <tr>
                                <th scope="col">Nu</th>
                                <th scope="col">Kode</th>
                                <th scope="col">Level</th>
                                <th scope="col">Data Cria</th>
                                <th scope="col">User</th>
                                <th scope="col">Aksaun</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($level as $data )

                                <tr>

                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->code }}</td>
                                <td>{{ $data->level }}</td>
                                <td>{{ date('d-F-Y',strtotime($data->created_at)) }}</td>
                                <td>{{ $data->name }}</td>
                                <td>

                                    <a href=""> <i class="text-warning bi bi-pencil-square"></i></a>
                                    <a href=""> <i class=" text-danger bi bi-x-octagon-fill"></i></a>
                                </td>
                                <td></td>
                            </tr>
                            @endforeach

                            </tbody>
                          </table>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>

@stop
