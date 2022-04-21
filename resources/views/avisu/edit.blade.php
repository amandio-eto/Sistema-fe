
@extends('master.master')

@section('content')
<div class="mian-content">
    <div class="container-fluid">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Inputs</h3>
                    </div>
                    <div class="panel-body">
                        <form action="{{ url('/avisu/view/update/'.$data->id) }}" method="POST">
                            @csrf


                        <div class="form-group">
                            <label for="">Titulo Husi Avisu :</label>
                            <input type="text" class="form-control" placeholder="Titulo Husi Anunsiu " value="{{ $data->titlu }}" name="titlu">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Informasaun : </label>


                            <textarea class="form-control"   placeholder="Hakarak Informasaun iha Ne'e " rows="4" name="avisu">


                            </textarea>
                        </div>
                        <br>
                        <div class="modal-footer">

                            <a href="{{ url('/avisu/view') }}" class="btn btn-primary" ><i class="bi bi-arrow-left-circle-fill"></i> Fila Fali</a>
                            <button type="submit" class="btn btn-warning"> <i class="bi bi-pen"></i> Update</button>
                          </div>
                        </form>

                    </div>
                </div>



            </div>
        </div>



    </div>
</div>


@endsection
