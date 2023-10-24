<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $idpb = @($_GET["IDPB"]);
    echo "Cập nhật thông tin phòng ban có IDPB = ".$idpb;
    
    ?>
    <form method="post">


        <label for="tenpb">Tên Phòng Ban Mới:</label>
        <input type="text" name="tenpb" id="tenpb" required><br>

        <label for="mota">Mô Tả Mới:</label>
        <input type="text" name="mota" id="mota" required><br>

        <button type="submit">Cập nhật</button>
    </form>
    
    <?php
    

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $tenpb = $_POST['tenpb'];
        $mota = $_POST['mota'];

        $link = mysqli_connect("localhost", "root", "") or die("Couldn't connect to MySQL");
        mysqli_select_db($link, "dulieu1");

        $sql = "UPDATE phongban SET tenpb = ?, mota = ? WHERE idpb = ?";
        $stmt = mysqli_prepare($link, $sql);
        mysqli_stmt_bind_param($stmt, "sss", $tenpb, $mota, $idpb);

        if (mysqli_stmt_execute($stmt)) {
            echo "Cập nhật phòng ban thành công!";
        } else {
            echo "Cập nhật phòng ban thất bại!";
        }

        mysqli_stmt_close($stmt);
        mysqli_close($link);
    }

    ?>
</body>
</html>