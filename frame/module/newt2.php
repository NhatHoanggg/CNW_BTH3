<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <li><a href="./xemthongtinNV.php" target = "t3">Xem nhân viên</a></li>
        <li><a href="./xemthongtinPB.php" target = "t3">Xem phòng ban</a></li>
        <li><a href="./timkiem.php" target = "t3">Tìm kiếm </a></li>
        <li><a href="./chenNV.php" target = "t3">Chèn nhân viên </a></li>
        <li><a href="./chenPB.php" target = "t3">Chèn phòng ban </a></li>
        <li><a href="./capnhatPB.php" target = "t3">Cập nhật phòng ban </a></li>
        <li><a href="./xoaNV.php" target = "t3">Xóa nhân viên </a></li>
        <li><a href="./xoanhieuNV.php" target = "t3">Xóa nhiều nhân viên </a></li>
        <li><a href="./logout.php" target = "t2">Đăng xuất </a></li>
    </ul>
</body>
</html>
