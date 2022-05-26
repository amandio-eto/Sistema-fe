
@extends('master.master')

@section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Arquivo Husi Transferensia</h3>
                        <div class="left">

                            <a type="submit"  href="{{ url('/arquivo/show')}}" class="btn btn-primary">Haree Aquivo</a>

                        </div>
                    </div>
                    <div class="panel-body">

                        <form action="{{ url('/arquivo/create') }}" method="POST" enctype="multipart/form-data" >
                            @csrf
                        <div class="file" style="width: 200px;height:200px;border:dashed;padding-top:50px; margin-left:20%;" >


                            <button class="bg-success" style="padding: 30px;"><input type="file" class="form-control" placeholder="text field" name="arcivo"></button>

                        </div>
                        @error('arcivo')
                        <div class="is-invalid">
                            <small class="text-danger">{{ $message }}</small>
                        </div>

                        @enderror
                        <br>
                        <label for="exampleInputEmail1">Naran Cliente </label>

                        <select class="form-control" name="credito_id">
                            <option value=""> -- Hili --</option>
                            @foreach ( $data as $app)

                            <option value="{{ $app->id }}">{{ $app->clientid }}-{{ $app->naran }}</option>
                            @endforeach


                        </select>
                        @error('credito_id')
                        <div class="is-invalid">
                            <small class="text-danger">{{ $message }}</small>
                        </div>

                        @enderror
                        <br>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Monatnte Osan Transferensia</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="montante_transfer">
                            @error('montante_transfer')
                            <div class="is-invalid mt-1">
                                <small class="text-danger">{{ $message }}</small>
                            </div>

                        </div>


                        @enderror

                        <div class="form-group">
                            <label for="exampleInputEmail1">Commentario</label>
                            <input type="textl" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="comment">
                            <small id="emailHelp" class="form-text text-danger text-muted">Ida nee Opsional Bele Husik Mamuk Ou Bele Prenche</small>
                          </div>

                           <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Taka</button>
                                <button type="submit" class="btn btn-success">Aquiva foto </button>
                            </div>
                    </form>


                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

@stop


