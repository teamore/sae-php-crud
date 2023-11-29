<?php
    include_once('./inc/db.php');
    $stmt = $pdo->query("SELECT * FROM `blog`");
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo "<table style='border: solid 1px black;'>";
    foreach($results as $result) {
        echo "<tr><td>";
        echo $result['title'];
        echo "</td><td>";
        echo $result['author'];
        echo "</td><td>";
        echo $result['updated_at'];
        echo "</td></tr>";
    }

    echo "</table>";