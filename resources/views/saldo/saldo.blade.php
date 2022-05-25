
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



color:black;
text-transform:uppercase;

    }
</style>

@endsection
@section('content')

    <div class="main-content">
        <div class="container-fluid">
            <div class="container">
                <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    <i class="bi bi-bank"></i> Aumenta Osan
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">


      <div class="modal-header text-center">
        <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-plus-square-fill text-primary"></i> Aumenta Saldo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="img">
            <img src="{{ asset('foto/images/saldo.png') }}" width="350" style="border-radius:100%;" alt="">
        </div>
    </div>
      <div class="modal-body">

        {{--  ida nee Mak Form  --}}
        <form  action="{{ url('/setting/osan/create') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Saldo</label>
              <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="saldo">

            </div>
            <label for=""> Tipo Utilizasaun</label>
            <label class="fancy-radio">
                <input name="tipo_utilizasaun" value="cash" type="radio">
                <span style="text-transform: uppercase"><i></i>CASH</span>
            </label>
            <label class="fancy-radio">
                <input  value="transfer" type="radio" name="tipo_utilizasaun">
                <span  style="text-transform: uppercase;"><i></i>Transfer</span>
            </label>

            <div class="form-group">
              <label for="exampleInputPassword1">Data</label>
              <input type="date" class="form-control" id="exampleInputPassword1" name="data">

            </div>


            <div class="form-group">
              <label for="exampleInputPassword1">Messagen</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="messagen">
              <p> <smal style="color:red;font-style:italic;"> "Ida Nee Laos Obrigatorio"</smal> </p>

            </div>



          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success">Aumenta Saldo <i class="bi bi-coin"></i></button>
          </div>
        </form>
        {{--  ida nee Mak Ending Husi Form  --}}
    </div>
  </div>
</div>
          <div class="row">
            <div class="com-md" style="margin-top:30px;">
                @if(session('success'))



        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <i class="fa fa-check-circle"></i>{{ session('success') }}
        </div>
            </div>




    @endif
                    <div class="col text-center mb-4">
                        <h3>Setting Saldo</h3>
                    </div>
                </div>
            <div class="row">
                <div class="col-md">
                    <table border="1" class="table table-dark">
                        <thead class="thead">
                          <tr style="back">
                            <th scope="col">Nu</th>
                            <th scope="col">Code</th>
                            <th scope="col">Montante Osan</th>
                            <th scope="col">Tipo Utilizasaun</th>
                            <th scope="col">Commentario</th>
                            <th scope="col">Data</th>
                            <th scope="col">Cria User </th>
                            <th scope="col">Aksaun </th>

                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $app)

                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>Fe-00000{{$loop->iteration}}</td>
                                <td>{{ osan($app->saldo) }}</td>
                                <td>{{ $app->tipo_utilizasaun }}</td>
                                <td>{{ $app->messagen }}</td>
                            <td>{{ date('d-m-Y', strtotime($app->data)) }}</td>
                            <td>{{ auth()->user()->name }}</td>
                            <td>
                                <a href="{{ url('setting/osan/edit/'.$app->id) }}" class="text-warning"><i class="bi bi-pencil"></i></a> |
                                <a href="{{ url('setting/osan/delete/'.$app->id) }}" class="text-danger" ><i class="bi bi-trash3-fill"></i></a>
                            </td>

                        </tr>
                        @endforeach


                        </tbody>
                      </table>

                </div>
            </div>

        </div>
    </div>
</div>


@stop
@section('footer')
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

@stop
