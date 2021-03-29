<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'codephp62';

$myconn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if($myconn->connect_errno){
    printf("connect failed: %s\n", $myconn->connect_error);
    exit();
}

$strSQL ="SELECT `id`, `username`, `status` FROM `user`";
$result = $myconn->query($strSQL);
while($row = $result->fetch_array()){
    echo $row["username"] . "<br>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="3" width="100%">
        <tr>
        <td> ลำดับ </td>
        <td> ชื่อผู้ใช้ </td>
        <td> สถานะ </td>
    </tr>
    <?php
    while($row = $result->fetch_array()){
    //echo $row["username"] . "<br>";
    ?>
    <tr>
        <td>ลำดับ</td>
        <td>ชื่อผู้ใช้</td>
        <td>สถานะ</td>
    </tr>
    <?php  
}
?>
</body>
</html>
