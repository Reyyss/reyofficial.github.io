<!DOCTYPE html>
<html>
    <head>
        <title>Add Data</title>
    </head>
    <body>
        <?php
            //including the database connection file
            include_once("mysqlconfig_connection.php");

            if (isset($_POST['Submit'])) {
                $name = $_POST['name'];
                $date = $_POST['date'];
                $purok = $_POST['purok'];
               // $formtype = $_POST['formtype'];
                //checking empty fields

                
                if(empty($name) || empty ($date) || empty ($purok)) {
                    if(empty($name)) {
                        echo "<font color='red'>Name field is empty.</font><br/>";
                    }
                    if(empty($date)) {
                        echo "<font color='red'>Date field is empty.</font><br/>";
                    }
                    if(empty($purok)) {
                        echo "<font color='red'>Purok field is empty.</font><br/>";
                    }
                    
                    //link to the previous page
                    echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
                }


                else {
                    //if all the fields are filed not (empty)
                    //insert data to database
                    $result = mysqli_query($dbc, "INSERT INTO tblfiles(name,date,purok,formtype) VALUES('$name', '$date', '$purok', 'Cedula')");
                    //display success message
                    echo "<font color='green'>Data added successfully.";
                    echo "<br/><a href='index.php'>View Result</a>";
                }
            }
        ?>
    </body>
</html>

