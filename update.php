<?php

    $id = $_REQUEST['id'];
    $na = $_REQUEST['name'];
    $ag = $_REQUEST['age'];

    $link = new mysqli("localhost","root","","stddb");

    $link -> query("update mytab set na = '$na', ag = $ag where id = $id");

    $link -> close();

    echo "<br> Record Updated Successfully ..... ";

?>