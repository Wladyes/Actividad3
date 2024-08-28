<?php
class Libro {
    private $db;

    public function __construct() {
        $this->db = getDB(); // Asumimos que getDB() está definido en config.php
    }

    public function fetchAll() {
        $stmt = $this->db->query("SELECT * FROM libros");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findById($id) {
        $stmt = $this->db->prepare("SELECT * FROM libros WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function save($titulo, $autor_id, $año_publicacion, $genero) {
        $stmt = $this->db->prepare("INSERT INTO libros (titulo, autor_id, año_publicacion, genero) VALUES (?, ?, ?, ?)");
        $stmt->execute([$titulo, $autor_id, $año_publicacion, $genero]);
    }

    public function update($id, $titulo, $autor_id, $año_publicacion, $genero) {
        $stmt = $this->db->prepare("UPDATE libros SET titulo = ?, autor_id = ?, año_publicacion = ?, genero = ? WHERE id = ?");
        $stmt->execute([$titulo, $autor_id, $año_publicacion, $genero, $id]);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM libros WHERE id = ?");
        $stmt->execute([$id]);
    }
}
