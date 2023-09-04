<?php include "Views/Templates/header.php"; ?>
<div class="row">
    <div class="col-md-5 mx-auto">
        <div class="card">
            <div class="card-header text-center bg-primary">
                <h4 class="text-white">No tienes permisos</h4>
            </div>
            <div class="card-body">
                <a href="<?php echo base_url; ?>Configuracion/admin" class="btn btn-danger btn-block">Regresar</a>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript"> 
//http://localhost/biblioteca/Estudiantes
// Obtenemos la ruta actual después del nombre de dominio
var rutaActual =  window.location.href;
// Obtenemos todos los enlaces del sidebar
var enlacesSidebar = document.querySelectorAll(".app-menu a");
// Iteramos sobre los enlaces para activar el menú correspondiente
enlacesSidebar.forEach(function(enlace) {
  // Obtenemos la ruta del enlace actual del sidebar
  var rutaEnlace = enlace.getAttribute("href");
  // Comparamos si la ruta del enlace coincide con la ruta actual
  if (rutaEnlace === rutaActual) {
    // Si coincide, activamos el menú (puedes aplicar estilos o clases CSS aquí)
    enlace.classList.add("active");
  } else {
    // Si no coincide, desactivamos el menú (puedes eliminar estilos o clases CSS aquí)
    enlace.classList.remove("active");
  }
});

</script>
<?php include "Views/Templates/footer.php"; ?>