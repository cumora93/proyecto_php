<!DOCTYPE html>
<html>
<head>
    <title>Listado de Equipos</title>
</head>
<body>
    <h1>Equipos</h1>
    <a href="index.php?controller=equipo&action=create">Crear Equipo</a>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Ciudad</th>
            <th>Deporte</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($equipos as $equipo): ?>
        <tr>
            <td><a href="index.php?controller=equipo&action=list_players&equipo_id=<?= $equipo['id'] ?>"><?= $equipo['nombre'] ?></a></td>
            <td><?= $equipo['ciudad'] ?></td>
            <td><?= $equipo['deporte'] ?></td>
            <td>
                
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>