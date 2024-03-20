<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบจองคิวร้านอาหาร</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #F1C7BE ; 
            background-size: cover;
            background-repeat: no-repeat;
            color: #333;
        }

        header {
            background-color: #D3654E;
            color: #fff;
            text-align: center;
            padding: 5px;
        }

        nav {
            background-color: #343a40;
            color: #fff;
            padding: 10px;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }

        main {
            padding: 20px;
        }

        section {
            margin-bottom: 30px;
        }

        article {
            background-color: #fff;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #fff;
        }

        footer {
            background-color: #343a40;
            color: #fff;
            text-align: center;
            padding: 5px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        h2 {
            color: #D3654E;
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: auto;
        }

        label {
            margin-top: 10px;
            display: block;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #ED7157;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #BB7171;
        }
    </style>

<body>
    <header>
        <h1>Kao Phai Bar & Restaurant</h1>
        <p></p>
    </header>

    <nav>
        <ul>
            <li><a href="test Q หน้าแรก.php">หน้าแรก</a></li>
            <li><a href="test Q จองคิว.php">จองคิว</a></li>
            <li><a href="test Q login.php">เข้าสู่ระบบ</a></li>
            <li><a href="test Q สมัคร.php">สมัครสมาชิก</a></li>
        
        
        </ul>
    </nav>

    
    

    <footer>
        <p>&copy; ระบบจองคิวร้านอาหาร</p>
    </footer>

</head>
<body>
    <div class="container">
        <h2>กรอกข้อมูลเพื่อจองคิว</h2>
        <form action="testprocess.php" method="post">
            <label for="name">ชื่อ:</label>
            <input type="text" name="name1">
            
            <label for="phonenumber">เบอร์โทร:</label>
            <input type="text" name="phonenumber">

            <label for="pumber">จำนวนคน:</label>
            <input type="text" name="pumber">
            
            <label for="date1">วันที่:</label>
            <input type="date" name="date1">

            <label for="time1">เวลา:</label>
            <input type="time" name="time1">

            <input type="submit" value="จองคิว">
        </form>
    </div>
</body>
</html>
