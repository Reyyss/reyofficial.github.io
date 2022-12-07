<?php
    //including the database connection file
    //opx
    include_once("mysqlconfig_connection.php");
    //getting id of the data from url
    $id=$_GET['id'];
    //deleting the row from table
    mysqli_query($dbc,"DELETE FROM tblfiles WHERE id='$id'");
    //redirecting to the display page (index.php in our case)
    header("index.php");
?>