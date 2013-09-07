<?php /* Smarty version 2.6.19, created on 2012-11-30 02:14:37
         compiled from forgetpassword.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: Medical SMS ::</title>
<link href="css/style.css"  rel="stylesheet" type="text/css" />
<link href="css/home.css" rel="stylesheet" type="text/css" />
</head>
<body>
<form name="login" action="?do=validforgetpassword" method="post">

<div id="login_div">
  <div class="login-top"></div>
  <div class="login-center">
    <ul class="login-list">
    <!--  <li style="padding-bottom:15px; margin-left:70px;">
        <input type="radio" />
        Admin
        <input type="radio" />
        Accounts
        <input type="radio" />
        Marketing</li>-->
<?php if ($_SESSION['errmsg'] != ''): ?>
      <li>
        <div class="error_div"><img src="images/Close.png" width="16" height="16" alt="error" /><b><?php echo $_SESSION['errmsg']; ?>
</b></div>
      </li>
<?php endif; ?>

      <li>
        <p>Enter Your Email Id</p>
      </li>
      <li>
        <input type="text" class="inputbx" name="email" />
	 <p><font color="Red"><?php echo $this->_tpl_vars['errmsg']['email']; ?>
</font></p>
      </li>
      
      
      <li><a href="#">
        <input type="submit" class="submit-btn" value=" " />
        </a></li>
      <!--<li><a href="?do=forgotpassword" class="forgot-password"></a></li>-->
    </ul>
  </div>

  <div class="login-bottom"></div>
</div>

</form>
</body>
</html>