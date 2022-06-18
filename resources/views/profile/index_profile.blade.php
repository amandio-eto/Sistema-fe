@extends('master.master')

@section('title','Profile')

@section('content')

<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="main-content">
                @if(session('success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <i class="fa fa-check-circle"></i> {{ session('success') }}
                </div>
             @endif
                <div class="panel panel-profile">

				<div class="container-fluid">


                    {{--  ida nee Mak Modal 2  --}}
                    <!-- Modal -->
                    <div class="modal fade" id="profile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-center" id="exampleModalLabel">Upload Foto </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ url('/myprofile/foto') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <label for=""> Favor Upload Foto :</label>
                                <input type="file" name="foto" id="">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancela</button>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>

                         </form>
                        </div>
                    </div>
                    </div>

                    {{--  ida nee Mak Roha Husi Modal 2  --}}

                        {{--  ida nee mak Modal ba Iha Troka Password  --}}
                        <!-- Button trigger modal -->


                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title text-center" id="exampleModalLabel">Troka Password <i class="bi bi-lock"></i></h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ url('/myprofile') }}" method="POST">
                                                    @csrf


                                                <div class="form-group ">
                                                <label for="exampleInputpassword1" >Password Tuan</label>
                                                <input type="password" class="form-control" id="exampleInputpassword1" aria-describedby="passwordHelp" name="old_password">

                                                  @error(session('error'))
                                                   <small class="text-danger"> {{ session('error') }}</small>
                                                   @enderror


                                              </div>
                                              <div class="form-group">
                                                <label for="exampleInputpassword2">Password Foun</label>
                                                <input type="password" class="form-control" id="exampleInputpassword2" aria-describedby="passwordHelp" name="password">
                                                @error(session('password'))
                                                <div class="alert alert-danger mt-1" role="alert"
                                                    <small class="text-denger"> {{ $message }}</small>
                                                 </div>
                                                @enderror

                                              </div>
                                              <div class="form-group">
                                                <label for="exampleInputpassword2">Confirma Password</label>
                                                <input type="password" class="form-control" id="exampleInputpassword2" aria-describedby="passwordHelp" name="password_confirmation">
                                                @error(session('password_confirmation'))
                                                <div class="alert alert-danger mt-1" role="alert">
                                                   <small class="text-denger"> {{ $message }}</small>
                                                </div>
                                                @enderror

                                              </div>



                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancela</button>
                                            <button type="submit" class="btn btn-success">Troka</button>
                                        </div>
                                    </div>
                                </form>
                                    </div>
                                    </div>




                        {{--  ida nee mak rohan Husi Modal Troka Passwor   --}}
						<div class="clearfix">
							<!-- LEFT COLUMN -->
							<div class="profile-left">
								<!-- PROFILE HEADER -->
								<div class="profile-header">

									<div class="profile-main">
									<img src="{{ asset('images/'.Auth::user()->foto) }}"
                                        class="img-circle" alt="Avatar" style="width: 100px;height:100px;possition:absolute;top:10px;left:10px;border: 2px solid black;" class="img-circle" alt="Avatar">
										<h3 class="name">{{ $user->name }}</h3>
                                        <span class="online-status status-available">{{$user->role }}</span>
									</div>
									<div class="profile-stat">
										<div class="row">
											{{--  <div class="col-md-4 stat-item">
											<span></span>
											</div>  --}}

										</div>
									</div>
								</div>
								<!-- END PROFILE HEADER -->
								<!-- PROFILE DETAIL -->
								<div class="profile-detail">
									<div class="profile-info">

										<h4 class="heading text-center">Detalho  Husi Utilizador </h4>

										<ul class="list-unstyled list-justify">
											<li style="text-transform: uppercase">Naran <span>{{ $user->name }}</span></li>
											<li>Email : <span>{{$user->email }}</span></li>
											<li>Data <span>{{ date('d-F-Y',strtotime($user->created_at)) }}</span></li>
										</ul>
                                        <div class="text-center">
                                            <button type="button" class="btn btn-primary" style="border-radius:20px;"data-toggle="modal" data-target="#profile">Upload Profile</button>
                                        </div>
									</div>


								</div>
								<!-- END PROFILE DETAIL -->
							</div>
							<!-- END LEFT COLUMN -->
							<!-- RIGHT COLUMN -->
							<div class="profile-right ">
                                <button type="button" class="btn btn-danger text-left" data-toggle="modal" data-target="#exampleModal">
                                    Troka Passwor <i class="bi bi-lock"></i>
                                </button>
								<h4 class="heading text-center">Profile Utilizador </h4>

                                <div class="row">
                                    <div class="col text-center mb-5" style="margin-top: 50px;margin-bottom:50px;">
                                        {!! $qrcode->backgroundColor(106, 90, 205)->size(200)->generate(auth()->user()->password) !!}

                                    </div>


                                </div>



							</div>
							<!-- END RIGHT COLUMN -->
						</div>
					</div>
				</div>
			</div>






        </div>
    </div>
</div>


@stop

{{--  ida nee mak footer Husi Sistema  --}}
@section('footer')

@stop
{{--  ida nee Mak Ending Husi Profile   --}}
