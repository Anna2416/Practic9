<?php
  session_start ();

   if ($_SESSION ['Login']=="admin"&& $_SESSION ['Passwd']=="1111") {
   $_SESSION['auth'] = true;
   Header ("Location: restricted.php"); 
   // Перенаправление
   } 
   else echo "Невірне введення,спробуйте ще раз <br> ";
   ?> 
