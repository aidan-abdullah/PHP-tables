<!DOCTYPE html>
<html>
<head>
    
    <title>Student Studies</title>
    
</head>

<body>
    <form action="addstudenttosubject.php" method="POST">

    <select name="student">
        <?php
            include_once("connection.php");
            $stmt = $conn->prepare("SELECT * FROM tblusers");
            $stmt->execute();
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
                {
                    echo("<option value=.$row["userid"].">.$row["Forename"]." ".$row["Surname"]."</option>");
                }
        ?>
        </select>

        <input type="submit" value="Add student to subject">
            </form>


            </body>
            </html>
            