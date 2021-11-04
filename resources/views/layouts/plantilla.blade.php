<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    
    <link rel="stylesheet" href="{{asset('css/estilos-login.css')}}">
    <link rel="stylesheet" href="{{asset('css/agregarArticulos.css')}}">
    <link rel="stylesheet" href="{{asset('css/eliminarArti.css')}}">
    <link rel="stylesheet" href="{{asset('css/agregarArticulos.css')}}">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    
    

</head>
<body>
    <header>
        <div class="">
            <nav class="navbar navbar-expand-sm navbar-light bg-light">
                <a class="navbar-brand" href="#"><img src="img/LOGO2.png" alt=""></a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 justify-content-center mi-estilo-ul-nav">
                        <li class="nav-item active">
                           <input class="botones" type="submit" onclick="mostrarVentas()" value="VENTAS">
                        </li>
                        <li class="nav-item">
                            <input class="botones" type="submit" onclick="mostrarClientes()" value="CLIENTES">
                        </li>
                        <li class="nav-item">
                            <input class="botones" type="submit" onclick="mostrarInventario()" value="INVENTARIO">
                        </li>
                        <li class="nav-item mt-3">
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button class="botones" type="submit">Salir</button>
                            </form>
                            
                        </li>

                    </ul>
                    <div class=" my-2 my-lg-0">
                       
                    </div>
                </div>
            </nav>
        </div>

    </header>

    <div class="contenedor-contenido-web">
        @yield('cuerpo') 
    </div>

    <footer class="container-fluid bg-dark mi-footer mt-5">
        <div class="container text-light">
            <div class="row text-center p-5">
                <div class="col-lg-12">
                    <h3>FERROTODO</h3>
                </div>
                <div class="col-lg-12">
                    <address>@FERROTODO - 2021</address>
                </div>
                <div class="col-lg-12">
                    <div class="contenedor-reder">
                        <i class="bi bi-facebook p-2">Facebook</i>
                        <i class="bi bi-istagram p-2">Instagram</i>
                        <i class="bi bi-twitter p-2">twitter</i>
                    </div>
                </div>
            </div>
        </div>
        
    </footer>


    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <script src={{asset('js/style.js')}}></script>
    
</body>
</html> 