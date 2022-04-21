
@extends('master.master')

@section('content')
<div class="mian-content">
    <div class="container-fluid">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Cria Avisu Ba Cliente Sira</h3>
                        <div class="left">

                            <a href="{{ url('avisu/view') }}">
                                <i type="button" class="bi bi-eye-fill" data-toggle="modal" data-target="#exampleModal">Haree </i></a>






                        </div>
                    </div>
                    <div class="panel-body">

                        <form action="{{ url('/avisu/view/create') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Titulo Husi Avisu :</label>
                            <input type="text" class="form-control" name="titlu" placeholder="Titulo Husi Anunsiu " value="{{  old('titlu') }}">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Informasaun : </label>
                            <textarea class="form-control" name="avisu" placeholder="Hakarak Informasaun iha Ne'e " rows="4" value="{{ old('avisu') }}" ></textarea>
                        </div>
                        <br>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success"> <i class="fa fa-paper-plane-o"></i> Send</button>
                        </div>
                    </form>


                    </div>
                </div>



            </div>
        </div>



    </div>
</div>


@endsection
