<?php

    $id = $_REQUEST['id'];

    $link = new mysqli("localhost","root","","stddb");

    $link -> query("delete from mytab where id = $id");

    $link -> close();

    echo "<br> Record Deleted Successfully ..... ";

?>