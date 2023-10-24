<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
        $idnv = $_POST['idnv'];
        $hoten = $_POST['hoten'];
        $idpb = $_POST['idpb'];
        $diachi = $_POST['diachi'];

        $link = mysqli_connect("localhost", "root", "") or die("Couldn't connect to MySQL");
        mysqli_select_db($link, "dulieu1");
        
            
            $sql = "INSERT INTO nhanvien (idnv, hoten, idpb, diachi) VALUES (?, ?, ?, ?)";
            $stmt = mysqli_prepare($link, $sql);
            
            mysqli_stmt_bind_param($stmt, "ssss",$idnv, $hoten, $idpb, $diachi);
            
            try{

                if (mysqli_stmt_execute($stmt)) {
                    echo "Thêm nhân viên thành công!";
                    $sql = "SELECT * FROM nhanvien";
                    $rs = mysqli_query($link,$sql);
                    echo '<table border = "1" width = "100%">';
                    echo '<caption> BẢNG NHÂN VIÊN </caption>';
                    
                    echo '<tr> <th>ID NV</th> <th>HO Ten</th> <th>IDPB</th> <th>DIA CHI</th> </tr> ';
                    
                    while ($row = mysqli_fetch_array($rs)){
                        echo
                        '<tr> 
                        <td>'.$row['idnv'].'</td> 
                        <td>'.$row['hoten'].'</td> 
                        <td>'.$row['idpb'].'</td> 
                        <td>'.$row['diachi'].'</td> 
                        </tr> ' ;
                }

                echo '</table>';
                } 

            }catch (Exception $e) {
                echo 'Có lỗi: ' . $e->getMessage();
            }
        
        mysqli_stmt_close($stmt);
        mysqli_close($link);
    
    ?>
</body>
</html>