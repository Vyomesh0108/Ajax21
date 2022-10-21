<?php

    $link = new mysqli("localhost","root","","stddb");
    $res = $link -> query("select * from mytab");

    $data = "";

    while($row = $res -> fetch_row())
    {
        $data = $data."$row[0], $row[1], $row[2] <br>";
    }

    $link -> close();

    echo $data;

?>