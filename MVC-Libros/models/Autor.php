<?php
class Autor {
    private $db;

    public function __construct() {
        $this->db = getDB(); // Asumimos que getDB() está definido en config.php
    }

    public function fetchAll() {
        $stmt = $this->db->query("SELECT * FROM autores");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findById($id) {
        $stmt = $this->db->prepare("SELECT * FROM autores WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function save($nombre, $apellido, $nacionalidad) {
        $stmt = $this->db->prepare("INSERT INTO autores (nombre, apellido, nacionalidad) VALUES (?, ?, ?)");
        $stmt->execute([$nombre, $apellido, $nacionalidad]);
    }

    public function update($id, $nombre, $apellido, $nacionalidad) {
        $stmt = $this->db->prepare("UPDATE autores SET nombre = ?, apellido = ?, nacionalidad = ? WHERE id = ?");
        $stmt->execute([$nombre, $apellido, $nacionalidad, $id]);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM autores WHERE id = ?");
        $stmt->execute([$id]);
    }
}
