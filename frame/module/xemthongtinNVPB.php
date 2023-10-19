<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $input = @($_GET["IDPB"]);
    
    // echo $input;

    $link = mysqli_connect("localhost","root","") or die("Couldn't connect to SQLServer");
    mysqli_select_db($link,"dulieu1");
    $sql = "SELECT * FROM nhanvien where idpb = '$input'";
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
    mysqli_free_result($rs);
    mysqli_close($link);
?>
</body>
</html>