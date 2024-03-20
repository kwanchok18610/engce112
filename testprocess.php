

<?php include 'testprocess.php'; ?>

<?php
$name1 = $_POST ['name1'];
$phonenumber = $_POST ['phonenumber'];
$pumber = $_POST ['pumber'];
$date1 = $_POST ['date1'];
$time1 = $_POST ['time1'];

mysqli_query($connect, "INSERT INTO member(name1, phonenumber, pumber, date1, time1 )
                        VALUES ('name1', 'phonenumber', 'pumber', 'date1', 'time1') ")
                        
?>

<head>
    <h1>จองคิวสำเร็จ</h1>
</head>

