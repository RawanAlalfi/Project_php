<?php
include "db_conn.php";
$id = $_GET["id"];
$sql = "DELETE FROM `users` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location:index.php?view_user");
} else {
  echo "Failed: " . mysqli_error($conn);
}