<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo '
    <script>
        parent.frames["t2"].location.href = "../t2.php";
    </script>';
    echo '
            <script>
                parent.frames["t3"].location.href = "home.php";
            </script>';
    ?>
</body>
</html>