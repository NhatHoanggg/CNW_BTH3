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
    form {
        float: left;
        width: 500px;
        margin: 0 auto;
        text-align: center;
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 10px;
    }

    input[type="checkbox"] {
        margin-right: 5px;
    }

    input[type="text"] {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
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
        float: left;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>
<body>

    <form action="xulytimkiem.php" method = "POST">
        
        <input type="checkbox" name="checkbox1" id="checkbox1" value="idnv"> ID nhân viên 
        <input type="checkbox" name="checkbox2" id="checkbox2" value="hoten"> Họ Tên 
        <input type="checkbox" name="checkbox3" id="checkbox3" value="diachi"> Địa chỉ <br>
        <input type="text" name="textBox" id="textBox" > <br>
        <input type="submit" value="OK">
    </form>

</body>
</html>