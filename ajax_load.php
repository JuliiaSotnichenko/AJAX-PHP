<?php
    include 'dbc.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Load</title>
   
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            let commentCount = 2;
            $("button").click(function(){
                commentCount = commentCount + 2;
                $("#comments").load("load-comments.php", {
                commentsNewCount: commentCount 
                });
            });
        });
    </script>
</head>
<body>
    
    <div id="comments">
        <?php
            $sql = "SELECT * FROM comments LIMIT 2";
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
    </div>

    <button>Show me comments</button>

</body>
</html>