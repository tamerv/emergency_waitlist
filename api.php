<?php
$name = $_POST['name'];
$urgency = $_POST['urgency'];

$host = "localhost";
$username = "root";
$password = "Bahar2008"; //password
$dbname = "clients"; //database name

$conn = mysqli_connect($host, $username, $password, $dbname);


if (mysqli_connect_error()) {
  die("Connection failed: " . mysqli_connect_error());
}

  $sql = "INSERT INTO clients (name, urgency) VALUES (?, ?)"; //your database name instead of clients

  $stmt = mysqli_stmt_init($conn);

  if (! mysqli_stmt_prepare($stmt , $sql)){
    die(mysqli_error($conn));
  }

  mysqli_stmt_bind_param($stmt, "ss", $name, $urgency);
  mysqli_stmt_execute($stmt);
  echo "New record created successfully";

$sql = "SELECT * FROM clients";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  echo "<table>";
  echo "<tr><th>Line Number</th><th>Name</th><th>Urgency</th></tr>";
  $line_number = 1;
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $line_number . "</td><td>" . $row["name"] . "</td><td>" . $row["urgency"] . "</td></tr>";
    $line_number++;
  }
  echo "</table>";
} else {
  echo "0 results";
}

mysqli_close($conn);

?>
