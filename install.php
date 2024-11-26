<?php
include_once("connection.php");
$stmt = $conn->prepare("
CREATE TABLE TblUsers 
(UserID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Gender VARCHAR(1) NOT NULL,
Surname VARCHAR(20) NOT NULL,
Forename VARCHAR(20) NOT NULL,
Password VARCHAR(20) NOT NULL,
House VARCHAR(20) NOT NULL,
Year  INT(2) NOT NULL,
Role  TINYINT(1))"
);

$stmt->execute();
$stmt->closeCursor();
echo("tblusers created");

$stmt = $conn->prepare("
CREATE TABLE TblSubjects(SubjectID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Subjectname VARCHAR(20) NOT NULL,
Teacher VARCHAR(20) NOT NULL)"
);

$stmt->execute();
$stmt->closeCursor();
echo("tblSubjects created")
?>