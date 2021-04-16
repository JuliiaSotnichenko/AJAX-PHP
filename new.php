<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title> </title>
<script>
    $(document).ready(function() {
        $("#btn").click(function() {
            $("#test").load("data.txt", {
                Name: "Juliia", 
                Lastname: "Soty"
            }, function() {
                alert("Hello");
            });
        });
        
    });
</script>
</head>
<body>
   <div id="test">
       <p>Content!</p>
   </div>

   <button id="btn">Click here</button>
</body>
</html>
