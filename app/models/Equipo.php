<?php
class Equipo {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getEquipos() {
        $stmt = $this->pdo->query("SELECT * FROM equipos");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createEquipo($nombre, $ciudad, $deporte, $date_add) {
        $stmt = $this->pdo->prepare("INSERT INTO equipos (nombre, ciudad, deporte, date_add) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$nombre, $ciudad, $deporte, $date_add]);
    }

    public function listEquipoInfo($equipo_id) {
        $stmt = $this->pdo->prepare("SELECT * FROM equipos WHERE id = ?");
        $stmt->execute([$equipo_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCapitan($equipo_id) {
        $stmt = $this->pdo->prepare("SELECT * FROM jugadores WHERE equipo_id = ? AND numero = 1");
        $stmt->execute([$equipo_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>