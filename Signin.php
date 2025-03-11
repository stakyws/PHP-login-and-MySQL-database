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
        $row = mysqli_fetch_assoc($result); // استخراج صف البيانات
        $user_email = $row['email'];
        $user_password = $row['password'];

        setcookie("user_email", $email, time() + 3600, "/");
        setcookie("user_password", $password, time() + 3600, "/");
        header("location: Food.php");
        exit();
    } else {
        echo " <script>document.getElementById('log').addEventListener('click', function(event){
            event.preventDefault();
            var useremail = document.getElementById('email').value;
            var userpassword = document.getElementById('p1').value;
            var errorElement = document.getElementById('error');
            
            if (useremail == '' && errorElement) {
                errorElement.textContent = 'You did not enter the email';
                errorElement.style.marginLeft = '-150px';
                errorElement.style.display = 'inline';
            } else if (userpassword == '' && errorElement) {
                errorElement.textContent = 'You did not enter the Password';
                errorElement.style.marginLeft = '-130px';
                errorElement.style.display = 'inline';
            } else {
                if (errorElement) {
                    errorElement.textContent = 'Username or password not found';
                    errorElement.style.marginLeft = '-120px';
                    errorElement.style.display = 'inline';
                }
            }
        });
        </script>";
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
    <title>Sign IN</title>
    <link rel="stylesheet" href="assets/Sin_UP_IN.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body>
    <header>
        <div class="hed">
            <div class="logo">
                <h1 class="txt_1">Sin In</h1>
            </div>
            <ul>
                <li><a href="#">btn</a></li>
                <li><a href="#">Typ</a></li>
                <li><a href="#">Pach</a></li>
                <li><a href="#">Corces</a></li>
            </ul>
        </div>
    </header>
    <a></a>
    <section id="login">
        <div class="login2-container">
            <h1 class="txt_2">USE<span>Login</span></h1>
            <form method="post">
                <input type="text" name="email" placeholder="Enter User Name" id="email" required><br>

                <div class="password-container">
                    <input type="password" name="password" placeholder="Password" id="p1" required>
                    <i class="fas fa-eye toggle-password" onclick="togglePassword('p1')"></i>
                </div>
                <a href="updatepass.php" style="font-size: 10px; margin-left: -190px; color:#f75134; display: none; " id="error"> Forgot password </a><br>
                <input type="submit" name="log" id="log" value="Login" class="btn">
            </form>
        </div>
    </section>
    <?php



    ?>
<script>
    function togglePassword(inputId) {
        const input = document.getElementById(inputId);
        const icon = input.nextElementSibling;

        if (input.type === "password") {
            input.type = "text";
            icon.classList.add("fa-eye-slash");
            icon.classList.remove("fa-eye");
            
        } else {
            input.type = "password";
            icon.classList.add("fa-eye");
            icon.classList.remove("fa-eye-slash");
        }
    }

</script>
</body>

</html>