<!DOCTYPE html>
<html>
    <head>
        <title>Listado de Equipos</title>
    </head>
    <body>
        <h1>Equipos</h1>
        <div class="center">
            <a href="index.php?controller=equipo&action=create" class="button">Crear Equipo</a>
        </div>
        <table border="1">
            <tr>
                <th>Nombre</th>
                <th>Ciudad</th>
                <th>Deporte</th>
                <th>Acciones</th>
            </tr>
            <?php foreach ($equipos as $equipo): ?>
            <tr>
                <td><?= $equipo['nombre'] ?></td>
                <td><?= $equipo['ciudad'] ?></td>
                <td><?= $equipo['deporte'] ?></td>
                <td>
                    <a href="index.php?controller=equipo&action=info&equipo_id=<?= $equipo['id'] ?>" class="info">+&nbsp;&nbsp;<img src="public/img/info.svg" width="30"></a><br/>
                    <a href="index.php?controller=equipo&action=capitan&equipo_id=<?= $equipo['id'] ?>">Ver Capitan</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>