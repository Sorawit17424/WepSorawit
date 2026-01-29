<?php
    session_start();
    if(!isset($_SESSION['email_mem'])){
            header("Location: loginpage.php");
    }
?>
<html lang="en">
<head>
  <title> searchpage</title>

  <!-- เพิ่ม CSS อย่างเดียว -->
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
        text-align: center;
        min-width: 350px;
    }

    label {
        display: block;
        font-size: 16px;
        color: #7b2cbf;
        margin-bottom: 10px;
    }

    button {
        margin-top: 20px;
        padding: 12px 25px;
        border: none;
        border-radius: 15px;
        background: linear-gradient(135deg, #ff9a9e, #c77dff);
        color: #ffffff;
        font-size: 15px;
        cursor: pointer;
        transition: 0.3s;
    }

    button:hover {
        opacity: 0.85;
        transform: scale(1.05);
    }
  </style>

</head>
<body>
    
    <form name= "frmmanagemem" method= "POST" action= "managemem.php">
        <label>E-mail: <?php echo $_SESSION['email_mem'] ?> </label> <br>
        <label>Name: <?php echo $_SESSION['name_mem'] ?> </label>  <br>
        <button type="button" name="logout" onclick="location.href='logout.php'">LogOut</button>
        <br>
    </form>
</body>
</html>
