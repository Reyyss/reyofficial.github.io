<?php
    //including the database connection file
    include_once("mysqlconfig_connection.php");
    //including the fetch file
    include_once("fetch.php");
?>

<!DOCTYPE html>
<html>
     <head>
             <title>Sample CRUD</title>
    </head>
    <body>
        <h1>DETAILS</h1>
        <a href="addform.php">Add Data</a><br/><br/>
        <a href="cedulaform.php">Add Cedula</a><br/><br/>
        <a href="certificateform.php">Add Barangay Certificate</a><br/><br/>
   
        
        <table width='100%' border= 1>
            <tr bgcolor='#CCCCCC'>
                <td>ID</td>
                <td>Name</td>
                <td>Date</td>
                <td>Purok</td>
                <td>Form Type</td>
                <td>Action</td>
            </tr>

            <?php
   
   
  ?>

            <?php
                while($res=mysqli_fetch_array($result)) {
                    
                    echo "<tr>";
                    echo "<td>".$res['id']."</td>";
                    echo "<td>".$res['name']."</td>";
                    echo "<td>".$res['date']."</td>";
                    echo "<td>".$res['purok']."</td>";
                    echo "<td>".$res['formtype']."</td>";
                    echo "<td><a href=\"editform.php?id=$res[id]\">Edit</a> |
                            <a href=\"delete.php?id=$res[id]\"
                            onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
        
                }
            ?>
        </table>
    </body>
</html>