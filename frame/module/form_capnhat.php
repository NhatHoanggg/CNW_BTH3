<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    <style>
    *{
        font-family: 'Courier New', Courier, monospace;
        font-weight: 800;
        font-size: 20px;
    }

    body { 
        padding: 0;
        margin: 0;
    }

    form { 
        display: flex;
        flex-direction: column;
        align-items:center;        
    }
    

    h2 {
        font-size: 24px;
        color: #333;
        margin-top: 20px;
        text-align: center;

    }


    label {
        display: block;
        margin: 10px 0;
        font-weight: bold;
    }

    input[type="text"],
    input[type="password"] {
        width: 50%;
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    button {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        width: 200px;
        font-size: 20px;
    }

    button:hover {
        background-color: #0056b3;
    }


</style>
</style>
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