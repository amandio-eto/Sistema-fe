<html lang="en"><head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Porta Fundu Esperanca </title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">


    <!-- Custom styles for this template-->
    <link href="{{ asset('login/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body class="" style="backgroud:#E8E5E4 ;">

    {{--  ida nee Mak Nav Bar  --}}

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="#">Sistema Fundu Esperanca </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">

          </div>
        </div>
      </nav>

{{--  ida nee Mak end Husi Nav Bar  --}}

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-md-5" style="margin-top:120px;">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">

                            <div class="col-md">
                                <div class="p-5 ">
                                   <div class="img text-center">
                                    <img src="{{ asset('images/user.png') }}" alt="" style="height:80px;" class="text-center">
                                   </div>
                                    <div class="text-center mt-2">
                                        <h1 class="h4 text-gray-900 mb-4" style="font-weight: 1000;">Login </h1>
                                        <p><small>Porta Sistema Fundu Esperanca</small></p>
                                    </div>
                                    <form class="user" action="/auth/post" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="">Email <i class="bi bi-envelope"></i></label>
                                            <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email." name="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Password <i class="bi bi-key"></i></label>
                                            <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
                                        </div>
                                        <div class="form-group">

                                        </div>
                                        <a href="submit" class="btn btn-success btn-user btn-block">
                                            <button class="bi bi-box-arrow-in-right"></button> Login
                                        </a>


                                    </form>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>



</body></html>
