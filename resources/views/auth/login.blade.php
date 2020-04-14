<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Ingreso al sistema</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description"/>
        <meta content="Coderthemes" name="author"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="authentication-bg authentication-bg-pattern" style="background:#1f3072;background-image: url({{asset('assets/images/bg-pattern.png')}})">
    
        <div class="account-pages mt-2 mb-0">
            <div class="container" style="margin-left: 100px">
                <div class="row">
                    <div class="col-md-8">
                       
                        <img src="{{asset('assets/grupo.jpg')}}" alt="">
                    </div>
                    <div class="col-md-4 text-left">
                        <div class="card bg-pattern">
                            <div class="card-body p-2" style="background:#08136f;filter: drop-shadow(2px 4px 6px black);">
                                <div class="text-center w-75 m-auto">
                                    <h2 style="    margin: 10px 0;
                                    font-weight: 500;
                                    font-family: serif;
                                    color: #fff;">Inicio de sesión</h2>
                                        <span><img src="{{asset('assets/usuario.png')}}" alt="" height="120"></span>
                                </div>
                                <form action="{{route('login')}}" method="POST" style="margin:21.5px">
                                    {{ csrf_field() }}
                                    <div class="form-group mb-3">
                                        <label for="emailaddress" style="color:white">Email</label>
                                        <input class="form-control" type="text" name="email" placeholder="Ingresa  tu email" required value="{{old('email')}}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="password" style="color:white">Password</label>
                                        <input class="form-control" type="password" name="password" placeholder="Ingresa  tu contraseña" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <select class="form-control" data-style="btn-light" name="EMPRESA_id">
                                            @foreach ($empresa as $empresas)
                                                <option class="form-control" value="{{$empresas->EMPRESA_id}}">{{$empresas->EMPRESA_nombre}}</option>
                                            @endforeach
                                        </select>
                                    </div>   
                                    <div class="form-group  text-center">
                                        <button class="btn btn-primary btn-block" type="submit"> Ingresar</button>
                                    </div>
                                </form>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->
                        <!-- end row -->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->
        <footer class="footer footer-alt" style="padding-top: 0px;
        padding-bottom: 0px;
        top: 91%;color:#fff;font-size: 16px!important;font-weight: 700">
            <?php echo date("Y"); ?> &copy; Nept Computer
        </footer>
        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>
        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
    </body>
</html>
