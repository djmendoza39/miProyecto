@extends('layouts.plantilla')

@section('title', 'Seccion Articulos')

@section('cuerpo')

<main class="container-fluid p-5">
    <img class="imgFondo" src="../img/img_login.jpg" alt="">
    <div class="row">
        <div class="col-lg-5 miTop">
            <form>
                <div class="form-group">
                    <label for="act-cedula">Nombre del artículo</label>
                    <input type="text" class="form-control" id="nom-articulo" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">rellene los campos correspondientes</small>
                </div>
                <div class="form-group">
                    <label for="act-cedula">Categoría</label>
                    <input type="text" class="form-control" id="categoria" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">rellene los campos correspondientes</small>
                </div>
                <div class="form-group">
                    <label for="act-nombres">Numero de artículos</label>
                    <input type="text" class="form-control" id="num-articulos">
                </div>

                <div class="form-group">

                    <input  type="submit" class="form-control" id="enviar" value="Registrar">
                    <a href="menu.html">Atras</a>
                    
                </div>
            </form>

        </div>
        <div class="col-lg-7">

            <div class="mi-contenedor-miTabla p-3">
                <h3 class="text-center p-2">Listado de Usuarios</h3>
                <div class="contenedor-tabla table-responsive p-5">
                    <table class="table table-striped table-dark table-bordered">
                        <thead class="">
                            <tr class="">
                                <th scope="col">ARTICULO</th>
                                <th scope="col">CATEGORIA</th>
                                <th scope="col">N° ARTICULOS</th>
                                <th scope="col">PRECIO UNITARIO</th>
                                <th scope="col">TOTAL</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                <td>111-1111-111</td>
                                <td>Victor Jose</td>
                                <td>Contreras Mercado</td>
                                <td>300-55555-555</td>
                                <td>cra 13a 21-45</td>

                            </tr>
                            <tr>

                                <td>111-1111-111</td>
                                <td>Victor Jose</td>
                                <td>Contreras Mercado</td>
                                <td>300-55555-555</td>
                                <td>cra 13a 21-45</td>
                            </tr>
                            <tr>

                                <td>111-1111-111</td>
                                <td>Victor Jose</td>
                                <td>Contreras Mercado</td>
                                <td>300-55555-555</td>
                                <td>cra 13a 21-45</td>
                            </tr>
                            <tr>

                                <td>111-1111-111</td>
                                <td>Victor Jose</td>
                                <td>Contreras Mercado</td>
                                <td>300-55555-555</td>
                                <td>cra 13a 21-45</td>
                            </tr>
                            <tr>

                                <td>111-1111-111</td>
                                <td>Victor Jose</td>
                                <td>Contreras Mercado</td>
                                <td>300-55555-555</td>
                                <td>cra 13a 21-45</td>
                            </tr>
                            <tr>

                                <td>111-1111-111</td>
                                <td>Victor Jose</td>
                                <td>Contreras Mercado</td>
                                <td>300-55555-555</td>
                                <td>cra 13a 21-45</td>
                            </tr>
                            <tr>

                                <td>111-1111-111</td>
                                <td>Victor Jose</td>
                                <td>Contreras Mercado</td>
                                <td>300-55555-555</td>
                                <td>cra 13a 21-45</td>
                            </tr>
                            <tr>

                                <td>111-1111-111</td>
                                <td>Victor Jose</td>
                                <td>Contreras Mercado</td>
                                <td>300-55555-555</td>
                                <td>cra 13a 21-45</td>
                            </tr>
                            <tr>

                                <td>111-1111-111</td>
                                <td>Victor Jose</td>
                                <td>Contreras Mercado</td>
                                <td>300-55555-555</td>
                                <td>cra 13a 21-45</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="contenedor-numPaginas">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="#">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>

        </div>
    </div>


</main>

@endsection