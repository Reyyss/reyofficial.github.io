<?php
    //including the database connection file
    include_once("mysqlconfig_connection.php");
    
    if(isset($_POST['Update'])) {
        $id = $_POST['id'];
       // echo $_POST['code'];
       // echo $_POST['name'];
        $name = $_POST['name'];
        $date = $_POST['date'];
        $purok = $_POST['purok'];
        $formtype = $_POST['formtype'];
        
        //checking empty fields
    }
    if(empty($name) || empty ($date) || empty ($purok) || empty ($formtype)) {
        //opx
        if(empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        if(empty($date)) {
            echo "<font color='red'>Date field is empty.</font><br/>";
        }
        if(empty($purok)) {
            echo "<font color='red'>Purok field is empty.</font><br/>";
        }
        if(empty($formtype)) {
            echo "<font color='red'>Form type field is empty.</font><br/>";
        }
    }
    else {
        //updating the table
        mysqli_query($dbc, "UPDATE tblfiles SET name='$name', date='$date', purok='$purok', formtype='$formtype'WHERE id='$id'");
        //redirecting to the display page. In our case, it is index.php
        header("index.php");
    }
?>