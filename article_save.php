<?php
    require 'config.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $title = $_POST['title'];
        $content = $_POST['content'];

        $sql = "INSERT INTO articles (title, content) VALUES (?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$title, $content]);

        echo "Artykuł został dodany!";
    }
?>