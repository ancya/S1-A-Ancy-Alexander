
<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "program";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM `login`";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
    <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Conatct</th>
<th>email</th>
    </tr>";
    
    while($row = mysqli_fetch_array($result))
    {
    echo "<tr>";
    echo "<td>" . $row['roll'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['phonenumber'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "</tr>";

    }
    echo "</table>";
}
?> 

</body>
</html>