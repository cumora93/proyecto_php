<!DOCTYPE html>
<html>

<head>
    <title>Crear Jugador</title>
</head>

<body>
    <h1>Nuevo Jugador</h1>
    <div class="center">
        <a href="index.php?controller=equipo&action=info&equipo_id=<?= $_GET['equipo_id'] ?>" class="button">Listar Jugadores</a>&nbsp;
        <a href="index.php?controller=equipo" class="button">Listar Equipos</a>
    </div>
    <form method="POST" action="index.php?controller=jugador&action=create">
        <input type="hidden" name="equipo_id" value="<?= $_GET['equipo_id'] ?>">
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br>
        <label>Número:</label>
        <input type="number" name="numero"><br>
        <button type="submit" class="button">Guardar</button>
    </form>
</body>

</html>