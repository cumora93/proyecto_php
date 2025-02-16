<?php
class Jugador {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getJugadoresPorEquipo($equipo_id) {
        $stmt = $this->pdo->prepare("SELECT * FROM jugadores WHERE equipo_id = ? ORDER BY numero ASC");
        $stmt->execute([$equipo_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createJugador($nombre, $numero, $equipo_id) {
        $stmt = $this->pdo->prepare("INSERT INTO jugadores (nombre, numero, equipo_id) VALUES (?, ?, ?)");
        return $stmt->execute([$nombre, $numero, $equipo_id]);
    }

    public function deleteJugador($id) {
        $stmt = $this->pdo->prepare("DELETE FROM jugadores WHERE id = ?");
        return $stmt->execute([$id]);
    }

    public function editJugador($id, $nombre, $numero, $equipo_id) {
        $stmt = $this->pdo->prepare("UPDATE jugadores SET nombre = ?, numero = ?, equipo_id = ? WHERE id = ?");
        $stmt->execute([$nombre, $numero, $equipo_id, $id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getJugadorById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM jugadores WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>