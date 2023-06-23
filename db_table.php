<?php
$user = "user";
$password = "P@ssw0rd";
$database = "test_db";
$table = "db_table";

try {
  $db = new PDO("mysql:host=localhost;port=3306;dbname=$database", $user, $password);
  echo "<h2>TABLE</h2><ol>";
  foreach($db->query("SELECT content FROM $table") as $row) {
    echo "<li>" . $row['content'] . "</li>";
  }
  echo "</ol>";
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
