<!DOCTYPE html>
<html>
<head>
    <title>Listado de Jugadores por equipo</title>
</head>
<body>
    <h1>Equipos</h1>
    <a href="index.php?controller=equipo">Listar Equipos</a>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Ciudad</th>
            <th>Deporte</th>
        </tr>
        <?php foreach ($equipoInfo as $equipo): ?>
        <tr>
            <td><a href="index.php?controller=equipo&action=list_players&equipo_id=<?= $equipo['id'] ?>"><?= $equipo['nombre'] ?></a></td>
            <td><?= $equipo['ciudad'] ?></td>
            <td><?= $equipo['deporte'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>