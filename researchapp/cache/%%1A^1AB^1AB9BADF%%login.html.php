<?php /* Smarty version 2.6.19, created on 2012-11-21 01:02:13
         compiled from login.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: Medical SMS ::</title>
<link href="css/style.css"  rel="stylesheet" type="text/css" />
<link href="css/home.css" rel="stylesheet" type="text/css" />
</head>
<body>
<form name="login" action="?do=login&action=logincheck" method="post">

<div id="login_div">
  <div class="login-top"></div>
  <div class="login-center">
    <ul class="login-list">
    
<?php if ($_SESSION['passw'] != ''): ?>
		<div class="status success">
            <p class="closestatus"><a title="Close" href="">x</a></p>
            <p><img alt="Success" src="images/icons/icon_success.png"><span><?php echo $_SESSION['passw']; ?>
</span> .</p>
          </div><?php endif; ?>
<?php if ($_SESSION['err'] != ''): ?>
      <li>
        <div class="error_div"><img src="images/Close.png" width="16" height="16" alt="error" /><b><?php echo $_SESSION['err']; ?>
</b></div>
      </li>
<?php endif; ?>

      <li>
       <!-- <div class="sucess_div"><img src="images/onebit_34.png" width="16" height="16" alt="sucess" />Sucessfully Registration</div>-->
      </li>
      <li>
        <p>Enter Your Email-Id</p>
      </li>
      <li>
        <input type="text" class="inputbx" name="username" />
	 <p><font color="Red"><?php echo $this->_tpl_vars['errmsg']['username']; ?>
</font></p>
      </li>
      <li>
        <p>Enter Your Password</p>
      </li>
      <li>
        <input type="password" class="inputbx" name="pwd"/>
	<p><font color="Red"><?php echo $this->_tpl_vars['errmsg']['pwd']; ?>
</font></p>	
      </li>
      <li><a href="#">
        <input type="submit" class="submit-btn" value=" " />
        </a></li>
      <li><a href="?do=forgotpassword" class="forgot-password"></a></li>
    </ul>
  </div>

  <div class="login-bottom"></div>
</div>

</form>
</body>
</html>