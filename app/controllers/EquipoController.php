<?php
require_once 'app/models/Equipo.php';
class EquipoController {
    private $equipo;
    private $jugador;

    public function __construct() {
        global $pdo;
        $this->equipo = new Equipo($pdo);
        $this->jugador = new Jugador($pdo);
    }

    public function index() {
        $equipos = $this->equipo->getEquipos();
        include 'app/views/equipos/list.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->equipo->createEquipo($_POST['nombre'], $_POST['ciudad'], $_POST['deporte'], $_POST['date_add']);
            header("Location: index.php?controller=equipo");
        } else {
            include 'app/views/equipos/create.php';
        }
    }

    public function info() {
        $equipoInfo = $this->equipo->listEquipoInfo($_GET['equipo_id']);
        $jugadores = $this->jugador->getJugadoresPorEquipo($_GET['equipo_id']);
        include 'app/views/equipos/info.php';
    }

    public function capitan() {
        $capitan = $this->equipo->getCapitan($_GET['equipo_id']);
        include 'app/views/equipos/capitan.php';
    }
}
?>