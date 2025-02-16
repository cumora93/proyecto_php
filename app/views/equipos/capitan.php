<!DOCTYPE html>
<html>
    <head>
        <title>Capitan de equipo</title>
    </head>
    <body>
        <h1>Capitan de equipo</h1>
        <div class="center">
            <a href="index.php?controller=equipo" class="button">Listar Equipos</a>&nbsp;
            <a href="index.php?controller=equipo&action=info&equipo_id=<?= $_GET['equipo_id'] ?>" class="button">Listar Jugadores</a>&nbsp;
        </div>
        <br>
        <section>
        <?php if(isset($capitan) && $capitan){ ?>
            <?php foreach ($capitan as $c): ?>
                <h4><?= $c['nombre'] ?></h4>
                <p>Numero <?= $c['numero'] ?></p>
            <?php endforeach; ?>
        <?php } else{?>
            Este equipo aún no tiene un capitan
        <?php };?>
        </section>
    </body>
</html>