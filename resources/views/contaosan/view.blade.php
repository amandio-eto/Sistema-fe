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
                    <div class="col-8">
                        <table class="table hover" style="box-shadow:0 5px 35px rgba(0,0,0,1)">


                            <thead class="thead">
                              <tr>
                                <th scope="col">Nu</th>
                                <th scope="col">Total Osan</th>

                                <th scope="col">Data Cria</th>
                                <th scope="col">User</th>
                                <th scope="col">Aksaun</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach ($total as $data )

                            <tr>

                                <td>{{ $loop->iteration }}</td>
                                <td>{{ osan($data->total) }}</td>
                                <td>{{ date('d-F-Y',strtotime($data->created_at)) }}</td>
                                <td>{{ $data->User->name }}</td>

                                <td >
                                    <a type="submit" href="{{ url('/contaosan/edit/'.$data->id) }}">
                                        <i type="submit" class="text-warning bi bi-pencil-square"></i>
                                    </a>
                                     <a type="submit" onclick="return confirm('Ita Boot Hakarak Hamos dados Refere')" href="{{ url('/contaosan/destroy/'.$data->id) }}"><i style="submit" class=" text-danger bi bi-x-octagon-fill"></i></a>
                                     <a href=""><i class="bi bi-printer-fill"></i></a>

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
