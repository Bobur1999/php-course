<?php
    //      fopen(file_name.format, mode);
    $handler = fopen('my_file.txt', 'w'); // r=read, w=write

    $data = "Hello world from file_write.php";

    fwrite($handler, $data);

    //fclose($handler)
    fclose($handler);