<?php
    require_once("./connection.php");
    if (isset($_POST["btn_submit"])) {
        $username   ="";
        $password = "";
		// lấy thông tin người dùng
		$username = $_POST["txtname"];
		$password = $_POST["txtpass"];
		
		if ($username == "admin" && $password =="admin") {
			echo "dang nhap thanh cong";
            header("Location: home.php");
		}else{
			$sql = "select * from user where Name = '$username' and Pass = '$password' ";
			$query = mysqli_query($conn,$sql);
			$num_rows = mysqli_num_rows($query);
			if ($num_rows==0) {
				echo "tên đăng nhập hoặc mật khẩu không đúng !";
			}
		}
	}
?>
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NamNYH</title>
</head>
<body>
    <h2>Form Login</h2>
    <form action="" method="post">
        UserName: <input type="text" name="txtname" />
        PassWord: <input type="password" name="txtpass"/>
        <button name="btn_submit">Login</button>
    </form>

</body>
</html>