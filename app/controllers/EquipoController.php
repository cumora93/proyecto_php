<?php
require_once 'app/models/Equipo.php';
class EquipoController {
    private $equipo;

    public function __construct() {
        global $pdo;
        $this->equipo = new Equipo($pdo);
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

    public function list_players() {
        $equipoInfo = $this->equipo->listEquipoInfo($_GET['equipo_id']);

        include 'app/views/equipos/list_players.php';
    }
}
?>