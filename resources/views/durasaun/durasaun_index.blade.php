@extends('master.master')

@section('content')

<div class="main-content">
    <div class="container-fluid">
<!-- Modal 1-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
    <h5><i class="bi bi-plus-circle text-center" style="text-align: center;"></i> Aumenta tempo</h5>
        <button type="button bg-danger" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ url('/setting/durasaun/create') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Durasaun Foun</label>
                            <input type="number" class="form-control" name="tempo" id="exampleInputEmail1" aria-describedby="emailHelp">

                            </div>

                            <div class="form-group form-check">
                                <input name="user_id" value="{{ Auth::user()->id }}" type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Aprovado Por : {{ Auth()->user()->name }}</label>
                            </div>


                    </div>
                    <div class="modal-footer text-left" >
                            <button  type="button" class="btn btn-danger" data-dismiss="modal"><i class="bi bi-x" ></i> Calcela</button>
                            <button  type="submit" class="btn btn-success"><i class="bi bi-check-lg"></i>Guarda</button>
                    </div>
        </form>

    </div>
  </div>
</div>





<!-- Modal 3-->
  <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
      <h5 class="text-center"> Update Table </h5>
          <button type="button bg-danger" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ url('/setting/durasaun/create') }}" method="POST">
                          @csrf
                          <div class="form-group">

                              <input type="number" class="form-control" name="nu" id="exampleInputEmail1" aria-describedby="emailHelp" value="">

                              </div>
                              <div class="form-group">

                                <input type="number" class="form-control" name="durasaun" id="exampleInputEmail1" aria-describedby="emailHelp">

                                </div>
                                <div class="form-group">

                                    <input type="number" class="form-control" name="data" id="exampleInputEmail1" aria-describedby="emailHelp">

                                    </div>
                                    <div class="form-group">

                                        <input type="number" class="form-control" name="utilizador" id="exampleInputEmail1" aria-describedby="emailHelp">

                                        </div>
                                        <div class="form-group">

                                            <input type="number" class="form-control" name="tempo" id="exampleInputEmail1" aria-describedby="emailHelp">

                                            </div>
                                            <div class="form-group">

                                                <input type="number" class="form-control" name="aksaun" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                </div>

                                                    <div class="form-group">

                                                        <input type="number" class="form-control" name="tempo" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                        </div>




                      </div>
                      <div class="modal-footer text-left" >
                              <button  type="button" class="btn btn-danger" data-dismiss="modal"><i class="bi bi-x" ></i> Calcela</button>
                              <button  type="submit" class="btn btn-success"><i class="bi bi-check-lg"></i>Guarda</button>
                      </div>
          </form>

      </div>
    </div>
  </div>




        <div class="row">
            <div class="col-md">
                <!-- TABLE HOVER -->
                <div class="panel">

                    <!-- Button trigger modal -->


<i style="font-size:20px;margin:8px, 8px;" class="bi bi-plus-circle text-center text-primary" data-toggle="modal" data-target="#exampleModal" style="text-align: center;"></i> | <i style="font-size:20px;margin:8px, 8px;" class="bi bi-pen text-warning" data-toggle="modal" data-target="#editModal" style="cursor:pointer"></i>


                    <div class="panel-heading">
                        <h1 class="panel-title text-center" style="text-transform:uppercase;">Testing</h1>
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover">
                            <thead>
                                @foreach ($text as $texts)

                                <tr>
                                    <th>{{ $texts->nu }}</th>
                                    <th>{{ $texts->durasaun }}</th>
                                    <th>{{ $texts->data }}</th>
                                    <th>{{ $texts->utilizador }}</th>
                                    <th>{{ $texts->tempo }}</th>
                                    <th> {{ $texts->aksaun}}</th>
                                </tr>
                                @endforeach
                            </thead>
                            <tbody>
                                @foreach($data as $durasaun)

                                <tr>
                                    <td>{{ $loop->iteration}}</td>
                                    <td>{{ $durasaun->tempo}}</td>
                                    <td>{{ date('d-F-Y',strtotime($durasaun->created_at))}}</td>
                                    <td>{{ $durasaun->user->name}}</td>
                                    <td>{{ $durasaun->created_at->diffForHumans() }}</td>
                                    <td>

                                        <a  id="a" href="{{ url('setting/durasaun/edit/'.$durasaun->id) }}"><i class="bi bi-pencil-square text-warning"  data-toggle="modal" data-target="#durasaunModal" ></i><a> |
                                        <a href="{{ url('/setting/durasaun/destory/'.$durasaun->id) }}"><i class="bi bi-trash-fill text-danger"></i></a>


                                    </td>
                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END TABLE HOVER -->
            </div>

        </div>
    </div>
</div>





@endsection

@section('footer')


<script src="{{ asset('jquery/jquery.js') }}"></script>
<script>

    $(document).ready(function(){
        $('#a').click(function(){

           event.preventtDefault();
        })



    });

</script>

@endsection






