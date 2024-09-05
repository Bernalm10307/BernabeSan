<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $host = "localhost";
    $user="root";
    $password="";
    $mysql = mysqli_connect($host,$user,$password);
    mysqli_connect($host,$user,$password);
    $sql="show status";
    $result = mysqli_query($mysql,$sql);
    if(! $result)
    echo"<b>Error".mysqli_errno($mysql).":".mysqli_error($mysql)."<b>";
    else{
        ?>
        <!-- Table that displays the results-->
    }
</body>
</html>