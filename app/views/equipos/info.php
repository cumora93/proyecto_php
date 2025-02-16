<!DOCTYPE html>
<html>
    <head>
        <title>Listado de Jugadores por equipo</title>
    </head>
    <body>
        <section>
            <h2>Información del equipo</h2>
            <?php foreach ($equipoInfo as $equipo): ?>
                <p><b>Nombre del equipo:</b> <?= $equipo['nombre'] ?></p>
                <p><b>Ciudad:</b> <?= $equipo['ciudad'] ?></p>
                <p><b>Deporte:</b> <?= $equipo['deporte'] ?></p>
            <?php endforeach; ?>
        </section>

        <h1>Jugadores</h1>
        <div class="center">
            <a href="index.php?controller=equipo" class="button">Listar Equipos</a>&nbsp;
            <a href="index.php?controller=jugador&action=create&equipo_id=<?= $_GET['equipo_id'] ?>" class="button">Añadir Jugador</a>
        </div>
        <table border="1">
            <tr>
                <th>Nombre</th>
                <th>Número</th>
                <th>Acciones</th>
            </tr>
            <?php foreach ($jugadores as $jugador): ?>
            <tr>
                <td><?= $jugador['nombre'] ?></td>
                <td><?= $jugador['numero'] ?></td>
                <td>
                    <a href="index.php?controller=jugador&action=edit&id=<?= $jugador['id'] ?>">Editar</a>
                    <a href="index.php?controller=jugador&action=delete&id=<?= $jugador['id'] ?>&equipo_id=<?= $jugador['equipo_id'] ?>">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>