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
    
    ?>
    <form method="post" action = "xulycapnhatPB.php">
        <label for="tenpb">ID PHÒNG BAN</label>
        <input type="text" name="idpb" id="idpb" value = <?php echo $idpb; ?> readonly required><br>

        <label for="tenpb">NHẬP TÊN PHÒNG BAN MỚI :</label>
        <input type="text" name="tenpb" id="tenpb" required><br>

        <label for="mota"> NHẬP MÔ TẢ :</label>
        <input type="text" name="mota" id="mota" required><br>

        <button type="submit">Cập nhật</button>
    </form>
    

</body>
</html>