<!DOCTYPE html>
<html>
<head>
    <title>Add Data</title>
</head>

<body>
    <h1>Add Cedula</h1>
    <a href="index.php">Home</a>
    <br/><br/>
    <form action="addcedula.php" method="post" name="form1">
        <table width="25%" border="0"> 
            
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>

            <tr>
                <td>Date</td>
                <td><input type="text" name="date"></td>
            </tr>

            <tr>
                <td>Purok</td>
                <td><input type="text" name="purok"></td>
            </tr>

          
            <tr>
                <td></td>
                <td><input type="Submit"  name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
</body>
</html>


