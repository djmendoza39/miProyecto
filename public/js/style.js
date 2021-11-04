
function mostrarVentas(){
    document.getElementById("miVenta").style.display = "";
    document.getElementById("miRegistro").style.display = "none";
    document.getElementById("miInventario").style.display = "none";
}
function mostrarClientes(){
    document.getElementById("miVenta").style.display = "none";
    document.getElementById("miRegistro").style.display = "";
    document.getElementById("miInventario").style.display = "none";
}
function mostrarInventario(){
    document.getElementById("miVenta").style.display = "none";
    document.getElementById("miRegistro").style.display = "none";
    document.getElementById("miInventario").style.display = "";
}