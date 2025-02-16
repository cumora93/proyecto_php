<?php
require_once 'app/models/Jugador.php';
class JugadorController {
    private $jugador;
    private $equipo;

    public function __construct() {
        global $pdo;
        $this->jugador = new Jugador($pdo);
        $this->equipo = new Equipo($pdo);
    }

    public function index() {
        if (isset($_GET['equipo_id'])) {
            $jugadores = $this->jugador->getJugadoresPorEquipo($_GET['equipo_id']);
            $equipoInfo = $this->equipo->listEquipoInfo($_GET['equipo_id']);
            include 'app/views/equipos/info.php';
        } else{
            header("Location: index.php?controller=equipo");
        }
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->jugador->createJugador($_POST['nombre'], $_POST['numero'], $_POST['equipo_id']);
            header("Location: index.php?controller=jugador&equipo_id=" . $_POST['equipo_id']);
        } else {
            include 'app/views/jugadores/create.php';
        }
    }

    public function delete() {
        $this->jugador->deleteJugador($_GET['id']);
        header("Location: index.php?controller=jugador&equipo_id=" . $_GET['equipo_id']);
    }

    public function edit() {
        $infoJugador = $this->jugador->getJugadorById($_GET['id']);
        include 'app/views/jugadores/edit.php';
    }

    public function submitedit() {
        $this->jugador->editJugador($_POST['id'], $_POST['nombre'], $_POST['numero'], $_POST['equipo_id']);
        header("Location: index.php?controller=jugador&equipo_id=" . $_POST['equipo_id']);
    }
}
?>