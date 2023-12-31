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
    <form action="xulychenPB.php" method="post">
        <label for="idpb">Nhập ID Phòng ban: </label>
        <input type="text" name="idpb" id="idpb" required>  <br>
        <label for="tenpb">Nhập Tên phòng ban: </label>
        <input type="text" name="tenpb" id="tenpb" required>  <br>
        <label for="mota">Nhập Mô tả: </label>
        <input type="text" name="mota" id="mota" required>  <br>
        <input type="submit" value="OK">
    </form>



</body>
</html>