@extends('master.master')
@section('header')
@stop

@section('content')

<div class="main-content">
    <div class="container-fluid">
        <div class="row  jusfiry-content-center" >
            <div class="col-md-8">

                <div class="panel">
                    <div class="panel">
                        <div class="panel-heading">
                          <div class="row">
                              <div class="col text-center">
                                <h1 class="panel-title" style="weight:1000;">Selu Setoran</h1>
                              </div>
                          </div>
                        </div>
                        <div class="panel-body">

                            <form action="{{ url('/setoran/create') }}" method="POST">
                                @csrf


                                                     <div class="mb-3">
                                                                    <label for="exampleInputPassword1" class="form-label">Cliente Naran</label>
                                                                    <select class="form-control"  name="credito_id">
                                                                        <option class=" disabled"> -- Hili Naran ---</option>
                                                                        @foreach ($data as $app )

                                                                        <option  value="{{ $app->id }}"> {{ $app->clientid }}-{{ $app->naran }}</option>

                                                                        @endforeach
                                                                    </select>

                                                                  </div>


                                <div class="mb-3">
                                  <label for="exampleInputPassword1" class="form-label">Montante Credito</label>
                                  <input type="text" class="form-control" id="exampleInputPassword1" name="update_selu">





                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Extensu</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="extensu">





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
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input type="date" class="form-control" type="text" >
                                </div>

                            <div class="bt" style="margin-top: 30px;">
                                <button type="submit" class="btn btn-primary mt-4">Submit</button>

                            </div>
                              </form>

                        </div>

                        

                     





                </div>


            </div>
        </div>

        <div class="card">
            <form class="form-horizontal">
                <div class="card-body">
                    <h4 class="card-title">Personal Info</h4>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">First Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="fname" placeholder="First Name Here">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Last Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="lname" placeholder="Last Name Here">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="lname" placeholder="Password Here">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Company</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="email1" placeholder="Company Name Here">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Contact No</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="cono1" placeholder="Contact No Here">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Message</label>
                        <div class="col-sm-9">
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body">
                        <button type="button" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>

        <form class="form-horizontal">
            <div class="card-body">
                <h4 class="card-title">Personal Info</h4>
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">First Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="fname" placeholder="First Name Here">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Last Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="lname" placeholder="Last Name Here">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="lname" placeholder="Password Here">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email1" class="col-sm-3 text-right control-label col-form-label">Company</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="email1" placeholder="Company Name Here">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Contact No</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="cono1" placeholder="Contact No Here">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Message</label>
                    <div class="col-sm-9">
                        <textarea class="form-control"></textarea>
                    </div>
                </div>
            </div>
            <div class="border-top">
                <div class="card-body">
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>



    </div>
</div>



{{--  ida nee Mak Rohan Husi Session  --}}
@stop
