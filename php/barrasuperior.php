<ul>
  <div>
    <li class="desplegable">
      <a href="verSeries.php" onclick="javascript:void(0)">Series</a>
      <div class="contenido-desplegable">
        <a href="nuevaSerie.php">Añadir Serie</a>
        <a href="administrarSeries.php?orden=titulo">Administrar Series</a>
      </div>
    </li>
    <li class="desplegable">
      <a href="verPersonajes.php" onclick="javascript:void(0)">Personajes</a>
      <div class="contenido-desplegable">
        <a href="nuevoPersonaje.php">Añadir Personaje</a>
        <a href="administrarPersonajes.php?orden=p.nombre">Administrar Personaje</a>
      </div>
    </li>
    <li class="desplegable">
      <a href="verActores.php" onclick="javascript:void(0)">Actores</a>
      <div class="contenido-desplegable">
        <a href="nuevoActor.php">Añadir Actor</a>
        <a href="administrarActores.php?orden=nombre">Administrar Actores</a>
      </div>
    </li>
    <div style="float:right">
      <li class="desplegable">
        <a onclick="javascript:void(0)">Opciones</a>
        <div class="contenido-desplegable">
          <a href="cargarDatos.php">Cargar datos de prueba</a>
          <a href="eliminarBD.php">Eliminar base de datos</a>
      </div></li>
      <li><a href="salir.php">Salir</a></li>
    </div>
    <div class="buscador" style="float:right">
     <input style="float:right" type="text" name="search" placeholder="Buscar...">
  </div>
  </div>
</ul>