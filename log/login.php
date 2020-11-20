<!DOSTUPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="frm">
<?php
    session_start (); 

   if (!isset ($_GET ['go'])){ 
      echo "<form method='POST' name='authorization' action='auth.php'>
         Логин:&nbsp&nbsp <input type='text' name='username'><br>
         Пароль: <input type='password' name='user_password'><br>
         <input type='submit' value='Войти'>
     </form>";
   } 
   else { 
      $_SESSION ['Login']=$_GET ['login']; 
      $_SESSION ['Passwd']=$_GET ['passwd']; 
      //include "auth.php";
   } 
   ?>
    </div>
</body>
</html>