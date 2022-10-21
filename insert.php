<?php

    $id = $_REQUEST['id'];
    $na = $_REQUEST['name'];
    $ag = $_REQUEST['age'];

    $link = new mysqli("localhost","root","","stddb");

    $link -> query("insert into mytab values($id, '$na', $ag)");

    $link -> close();

    echo "<br> Record Inserted Successfully ..... ";

?>