<?php
    //      fopen(file_name.format, mode);
    $handler = fopen('test.txt', 'r'); // r=read, w=write

    $data = fread($handler, 10000);

    var_dump($data);
    //fclose($handler)
    fclose($handler);