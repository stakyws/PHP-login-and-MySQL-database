<?php
if (@(isset($_POST["send"]))) {
    if ($_POST['pass'] != $_POST['newpass']) {
    } else {
        $con = mysqli_connect('localhost', 'root', '', 'tags');
        $insert = "insert into user (user_name, email, password, new_password) values ('" . strip_tags($_POST['user_name']) . "','" . strip_tags($_POST['email']) . "','" . strip_tags($_POST['pass']) . "' ,'" . strip_tags($_POST['newpass']) . "')";
        mysqli_query($con, $insert);
        mysqli_close($con);
        header("location:image.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign UP</title>
    <link rel="stylesheet" href="assets/Sin_UP_IN.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body>
    <header>
        <div class="hed">
            <div class="logo">
                <h1 class="txt_1">Sin Up</h1>
            </div>
            <ul>
                <li><a href="#">btn</a></li>
                <li><a href="#">Typ</a></li>
                <li><a href="#">Pach</a></li>
                <li><a href="#">Corces</a></li>
            </ul>
        </div>
    </header>
    <section id="login">

        <div class="login1-container">
            <h1 class="txt_2">USE <span>Login</span></h1>
            <form method="post">
                <input type="text" name="user_name" placeholder="Username" required><br>
                <input type="text" name="email" placeholder="Email" required><br>

                <div class="password-container">
                    <input type="password" name="pass" placeholder="Password" id="p1" required>
                    <i class="fas fa-eye toggle-password" onclick="togglePassword('p1')"></i>
                </div>
                <div class="password-container">
                    <input type="password" name="newpass" placeholder="New password" id="p2" required>
                    <i class="fas fa-eye toggle-password" onclick="togglePassword('p2')"></i>
                </div>

                <p id="passerror" class="perror" style="font-size: 10px; margin-left: -200px; display: none;"> كلمه المرور خاطئه</p>
                <input name="send" type="submit" value="Send" class="btn" onclick="perror()"> <!--onclick="cc1()" -->
            </form>
        </div>
    </section>
</body>

</html>

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

<!-- <script>
    // function perror() {
    //     if (document.getElementById = ("p1").innerHTML != document.getElementById("p2").innerHTML) {
    //         p1.style.display = "block";
    //         // document.getElementById=("hh1").innerHTML=text1+""+text2; 
    //     }
    // }
</script> -->