<!DOCTYPE html>
<html>
<head>
    
    <title>Page title</title>
    
</head>
<body>
    <form action="addusers.php" method="POST">
    First name:<input type="text" name="forename"><br>
    Last name:<input type="text" name="surname"><br>
    Password:<input type="password" name="passwd"><br>
    House:<input type="text" name="house"><br>
    Year:<input type="text" name="year"><br>
    Gender:<select name="gender">
            <option value="M">Male</option>
            <option value="F">Female</option>
        </select>
    <br>

    <input type="radio" name="role" value="Pupil" checked> Pupil<br>
    <input type="radio" name="role" value="Teacher"> Teacher<br>
    <input type="radio" name="role" value="Admin"> Admin<br>
    <input type="submit" value="Add User">
</form>

<?php


include_once("connection.php");
$stmt = $conn->prepare("SELECT * FROM tblusers");
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
    {
        echo($row["Forename"]." ".$row["Surname"]."<br>");
    }
?>

</body>
</html>
