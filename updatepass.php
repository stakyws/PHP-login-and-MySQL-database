<?php
// اتصال بقاعدة البيانات
$con = mysqli_connect('localhost', 'root', '', 'tags');

// التحقق من الاتصال
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // استعلام SQL للبحث عن المستخدم باستخدام البريد الإلكتروني وكلمة المرور
    $query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($con, $query);

    // التحقق من وجود صف واحد يحتوي على البريد الإلكتروني وكلمة المرور
    if (mysqli_num_rows($result) == 1) {
        $user_email = $row['email'];
        $user_password = $row['password'];
       
        setcookie("user_email", $email, time() + 3600, "/");
        setcookie("user_password", $password, time() + 3600, "/");
        header("location: Food.php");
        exit();
    } else {
        // فشل تسجيل الدخول، قم بطباعة رسالة خطأ
        echo "<script>document.getElementById('ppp').style.display = 'block';</script>";
    }
}

// إغلاق اتصال قاعدة البيانات
mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>UpDate Password</title>
<link rel="stylesheet" href="assets/Sin_UP_IN.css">

</head>
<body>
<header>
    <div class="hed">
        <div class="logo">
            <h1 class="txt_1">UpDate Pass</h1>
        </div>
        <ul>
            <li><a href="#">btn</a></li>
            <li><a href="#">Typ</a></li>
            <li><a href="#">Pach</a></li>
            <li><a href="#">Corces</a></li>
        </ul>
    </div>
</header>
<a ></a>
<section id="login">
    <div class="login2-container">
        <h1 class="txt_2">USE<span>Login</span></h1>
        <form method="post">
            <input type="text" name="email" placeholder="Enter Email" required><br>
            <input type="text" name="user" placeholder="Enter User Name" required><br>
            <a href="" style="font-size: 10px; margin-left: -180px; color:chocolate; " id="error"> Forgot password </a><br>
            <input name="log" type="submit" value="Next" class="btn">
        </form>
    </div>
</section>
<script>
    document.getElementById('ppp').style.display = 'none';
</script>
</body>
</html>