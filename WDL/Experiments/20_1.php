<?php

$mysqli= new mysqli("37.59.55.185", "hUNB1awrCF", "MB9HZ3sgGg", "hUNB1awrCF", 3306);

/*$result= $mysqli->query("CREATE TABLE Persons
(
PersonID int,
LastName varchar(255),
FirstName varchar(255),
Address varchar(255),
City varchar(255)
);
");*/

$result=$mysqli->query("INSERT INTO Persons values(12,'sawant','amol','dashyasuasfda','mumbai');");

/*
$result=$mysqli->query("INSERT INTO Persons values(12,'sawant','amol','dashyasuasfda','mumbai');");
$result1=$mysqli->query("INSERT INTO Persons values(13,'sawant','sahil','dashyasuasfda','mumbai');");
$result2=$mysqli->query("INSERT INTO Persons values(14,'sawant','archana','dashyasuasfda','mumbai');");
$result3=$mysqli->query("INSERT INTO Persons values(15,'sawant','vinay','dashyasuasfda','mumbai');");
*/

/*$result=$mysqli->query("DELETE from Persons where personid=13");
*/
echo .$row['column_name'].;
/*$result=$mysqli->query("SELECT * from Persons");
while($row=$result->fetch_assoc())
{
	 echo "<h3>-Driver id:           " . $row["PersonID"]. "<br> -Name:           " . $row["FirstName"]. " " . $row["LastName"]. "<br> -email:            " .$row["Address"]. "<br>-contact:           ".$row["City"]."<br></h3>";
}*/


mysqli_close($mysqli);

?>