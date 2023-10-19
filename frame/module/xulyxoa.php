<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_GET['id'])) {
        $idnv = $_GET['id'];

        // echo $idnv;
        // Kết nối đến cơ sở dữ liệu MySQL
        $link = mysqli_connect("localhost", "root", "") or die("Couldn't connect to MySQL");
        mysqli_select_db($link, "dulieu1");

        // Sử dụng truy vấn xóa nhân viên dựa trên ID
        $sql = "DELETE FROM nhanvien WHERE idnv = ?  ";
        $stmt = mysqli_prepare($link, $sql);
        mysqli_stmt_bind_param($stmt, "s", $idnv);
        

        if (mysqli_stmt_execute($stmt)) {
            echo "Xóa nhân viên thành công!";
        } else {
            echo "Xóa nhân viên thất bại!";
        }

        mysqli_stmt_close($stmt);
        mysqli_close($link);
    }
    ?>
    
</body>
</html>