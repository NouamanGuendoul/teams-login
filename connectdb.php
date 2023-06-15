<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "klanten";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}


try {
  // Establish a connection to the database
  $dsn = "mysql:host=$servername;dbname=$dbname;charset=utf8mb4";
  $options = [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      PDO::ATTR_EMULATE_PREPARES => false,
  ];
  $pdo = new PDO($dsn, $username, $password, $options);

  // Prepare and execute the query
  $sql = "SELECT * FROM klant";
  $stmt = $pdo->query($sql);

  // Fetch the data
  $data = $stmt->fetchAll();

  // Process the data
  foreach ($data as $row) {}

} catch (PDOException $e) {
  // Handle database errors
  echo 'Error: ' . $e->getMessage();
}
?>





?>