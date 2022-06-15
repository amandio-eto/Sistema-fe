@extends('master.master')

@section('content')

<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Update</h3>
                    </div>
                    <div class="panel-body">
                        <form action="{{ url('/setting/durasaun/update/'.$edit->id) }}" method="POST">
                            @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Durasaun Foun</label>
                            <input type="number"  value="{{ $edit->tempo }}"  class="form-control" name="tempo" id="exampleInputEmail1" aria-describedby="emailHelp">

                            </div>

                            <div class="form-group form-check">
                                <input name="user_id" value="{{ Auth::user()->id }}" type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Aprovado Por : {{ Auth()->user()->name }}</label>
                            </div>

                            <div class="row" style="margin-top:30px;">
                                <div class="modal-footer text-left" >
                                    <a href="{{ url('setting/durasaun') }}" type="button" class="btn btn-primary" data-dismiss="modal"><i class="bi bi-arrow-left"></i> Fila Fali</a>
                                    <button  type="submit" class="btn btn-success"><i class="bi bi-check-lg"></i>Guarda</button>
                            </div>

                        </form>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
