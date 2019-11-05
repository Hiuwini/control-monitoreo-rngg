<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio Sesion Control y Monitoreo RNGG</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/styles/css/themes/lite-purple.min.css')}}">
</head>

<body>
    <div class="auth-layout-wrap" style="background-image: url({{asset('assets/images/photo-wide-4.jpg')}})">
    <div class="card o-hidden col-md-4">
    <div class="p-4">
    <h1 class="mb-3 text-18">Sign In</h1>
                            
                            <form class="needs-validation" novalidate method="POST" action="{{ url('/signIn/authenticate') }}">
                            {{ csrf_field() }}
                        
                                <div class="form-group">
                                    <label for="username">Usuario: </label>
                                    <input id="username" name="username" class="form-control form-control-rounded" type="text">
                                </div>
                                <div class="form-group">
                                    <label for="password">Contraseña: </label>
                                    <input id="password" name="password" class="form-control form-control-rounded" type="password">
                                </div>
                                <button type="submit" class="btn btn-rounded btn-primary btn-block mt-2">Iniciar Sesion</button>

                            </form>

                            </div>
    </div>
    </div>

    <script src="{{asset('assets/js/common-bundle-script.js')}}"></script>

    <script src="{{asset('assets/js/script.js')}}"></script>
</body>

</html>
