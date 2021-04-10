<!DOCTYPE html>
<html>
<head> 
<title>Docker Student Table Data</title>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
<link rel="shortcut icon" type="image/x-icon" href="showcat.png" />
</head>
<body>
<b style="color:gray"> Engineering Student Data</b> <br><br>
<?php
$host = "db";
$dbusername = "root";
$dbpassword = "root";
$dbname = "student_sample";
// Create connection
$conn = mysqli_connect ($host, $dbusername, $dbpassword, $dbname);  
if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
    }
$query="SELECT * FROM mahasiswa";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0)
{
 echo "<table>";
            echo "<tr>";
                echo "<th>NIM</th>";
                echo "<th>Nama</th>";
                echo "<th>Gender</th>";
                echo "<th>Alamat</th>";
                echo "</tr>";
  
 while($row =mysqli_fetch_array($result))
 {
  echo "<tr>";
                echo "<td>" . $row['nim'] . "</td>";
                echo "<td>" . $row['nama'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td>" . $row['alamat'] . "</td>";
                echo "</tr>";
    }
 echo "</table>";
}
?>

</body>
</html>              