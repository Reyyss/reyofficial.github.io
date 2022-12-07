<?php
    //including the database connecton file
    include_once("mysqlconfig_connection.php");
    //getting id of the data from url
    $id=$_GET['id'];
    //selecting data associated with this particular id
    $result=mysqli_query($dbc, "SELECT * FROM tblfiles WHERE id=$id");
    while($res = mysqli_fetch_array($result)) {
        $name = $res['name'];
        $date = $res['date'];
        $purok = $res['purok'];
        $formtype = $res['formtype'];
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Edit Data</title>
    </head>
    <body>
        <h1>Edit Subject</h1>
        <a href="index.php">Home</a>
        <br/><br/>
        <form name="form1" method="post" action="edit.php">
            <table border="0">
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" value="<?php echo $name;?>"></td>
                </tr>
                <tr>
                    <td>Date</td>
                    <td><input type="text" name="date" value="<?php echo $date;?>"></td>
                </tr>
                <tr>
                    <td>Purok</td>
                    <td><input type="text" name="purok" value="<?php echo $purok;?>"></td>
                </tr>
                <tr>
                    <td>Form type</td>
                    <td><input type="text" name="formtype" value="<?php echo $formtype;?>"></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="id" value="<?php echo $_GET['id'];?>"></td>
                    <td><input type="submit" name="Update" value="Update"></td>
                </tr>
            </table>
        </form>
    </body>
</html>