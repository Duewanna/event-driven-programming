<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="text" placeholder="Search name here...";>
    <button>Search now!!</button>
    <hr>

<?php 
include("./config/database.php");
echo '<br/>';
$sql = "SELECT * FROM guest WHERE name LIKE '%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
    echo 'Names : ' . $row['name'] . "<br/>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
</body>
</html>
