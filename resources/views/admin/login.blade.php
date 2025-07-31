<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" >
    <!-- JavaScript Bundle with Popper -->
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Login</title>
</head>
<body>
    <div class="container col-11 col-md-9" id="form-container">
        
        <div class="row align-items-center gx-5">
            <div class="col-md-6 order-md-2">
                <h2>Faça o login para continuar</h2>
                <form action="{{ route('admin.login.request') }}" method="POST">@csrf
                    @if(Session::has('error_message'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Erro:</strong> {{ Session::get('error_message') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Erro:</strong> {!! $error !!}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endforeach
                    <div class="form-floating mb-3">                        
                        <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email" @if(isset($_COOKIE["email"])) value="{{ $_COOKIE['email'] }}" @endif>
                        <label for="email" class="form-label">Digite seu email</label>
                    </div>
                    <div class="form-floating mb-3">                        
                        <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha" @if(isset($_COOKIE["password"])) value="{{ $_COOKIE['password'] }}" @endif>
                        <label for="password" class="form-label">Digite sua senha</label>
                    </div>
                    <div class="form-check mb-3">
                        <input type="checkbox" name="remember" class="form-check-input" id="remember" @if(isset($_COOKIE["email"])) checked="" @endif>
                        <label for="remember" class="form-check-label">Lembrar de mim</label>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Entrar">
                </form>
            </div>
            <div class="col-md-6 order-md-1">
                <div class="col-12">
                <img src="{{ asset('img/sign_in.svg') }}" alt="Hello New Customer" class="img-fluid">
                </div>
                <div class="col-12" id="link-container">
                <a href="register.html">Ainda não tenho cadastro</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>