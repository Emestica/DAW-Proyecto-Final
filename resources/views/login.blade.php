<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $pageName }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <style>
        body {
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            min-height: 100vh;
        }

        main {
            flex: 1;
            display: flex;
            align-items: center;
        }

        main div div div form h3 {
            text-align: center;
        }

        footer {
            background-color: #1c1c1c;
            color: #fff;
            width: 100%;
            min-height: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>

    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-9 col-sm-7 col-md-5 col-lg-3 p-0 m-0">
                    <div class="card">

                        <form action="/inicio-sesion" method="post">
                            @if (Session::has('fail'))
                                <div class="alert alert-danger">
                                    {{ Session::get('fail') }}
                                </div>
                            @endif
                            @csrf
                            <div class="card-body m-0">

                                <h3>Iniciar Sesión</h3>

                                <div class="form-group">
                                    <label for="ipt-usuario">Usuario:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-user"></i></div>
                                        </div>
                                        <input id="ipt-usuario" name="usuario" type="text" class="form-control" value="{{ old('usuario') }}">
                                        <span class="text-danger">
                                            @error('usuario') {{ $message }} @enderror
                                        </span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="ipt-contrasenia">Contraseña:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-lock"></i></div>
                                        </div>
                                        <input id="ipt-contrasenia" name="contrasenia"  type="password" class="form-control">
                                        <span class="text-danger">
                                            @error('contrasenia') {{ $message }} @enderror
                                        </span>
                                    </div>
                                </div>

                                <div class="form-group text-center mt3">
                                    <input type="submit" value="Accesar" id="btn-login" class="btn btn-primary">
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <span id="footer-msg"></span>
    </footer>

    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script type="text/javascript">

        $(document).ready(function(){
            $('#footer-msg').html('&copy; ' + (new Date().getFullYear()) + ' Madhouse Productions');
        });

        /*
        $('#btn-login').on('click', function(e){

            let user = $('#ipt-usuario').val();
            let password = $('#ipt-contrasenia').val();

            e.preventDefault();
     
            $.ajax({
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/inicio-sesion',
                data: {
                    username: $('#ipt-usuario').val(),
                    password: $('#ipt-contrasenia').val()
                }
            }).done(function(data){
                console.log(data)
            });
        });
        */
    </script>
</body>

</html>