<?php

    $dsn     = 'mysql:host=localhost;dbname=my_site';
    $db_user = 'root';
    $db_pass = '';

    $connection = new PDO($dsn, $db_user, $db_pass);

    $query = $connection->query("SELECT * FROM `news` ORDER BY `id` DESC");

    $data = $query->fetchAll();

    // foreach ($data as $row) {
    //     echo $row['title'];
    //     echo "<br>";
    // }
    
    $insert = $connection
                ->prepare("INSERT INTO `news` (`title`, `img`, `short`, `content`, `created_at`)
                           VALUES (?, ?, ?, ?, NOW())");
    
    $insert->execute([
        'Maqola nomi 1',
        'path/to/img.jpg',
        'Short desc qisqacha matn',
        'Full content maqola texti'
    ]);