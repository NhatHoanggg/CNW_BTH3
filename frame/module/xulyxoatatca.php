<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $link = mysqli_connect("localhost", "root", "") or die("Couldn't connect to MySQL");
    mysqli_select_db($link, "dulieu1");
    $sql = "SELECT * FROM nhanvien";
    $rs = mysqli_query($link, $sql);
    if (isset($_POST['delete_btn'])) {
      
        $link = mysqli_connect("localhost", "root", "") or die("Couldn't connect to MySQL");
        mysqli_select_db($link, "dulieu1");

        $delete = $_POST['delete'];
        foreach ( $delete as $key => $value ){ 
            // echo $key, "=", $value, "\n"; 

            $sql = "DELETE FROM nhanvien WHERE idnv = '$value'";

            if (mysqli_query($link, $sql)) {
            } else {
                echo "Xóa nhân viên ".$value." đã chọn thất bại!";
            }
        }

        
        mysqli_close($link);
        header("Location:xoanhieuNV.php");
    }


    ?>
</body>
</html>