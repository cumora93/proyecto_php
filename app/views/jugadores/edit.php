<!DOCTYPE html>
<html>
    <head>
        <title>Editar Jugador</title>
    </head>
    <body>
        <h1>Editar Jugador</h1>
        <form method="POST" action="index.php?controller=jugador&action=submitedit">
            <input type="hidden" name="equipo_id" value="<?= $infoJugador[0]['equipo_id'] ?>">
            <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
            <label>Nombre:</label>
            <input type="text" name="nombre" value="<?= $infoJugador[0]['nombre'] ?>"><br>
            <label>Número:</label>
            <input type="number" name="numero" value="<?= $infoJugador[0]['numero'] ?>"><br>

            <button type="submit" class="button">Guardar</button>
            <a href="index.php?controller=equipo&action=info&equipo_id=<?= $infoJugador[0]['equipo_id'] ?>" class="cancel">Cancelar</a>
        </form>
    </body>
</html>