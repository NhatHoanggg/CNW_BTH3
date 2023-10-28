<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="t2.css">
</head>
<style>
    body{
        padding: 0;
        margin: 0;
        font-family: 'Courier New', Courier, monospace;
        font-weight: 800;
        font-size: 20px;
        overflow: hidden;
        background-color: rgb(0, 255, 102);
    }

    ul, 
    li, 
    a{
        text-decoration: none;
        list-style: none;
    }

    ul { 
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

</style>
<body>
    <ul>
        <li><a href="./module/xemthongtinNV.php" target = "t3">Xem nhân viên</a></li>
        <li><a href="./module/xemthongtinPB.php" target = "t3">Xem phòng ban</a></li>
        <li><a href="./module/timkiem.php" target = "t3">Tìm kiếm </a></li>
        <li><a href="./module/login.php" target = "t3">Đăng nhập</a></li>
    </ul>
</body>
</html>
