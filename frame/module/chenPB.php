<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="hoten">Nhập ID Phòng ban: </label>
        <input type="text" name="idnv" id="idnv" required>  <br>
        <label for="hoten">Nhập Tên phòng ban: </label>
        <input type="text" name="hoten" id="hoten" required>  <br>
        <label for="hoten">Nhập Mô tả: </label>
        <input type="text" name="idpb" id="idpb" required>  <br>
        <input type="submit" value="ok">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $idpb = $_POST['idpb'];
        $tenpb = $_POST['tenpb'];
        $mota = $_POST['mota'];

        $link = mysqli_connect("localhost", "root", "") or die("Couldn't connect to MySQL");
        mysqli_select_db($link, "dulieu1");
        
            
            $sql = "INSERT INTO phongban (idpb, tenpb, mota) VALUES ( ?, ?, ?)";
            $stmt = mysqli_prepare($link, $sql);
            
            mysqli_stmt_bind_param($stmt, "sss",$idpb, $tenpb, $mota);
            
            
            if (mysqli_stmt_execute($stmt)) {
                echo "Thêm phòng ban thành công!";
                $sql = "SELECT * FROM phongban";
                $rs = mysqli_query($link,$sql);
                echo '<table border = "1" width = "100%">';
                echo '<caption> BẢNG PHÒNG BAN </caption>';
                
                echo '<tr> <th>ID Phòng ban</th> <th>Tên phòng ban</th> <th>Mô tả</th>  </tr> ';
                
                while ($row = mysqli_fetch_array($rs)){
                    echo
                    '<tr> 
                    <td>'.$row['idpb'].'</td> 
                    <td>'.$row['tenpb'].'</td> 
                    <td>'.$row['mota'].'</td> 
                    </tr> ' ;
            }

            echo '</table>';
        } else {
            echo "Thêm phòng ban thất bại!";
        }
        
        mysqli_stmt_close($stmt);
        mysqli_close($link);
    }
    ?>


</body>
</html>