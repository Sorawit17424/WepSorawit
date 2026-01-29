<html lang="en">
<head>
    <title>loginpage</title>

    <style>
        body {
            background: linear-gradient(135deg, #ffd6e8, #e6d9ff);
            font-family: 'Segoe UI', Tahoma, sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        form {
            background: #ffffff;
            padding: 30px 40px;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            width: 360px;
            text-align: center;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border-radius: 12px;
            border: 1px solid #f0c6ff;
            outline: none;
            font-size: 14px;
        }

        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #c77dff;
            box-shadow: 0 0 6px #e0aaff;
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 15px;
            background: linear-gradient(135deg, #ff9a9e, #c77dff);
            color: #ffffff;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        input[type="submit"]:hover {
            opacity: 0.85;
            transform: scale(1.02);
        }
    </style>

</head>
<body>

    <form name="frmpage" action="loginpage.php" method="POST">
        <input type="email" name="email_mem" size="50" placeholder="อีเมล์" required> <br>
        <input type="password" name="password_mem" size="50" placeholder="รหัสผ่าน" required> <br>
        <input type="submit" name="submit" value="Login">
        <br>
    </form>
    
    <?php
        include ('dbconnect.php');
        session_start();
        if (isset($_POST['submit'])) {
            if(isset($_POST['email_mem']) && isset($_POST['password_mem'])){
                $email_mem = trim($_POST['email_mem']);
                $password_mem = trim($_POST['password_mem']);
                try{        
                    $stmt = $con -> prepare("SELECT * FROM members WHERE   email_mem = '".$email_mem."' AND password_mem = '".$password_mem."'");
                    $stmt -> execute();
                    $em = $stmt -> fetch(); 
                    if ($em == true){
                        $_SESSION["id_mem"] = $em['id_mem'];
                        $_SESSION["name_mem"] = $em['name_mem'];
                        $_SESSION["email_mem"] = $em['email_mem'];
                        echo "<script>alert('ยินดีต้อนรับเข้าสู่ระบบ');</script>";
                        echo "<script>location.replace('searchpage.php')</script>";
                    }
                    else {
                        echo "<script>alert('กรุณาใส่ E-mail และ Password ให้ถูกต้อง');</script>";
                        echo "<script>location.replace('loginpage.php')</script>";
                    }
                } catch ( Exception $e){
                    $e ->getMessage();
                }
            }
        }
    ?>

</body>
</html>
