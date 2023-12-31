<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
        align-items:start;        
        padding-left: 50px;
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

    input[type="text"]{
        width: 50%;
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    input[type="submit"] {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        width: 100px;
        font-size: 20px;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }

</style>
<body>
    
    <form action="xulychenNV.php" method="post">
        <label for="hoten">Nhập ID nhân viên: </label>
        <input type="text" name="idnv" id="idnv" required>  <br>
        <label for="hoten">Nhập họ tên nhân viên: </label>
        <input type="text" name="hoten" id="hoten" required>  <br>
        <label for="hoten">Chọn phòng ban: </label>
        <!-- <input type="text" name="idpb" id="idpb" required>  <br> -->
        <select name="idpb" id="selectPB">
            <?php
            $link = mysqli_connect("localhost", "root", "") or die("Couldn't connect to SQLServer");
            mysqli_select_db($link, "dulieu1");
            $sql = "SELECT idpb, tenpb FROM phongban";
            $rs = mysqli_query($link, $sql);

            while ($row = mysqli_fetch_array($rs)) {
                echo "<option value=" . $row['idpb'] . ">" . $row['tenpb'] . "</option>";
            }

            mysqli_free_result($rs);
            mysqli_close($link);
            ?>
        </select> <br>
        <label for="hoten">Nhập địa chỉ</label>
        <input type="text" name="diachi" id="diachi" required >  <br>
        <input type="submit" value="OK">
    </form>

    


</body>
</html>