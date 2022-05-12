@section('header')
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@stop
@extends('master.master')



@section('content')

    <div class="main-content">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
    <span class="lnr lnr-users"></span> Cria User
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h3 class="modal-title" id="exampleModalLabel">Create Utiligador Foun</h3>
        <div class="img">
            <img src="{{ asset('user/icon user.png') }}" width="100px;" alt="">
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ url('/auth/create/user/cria') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="exampleInputEmail1">Naran Completo</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name"" value="{{ old('name') }}">
                @error('name')
                <div class="invalid-feedback text-danger">
                    {{ $message }}
                </div>
                @enderror
                </div>


                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{ old('email') }}">

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
                            <option value="admin">Admin</option>
                            <option value="user">User</option>

                        </select>


                    @error('role')
                    <div class="invalid-feedback text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                </div>


                <div class="form-group {{ $errors->has('foto') ? 'has-error' : '' }}" >
                    <label for="exampleInputEmail1">Foto</label>
                    <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="foto" value="{{ old('foto') }}>
                    @error('foto')
                    <div class="invalid-feedback text-danger">
                            {{ $message }}
                    </div>
                    @enderror

                </div>

                    <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Save changes</button>
                    </div>
        </form>
      </div>

    </div>
  </div>
</div>

                    </div>
                </div>
                <div class="row">

            <div class="row " style="margin-top:20px;">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                          <i class="fa fa-check-circle"></i>  {{ session('success') }}
                    </div>
                    @endif

                <div class="col-md ">
                    <h3 class="text-center"> UTILIZADORES</h3>
                    <table class="table table-hover">
                        <thead>
                          <tr style="background:rgb(0, 183, 255);color:white;" >
                            <th scope="col"><span class="lnr lnr-book"></span> Nu</th>
                            <th scope="col">
                                <span class="lnr lnr-picture"></span>
                                 Foto</th>
                            <th scope="col"><span class="lnr lnr-user"></span> Naran Completo</th>
                            <th scope="col"><span class="lnr lnr-envelope"></span> E-Mail</th>
                            <th scope="col">
                                <span class="lnr lnr-users"></span>
                                Role</th>
                            <th scope="col">
                                <span class="lnr lnr-pushpin"></span>
                                 Status Account</th>
                            <th scope="col"><i class="fa fa-calendar"></i> Status Crete</th>
                            <th scope="col">
                                <span class="lnr lnr-menu-circle"></span>
                                 Aksaun</th>

                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $user)


                          <tr border="">
                            <td >{{ $loop->iteration }}</td>
                            <td><img src="{{ asset('images/'.$user->foto) }}" alt="" style="width: 40px;height:40px;border:1px solid black;"></td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td class="badge badge-success">{{ $user->role }}</td>
                            <td>
                                <input type="checkbox" data-toggle="toggle" data-on="Hamate" data-off="Hamoris">

                            <td>{{ $user->created_at->format('D,F Y') }} <span> <small class="text-waring">{{ $user->created_at->diffForHumans()}} </small></span></td>
                            <td>
                                <a  href="{{ url('/auth/create/user/edit/'.$user->id) }}"> <i class="lnr lnr-pencil text-warning"></i> </a>
                                <a href="{{ url('/auth/create/user/delete/'.$user->id) }}"> <i class="lnr lnr-trash text-danger"></i> </a>

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

{{--  ida nee Mak Footer  --}}
@section('footer')
<script>
    $(function() {
      $('#toggle-two').bootstrapToggle({
        on: 'Enabled',
        off: 'Disabled'
      });
    })
  </script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

@stop

