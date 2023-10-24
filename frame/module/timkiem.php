<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" >
        
        <input type="checkbox" name="checkbox1" value="idnv"> ID nhân viên
        <input type="checkbox" name="checkbox2" value="hoten"> Họ Tên
        <input type="checkbox" name="checkbox3" value="diachi"> Địa chỉ <br>
        <input type="text" name="textBox" id="text" > <br>
        <button>OK</button>
    </form>

    

    <?php

    $input = @($_GET["textBox"]);

    $cb1Value = @($_GET['checkbox1']);
    $cb2Value = @($_GET['checkbox2']);  
    $cb3Value = @($_GET['checkbox3']);

    
    // echo "ID Nhân viên: " . $cb1Value."<br>";
    // echo "Họ tên: " . $cb2Value. "<br>";
    // echo "Địa chỉ: " . $cb3Value. "<br>";


    $link = mysqli_connect("localhost","root","") or die("Couldn't connect to SQLServer");
    mysqli_select_db($link,"dulieu1");


    $sql = "SELECT * FROM nhanvien ";

    if ($cb1Value != NULL || $cb2Value != NULL || $cb3Value != NULL) {
        $sql .= " WHERE ";
    }

    if ($cb1Value != NULL) {
        $sql .= " $cb1Value LIKE  '%$input%' ";
        if ($cb2Value != NULL) {
            $sql .= " OR ";
        }
    }

    if ($cb2Value != NULL ) {
        $sql .= " $cb2Value LIKE  '%$input%' ";
        if ($cb3Value != NULL) {
            $sql .= " OR ";
        }
    }

    if ($cb3Value != NULL) { 
        $sql .= " $cb3Value LIKE '%$input%' ";
    }

    // echo $sql;

    $rs = mysqli_query($link,$sql);
    echo '<table border = "1" width = "100%">';
    echo '<caption> BẢNG NHÂN VIÊN </caption>';

    echo '<tr> <th>ID Nhân viên</th> <th>Họ tên</th> <th>ID Phòng ban</th> <th>Địa chỉ</th> </tr> ';
        
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