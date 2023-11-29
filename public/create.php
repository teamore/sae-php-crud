<?php
    include_once('./inc/db.php');
    if ($_POST) {
        $title = $_POST['title'];
        $author = $_POST['author'];
        $content = $_POST['content'] ?? 'Lorem ipsum.';
        $stmt = $pdo->prepare("
        INSERT INTO `blog` (`title`, `author`, `content`, `created_at`, `updated_at`) 
        VALUES 
        (:title, :author, :content, :created_at, :updated_at)
        ");
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':author', $author);
        $stmt->bindParam(':content', $content);
        $stmt->bindValue(':created_at', date('Y-m-d H:i:s'));
        $stmt->bindValue(':updated_at', date('Y-m-d H:i:s'));
        $stmt->execute();
        header("Location: /");
    }
