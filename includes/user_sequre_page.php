<?php
session_start();
if(!isset($_SESSION['user_name']))
{
  if(isset($_REQUEST['prod_id']))
      {
        header("location:user_login.php?prod_id=".$_REQUEST['prod_id']);
      }
  else 
        header("location:user_login.php");
}
else
  {
      $session_user_name=$_SESSION['user_name'];
  }
?>