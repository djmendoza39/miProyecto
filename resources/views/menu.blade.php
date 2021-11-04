@extends('layouts.plantilla')
@section('title', 'dashboar')

@section('cuerpo')
    
    <section class="container-fluid container-inventario pt-5" id="miVenta">
        <div class="row">
            <div class="col-lg-4">
                <h3 class="text-center mb-5">FERRETARIA FERROTODO</h3>
                <p>BARRIO PABLO VI</p>
                <p>ATENDIO <span>________</span> </p>
                <p>C.C <span>___________</span> </p>
                <div class="mi-botonera">
                    <a href="" class="mi-estilo-botones">BUSCAR CLIENTE</a>
                    <a href="" class="mi-estilo-botones">BUSCAR PRODUCTO</a>
                    <a href="" class="mi-estilo-botones">MODIFICAR VENTAS</a>
                    <a href="" class="mi-estilo-botones">ELIMINAR PRODUCTO</a>
                    <a href="" class="mi-estilo-botones">IMPRIMIR FACTURA</a>

                </div>

            </div>
            <div class="col-lg-8 mi-img-bg-ventas">
                <div class="container p-3">
                    <h4 class="text-center">PRODUCTOS EN EL CARRITO </h4>
                    <div class="listado row justify-content-center align-items-center">

                        <ul>
                            <li>Cemento</li>
                            <li>Arena</li>
                            <li>Triturado</li>
                            <li>Bloques 09</li>
                            <li>Varillas 5mm</li>
                        </ul>
                        <ul>
                            <li> ------------------------------------------------------- </li>
                            <li> ------------------------------------------------------- </li>
                            <li> ------------------------------------------------------- </li>
                            <li> ------------------------------------------------------- </li>
                            <li> ------------------------------------------------------- </li>
                        </ul>

                        <ul>
                            <li>20 unidades</li>
                            <li>1 metro</li>
                            <li>1 metro</li>
                            <li>100 unidades</li>
                            <li>20 unidades</li>
                        </ul>
                    </div>


                </div>


            </div>
        </div>

    </section>

    <section class="container container-registro p-5" id="miRegistro" style="display: none;">
        <div class="row">
            <div class="col-lg-6 contenedor-registro">
                <form action="/action_page.php" class="was-validated">
                    <div class="form-group">
                        <label for="uname">Nombre o Empresa</label>
                        <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname"
                            required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Por favor rellene los campos.</div>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Ingrese Nit o identificación</label>
                        <input type="text" class="form-control" id="pwd" placeholder="Nit o C.C" name="pswd" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Por favor rellene los campos.</div>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Tipo de persona</label>
                        <br>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                despliegue...
                            </button>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Nombre propio</a>
                                <a class="dropdown-item" href="#">Empresa</a>
                            </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="pwd">Dirección</label>
                        <input type="text" class="form-control" id="pwd" placeholder="Ingrese dirección o ubicación"
                            name="pswd" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Por favor rellene los campos.</div>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Ingrese su número telefónico</label>
                        <input type="text" class="form-control" id="pwd" placeholder="Telefóno de contacto" name="pswd"
                            required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Por favor rellene los campos.</div>
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember" required> Acepta el tratado de
                            datos.
                            <div class="valid-feedback">Valido.</div>
                            <div class="invalid-feedback">Por favor confirme.</div>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </form>
            </div>
            <div class="col-lg-6 contenedor-imagen-cliente">

            </div>

        </div>
    </section>

    <section class="container container-inventario pt-5" id="miInventario" style="display: none;">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="text-center mb-5">INVENTARIO</h3>
                <div class="mi-botonera">
                    <a href="agregarArticulo.html" class="mi-estilo-botones">AGREGAR ARTICULO</a>
                    <a href="eliminarArticulo.html" class="mi-estilo-botones">ELIMINAR ARTICULO</a>
                    <a href="" class="mi-estilo-botones">MODIFICAR ARTICULO</a>
                </div>

            </div>
            <div class="col-lg-6 mi-img-bg-inventario">

            </div>
        </div>

    </section>

@endsection
