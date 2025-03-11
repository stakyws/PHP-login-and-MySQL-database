<?php

if (isset($_POST["save"]))
{
    $con = mysqli_connect('localhost' , 'root' , '' , 'tags');

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $username = $_POST['username'];
        
        // تحديد مسار ملف الصورة المؤقت
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["img"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
        // السماح بأنواع معينة من صيغ الصور
        $allowed_types = array('jpg', 'jpeg', 'png', 'gif');
        if (!in_array($imageFileType, $allowed_types)) {
            echo "Only JPG, JPEG, PNG, GIF files are allowed.";
        }
        else 
        {
            // حفظ الصورة في الدليل المؤقت
            if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file))
            {
                @($insert = "UPDATE user SET image='$target_file' WHERE user_name='". strip_tags($_POST["username"]) ."'");
                @(mysqli_query($con, $insert));
            }
        }
    }
mysqli_close($con);
header("location:index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>File Image</title>
<link rel="stylesheet" href="assets/Sin_UP_IN.css">

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
    <div class="login3-container">
        <h1 class="txt_2">Profile <span>picture</span></h1>
        <form method="post" enctype="multipart/form-data">
            <img class="image" id="image" src="img/user.jpg">
            <input type="text" name="username" id="user" placeholder="Enter User Name">
            <input type="file" name="img" class="img" id="img"><br>
            <label for="img">اختيار صورة</label>
           <input name="save" type="submit" value="Save" class="btn" >
        </form>
    </div>
</section>

<script>
document.getElementById('img').addEventListener('change', function() {
    const file = this.files[0];
    const imageTypes = ['image/jpeg', 'image/png'];

    if (file && imageTypes.includes(file.type)) {
        document.getElementById('image').src = URL.createObjectURL(file);
    } else {
        alert('الرجاء اختيار ملف من نوع .jpg أو .png');
        this.value = ''; // إعادة تفريغ حقل اختيار الملف
    }
});
</script>

</body>
</html>

