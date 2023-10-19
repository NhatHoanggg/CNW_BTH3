<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Chọn phòng ban cần cập nhật</h2>
    
    <?php

    $link = mysqli_connect("localhost","root","") or die("Couldn't connect to SQLServer");
    mysqli_select_db($link,"dulieu1");
    $sql = "SELECT * FROM phongban";
    $rs = mysqli_query($link,$sql);
    
    echo '<table border = "1" width = "100%">';
    echo '<caption> BẢNG PHÒNG BAN </caption>';

    echo '<tr> <th>ID PB</th> <th>Tên PB</th> <th>Mô tả</th> </tr> ';
    
    while ($row = mysqli_fetch_array($rs)){
        echo
        '<tr> 
        <td><a href="xulycapnhatPB.php?IDPB='.$row['idpb'].' ">'.$row['idpb'].'</a></td> 
        <td>'.$row['tenpb'].'</td> 
        <td>'.$row['mota'].'</td> 
        </tr> ' ;
    }

    echo '</table> ';
    mysqli_free_result($rs);
    mysqli_close($link);

    
    
    ?>

</body>
</html>