



<div class="left">
    <i type="button" class="lnr lnr-plus-circle" data-toggle="modal" data-target="#exampleModal"></i>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-center">
                <h2 class="modal-title text-center" id="exampleModalLabel">Cria Utiligizador</h2>
                <img src="{{ asset('images/create-user.png') }}" alt="" style="height: 100px;width:100px;border-radius:100%; border: 2px black solid;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                {{--  ida nee Mak Form Husi Sistema  --}}
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

                            <div class="form-group {{ $errors->has('role') ? 'has-error' : '' }}" ad >


                        @error('role')
                        <div class="invalid-feedback text-danger">
                                {{ $message }}
                        </div>
                        @enderror
                        </div>


                        <div class="form-group {{ $errors->has('foto') ? 'has-error' : '' }}" value="{{ old('') }}">
                            <label for="exampleInputEmail1">Foto</label>
                            <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="foto">
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
                {{--  ida nee Mak Ending Husi Sistema  --}}

      </div>

    </div>
    <d
  </div>
