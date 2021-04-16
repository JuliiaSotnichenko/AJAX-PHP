<?php
include 'dbc.php';

$commentsNewCount = $_POST['commentsNewCount'];
$sql = "SELECT * FROM comments LIMIT $commentsNewCount";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)){
          echo "<p>";
          echo $row['author'];
          echo "<br>";
          echo $row['message'];
          echo "</p>";
      }
  } else
  echo "No comments";
?>