

@extends('master.master')
@section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="panel">
                    <div class="panel-heading text-center">
                      <div class="text " style="margin-bottom:30px;">
                        <h3 class="panel-title"> Update Utilizador</h3>
                      </div>
                        <div class="img">
                            <img src="{{ asset('images/'.$user->foto) }}" alt="" width="150px;" height="150px" style="border: 1px solid black;">
                        </div>
                    </div>
                    <div class="panel-body">
                        <form action="{{ url('/auth/create/user/update/'.$user->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                <label for="exampleInputEmail1">Naran Completo</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name"" value="{{ $user->name }}"  >
                                @error('name')
                                <div class="invalid-feedback text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                                </div>


                                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{  $user->email }}" >

                                @error('email')
                                <div class="invalid-feedback text-danger">
                                        {{ $message }}
                                </div>
                                @enderror

                                </div>
                                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="password" value="{{ old('password') }}">

                                @error('password')
                                <div class="invalid-feedback text-danger">
                                        {{ $message }}
                                </div>
                                @enderror


                                </div>
                                <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                                    <label for="exampleInputEmail1">Confirm Password</label>
                                    <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="password_confirmation">

                                    @error('password_confirmation')
                                    <div class="invalid-feedback text-danger">
                                            {{ $message }}
                                    </div>
                                    @enderror

                                    </div>
                                    <label> Hili Role</label>
                                    <div class="form-group {{ $errors->has('role') ? 'has-error' : '' }}"  >
                                        <select class="form-control" name="role">

                                            <option value=""> --Hili-- </option>
                                            <option value="admin" @if ($user->role == 'admin') selected

                                            @endif>Admin</option>
                                            <option value="user" @if ($user->role == 'user') selected

                                                @endif>User</option>

                                        </select>


                                    @error('role')
                                    <div class="invalid-feedback text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                </div>


                                <div class="form-group {{ $errors->has('foto') ? 'has-error' : '' }}" style="margin-bottom: 30px;" >
                                    <label for="exampleInputEmail1">Foto</label>
                                    <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="foto" value="{{ old('foto') }}>
                                    @error('foto')
                                    <div class="invalid-feedback text-danger">
                                            {{ $message }}
                                    </div>
                                    @enderror

                                </div>




                                  <div class="form-group " >
                                    <div class="modal-footer">

                                        <a href="{{ url('/auth/create/user/create') }}"type="button" class="btn btn-danger text-dark" data-dismiss="modal"> <i class="bi bi-arrow-left-circle-fill"></i> Fila Fali</a>
                                        <button type="submit" class="btn btn-warning">Update</button>
                                      </div>


                                </div>

                                </form>
                                </div>





                </div>

            </div>
        </div>




    </div>
</div>

@stop
