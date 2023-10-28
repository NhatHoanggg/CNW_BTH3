<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        $username = $_POST['username'];
        $password = $_POST['password'];

        $link = mysqli_connect("localhost", "root", "") or die("Couldn't connect to SQLServer");
        mysqli_select_db($link, "dulieu1");

        $sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
        $stmt = mysqli_prepare($link, $sql);
        mysqli_stmt_bind_param($stmt, "ss", $username, $password);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        $num_rows = @(mysqli_num_rows($result));

        if ($num_rows == 1) {
            
            echo '
            <script>
                parent.frames["t2"].location.href = "newt2.php";
            </script>';
            echo '
            <script>
                parent.frames["t3"].location.href = "home.php";
            </script>';
        } else {
            header("Location:login.php");
        }

        mysqli_stmt_close($stmt);
        mysqli_close($link);
    
        
    ?>   
    

</body>
</html>