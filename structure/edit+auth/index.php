<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
	<title>LOGIN System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>صفحة تسجيل الدخول الخاصة بمولد البرامج الامتحانية</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>اسم المستخدم:</label>
     	<input type="text" name="uname" placeholder="اسم المستخدم"><br>

     	<label>كلمة المرور:</label>
     	<input type="password" name="password" placeholder="كلمة المرور"><br>

     	<button type="submit">تسجيل دخول</button>
     </form>
</body>
</html>