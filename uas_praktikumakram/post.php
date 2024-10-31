<?php
// File: Post.php

require_once 'db.php';

class Post {
    public function getPosts($category_id = null) {
        global $pdo;
        $sql = "SELECT * FROM posts";
        if ($category_id) {
            $sql .= " WHERE category_id = :category_id";
        }
        $sql .= " ORDER BY created_at DESC LIMIT 6";
        
        $stmt = $pdo->prepare($sql);
        if ($category_id) {
            $stmt->bindParam(':category_id', $category_id);
        }
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    // Fungsi lain untuk menambah, mengedit, menghapus artikel dapat ditambahkan di sini
}
?>
