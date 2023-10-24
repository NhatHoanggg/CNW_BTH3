
<!DOCTYPE html>
<html>
<head>
    <title>Đăng nhập</title>
</head>
<body>
    <h2>Đăng nhập</h2>
    <form method="post" >
        <label for="username">Tên đăng nhập:</label>
        <input type="text" name="username" id="username" required><br>

        <label for="password">Mật khẩu:</label>
        <input type="password" name="password" id="password" required><br>

        <button type="submit">Đăng nhập</button>
        
    </form>

    

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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
            echo "failed";
        }

        mysqli_stmt_close($stmt);
        mysqli_close($link);
    }
        
    ?>    

</body>
</html>