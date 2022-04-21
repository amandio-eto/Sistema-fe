@extends('master.master')

@section('content')

<div class="main-content">
    <div class="container-fluid">
        <div class="row  jusfiry-content-center" >
            <div class="col-md-8">

                <div class="panel">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Inputs</h3>
                        </div>
                        <div class="panel-body">

                            <form action="{{ url('/setoran/create') }}" method="POST">
                                @csrf


                                                     <div class="mb-3">
                                                                    <label for="exampleInputPassword1" class="form-label">Cliente Naran</label>
                                                                    <select class="form-control"  name="credito_id">
                                                                        <option class=" disabled"> -- Hili Naran ---</option>
                                                                        @foreach ($data as $app )

                                                                        <option  value="{{ $app->id }}"> {{ $loop->iteration }} {{ $app->naran }}</option>

                                                                        @endforeach
                                                                    </select>

                                                                  </div>


                                <div class="mb-3">
                                  <label for="exampleInputPassword1" class="form-label">Montante Credito</label>
                                  <input type="text" class="form-control" id="exampleInputPassword1" name="update_selu">





                                </div>

                                {{--  metode selu  --}}
                                <label>Metode Selu</label>
                                <label class="fancy-radio">
                                    <input  value="cash" type="radio" name="selu">
                                    <span><i></i>Cash</span>
                                </label>
                                <label class="fancy-radio">
                                    <input value="transfer" type="radio" name="selu">
                                    <span><i></i>Transfer</span>
                                </label>


                                {{--  ida ne'e Mak Metode Selu  --}}

                                {{--  metode selu  --}}
                                <label>Estatus Husi Pagamento</label>
                                <label class="fancy-radio">
                                    <input name="status" value="normal" type="radio">
                                    <span><i></i>Normal</span>
                                </label>
                                <label class="fancy-radio">
                                    <input name="status" value="pending" type="radio" >
                                    <span><i></i>Pending</span>
                                </label>
                                <label class="fancy-radio">
                                    <input name="status" value="laselu" type="radio">
                                    <span><i></i>La Selu Kleur</span>
                                </label>


                                {{--  ida ne'e Mak Metode Selu  --}}
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Data Selu</label>
                                    <input type="date" class="form-control" id="exampleInputPassword1" name="data">





                                  </div>








                            <div class="bt" style="margin-top: 30px;">
                                <button type="submit" class="btn btn-primary mt-4">Submit</button>

                            </div>
                              </form>

                        </div>






                </div>


            </div>
        </div>



    </div>
</div>



{{--  ida nee Mak Rohan Husi Session  --}}
@stop
