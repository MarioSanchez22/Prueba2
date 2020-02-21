<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Custom Login</title>
@include('layouts.estilos')
</head>
<body>
<hr>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 class="panel-title">
                        Acceso a la Aplicación
                    </h1>
                </div>
                <div class="panel-body">
                <form action="{{route('login')}}" method="POST">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <label for="email">Email:</label>
                        <input class="form-control" type="email" name="email" placeholder="Ingresa  tu email" required value="{{old('email')}}">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input class="form-control" type="password" name="password" placeholder="Ingresa  tu contraseña" required>
                        </div>
                        <button class="btn btn-primary btn-block">Acceder</button>
                    </form>
                </div>
            </div>

        </div>

    </div>

</body>
</html>
