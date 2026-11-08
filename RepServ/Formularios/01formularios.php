<?php 
if (isset($_POST['submit'])) {
    $nombre    = $_POST['nombre'] ?? '';
    $apellido  = $_POST['apellido'] ?? '';
    $password  = $_POST['password'] ?? '';
    $tipo      = $_POST['tipo'] ?? '';
    $deportes  = $_POST['deporte'] ?? [];
    $gen       = $_POST['gen'] ?? '';
    $edad      = $_POST['edad'] ?? '';
    $comt      = $_POST['comt'] ?? '';
    $color     = $_POST['color'] ?? '';
    $oculto    = $_POST['oculto'] ?? '';
    
    $referer   = $_SERVER['HTTP_REFERER'] ?? 'Desconocido';

    echo "<h3>Información enviada:</h3>";
    echo "<p><strong>HTTP_REFERER:</strong> " . htmlspecialchars($referer) . "</p>";
}
?>

<form action="" method="post">fdsfsd¡
    <input type="text" placeholder="Nombre" name="nombre">
    <input type="text" placeholder="Apellido" name="apellido">
    <input type="password" name="password" placeholder="Contraseña">    
    <select name="tipo">
        <option value="alumno">Alumno</option>
        <option value="profesor">Profesor</option>
    </select>    
    <section>
        <p>Actividades favoritas (mínimo 4):</p>
        <label><input type="checkbox" name="deporte[]" value="voley"> Voley</label>
        <label><input type="checkbox" name="deporte[]" value="basquet"> Basquet</label>
        <label><input type="checkbox" name="deporte[]" value="tenis"> Tenis</label>
        <label><input type="checkbox" name="deporte[]" value="equitacion"> Equitación</label>
        <label><input type="checkbox" name="deporte[]" value="ajedrez"> Ajedrez</label>
    </section>    
    <div>
        <label><input type="radio" name="gen" value="M"> M</label>
        <label><input type="radio" name="gen" value="F"> F</label>
    </div>
    <input type="number" name="edad" min="18" max="99" placeholder="Edad (18-99)">    
    <textarea name="comt" placeholder="Comentarios"></textarea>
    <input type="color" name="color">    
    <input type="hidden" name="oculto" value="prueba">
    
    <button type="submit" name="submit">Enviar</button>
</form>

<style>
    * {
        background-color: black;
        color: white;
    }
</style>