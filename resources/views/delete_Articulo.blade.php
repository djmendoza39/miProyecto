@extends('layouts.plantilla')

@section('title', 'dashboar')
    
@section('cuerpo')

<main class="container-fluid p-5">
    <img class="imgFondo"src="../img/ferreteria.png" alt="imagen seccion articulos">
    <div class="row">
        <div class="col-lg-5 miTop">
            <form>
                <div class="form-group">
                    <label for="act-cedula">Escoja el producto a eliminar</label>
                    <div class="dropdown">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                          Varilla 7mm
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Cemento Argos</a>
                          <a class="dropdown-item" href="#">Gravilla</a>
                          <a class="dropdown-item" href="#">Arena</a>
                          <a class="dropdown-item" href="#">Varilla 7mm</a>
                        </div>
                      </div> 
                </div>
                <div class="form-group">
                    <label for="act-cedula">¿Cuantos artículos desea eliminar?</label>
                    <input type="text" class="form-control" id="categoria" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">rellene los campos correspondientes</small>
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

                                <td>Cemento</td>
                                <td>Argos</td>
                                <td>300 unidades</td>
                                <td>$25000</td>
                                <td>$100000</td>

                            </tr>
                            <tr>

                                <td>Gravilla</td>
                                <td>----</td>
                                <td>14 mts</td>
                                <td>$35000</td>
                                <td>$45000</td>
                            </tr>
                            <tr>

                                <td>Arena</td>
                                <td>El socio</td>
                                <td>20 mts</td>
                                <td>$10000</td>
                                <td>$35000</td>
                            </tr>
                            <tr>

                                <td>Varilla</td>
                                <td>Argos</td>
                                <td>100 mts</td>
                                <td>$100000/td>
                                <td>1000000</td>
                            </tr>
                            <tr>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
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