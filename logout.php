<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logout</title>

    <style>
        body {
            background: linear-gradient(135deg, #ffd6e8, #e6d9ff);
            font-family: 'Segoe UI', Tahoma, sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            animation: fadeOut 2.5s forwards;
        }

        .box {
            background: #ffffff;
            padding: 40px 50px;
            border-radius: 25px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            text-align: center;
        }

        h2 {
            color: #c77dff;
            margin-bottom: 10px;
        }

        p {
            color: #6a4c93;
            font-size: 15px;
        }

        @keyframes fadeOut {
            0% { opacity: 1; }
            80% { opacity: 1; }
            100% { opacity: 0; }
        }
    </style>
</head>
<body>

    <div class="box">
        <h2>👋 ออกจากระบบแล้ว</h2>
        <p>กำลังพาคุณกลับไปหน้าเข้าสู่ระบบ...</p>
    </div>

<?php
    session_destroy();
    header("Refresh:2.5; url=loginpage.php");
?>

</body>
</html>
