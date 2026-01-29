<html lang="en">
<head>
    <title>from2</title>
    <style>
        body{
            font-family: Arial;
            margin:0;
            background: linear-gradient(135deg, #fbc2eb, #a6c1ee);
        }

        .result{
            width:420px;
            margin:60px auto;
            background:#fff;
            padding:25px;
            border-radius:18px;
            box-shadow:0 15px 30px rgba(0,0,0,0.2);
        }

        h2{
            text-align:center;
            margin-bottom:20px;
            color:#a14bb4;
        }

        .item{
            margin-bottom:10px;
            color:#555;
        }

        .back{
            text-align:center;
            margin-top:20px;
        }

        input[type=submit]{
            background:#ff9acb;
            color:white;
            padding:9px 22px;
            border:none;
            border-radius:20px;
            cursor:pointer;
        }

        input[type=submit]:hover{
            opacity:0.85;
        }
    </style>
</head>

<body>

<div class="result">
<h2>ข้อมูลที่คุณกรอก</h2>

<?php
if(isset($_POST['save'])){
    $user = $_POST['user'];
    $pwd = $_POST['Pwd'];
    $address = $_POST['address'];

    // แปลงเพศ
    if($_POST['gender'] == "Male"){
        $genderText = "เพศชาย";
    }else{
        $genderText = "เพศหญิง";
    }

    // แปลงเครื่องดื่ม
    if($_POST['beverage'] == "IcedTea"){
        $beverageText = "ICED TEA";
    }elseif($_POST['beverage'] == "LemonTea"){
        $beverageText = "LEMON TEA";
    }else{
        $beverageText = "COFFEE";
    }

    echo "<div class='item'>Username : $user</div>";
    echo "<div class='item'>Password : $pwd</div>";
    echo "<div class='item'>Address : $address</div>";
    echo "<div class='item'>Gender : $genderText</div>";
    echo "<div class='item'>Beverage : $beverageText</div>";
}
?>

<div class="back">
    <form method="post" action="from1.php">
        <input type="submit" value="Back">
    </form>
</div>

</div>

</body>
</html>