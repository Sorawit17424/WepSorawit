<html lang="en">
<head>
    <title>Sorawit</title>
    <style>
        body{
            font-family: Arial;
            margin:0;
            background: linear-gradient(135deg, #fbc2eb, #a6c1ee);
        }

        .box{
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

        input[type=text],
        input[type=password],
        textarea,
        select{
            width:100%;
            padding:9px;
            margin-bottom:12px;
            border:1px solid #e6cfee;
            border-radius:10px;
            background:#fff7fc;
        }

        textarea{
            resize:none;
        }

        .group{
            margin-bottom:12px;
            color:#555;
        }

        input[type=submit]{
            background:#ff9acb;
            color:white;
            padding:9px 20px;
            border:none;
            border-radius:20px;
            cursor:pointer;
        }

        input[type=reset]{
            background:#c3a6ff;
            color:white;
            padding:9px 20px;
            border:none;
            border-radius:20px;
            cursor:pointer;
        }

        input[type=submit]:hover,
        input[type=reset]:hover{
            opacity:0.85;
        }
    </style>
</head>

<body>

<div class="box">
<h2>แบบฟอร์มลงทะเบียน</h2>

<form name="frmRegis" method="post" action="from2.php">

ชื่อผู้ใช้
<input type="text" name="user" maxlength="25">

รหัสผ่าน
<input type="password" name="Pwd" maxlength="8">

ที่อยู่
<textarea name="address" rows="5"></textarea>

<div class="group">
เพศ<br>
<input type="radio" name="gender" value="Male"> ชาย
<input type="radio" name="gender" value="Female"> หญิง
</div>

<div class="group">
งานอดิเรก<br>
<input type="checkbox" name="Hobby" value="อ่านหนังสือ"> อ่านหนังสือ
<input type="checkbox" name="Hobby" value="ดูทีวี"> ดูทีวี
</div>

เครื่องดื่ม
<select name="beverage">
    <option value="IcedTea">ICED TEA</option>
    <option value="LemonTea">LEMON TEA</option>
    <option value="COFF">COFFEE</option>
</select>

<br><br>

<input type="submit" name="save" value="Save">
<input type="reset" value="Cancel">

</form>
</div>

</body>
</html>