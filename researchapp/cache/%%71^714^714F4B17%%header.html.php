<?php /* Smarty version 2.6.19, created on 2012-11-21 01:02:47
         compiled from header.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: Medical SMS ::</title>
<link href="css/style.css"  rel="stylesheet" type="text/css" />
<link href="css/inner-clr.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/ddlevelsmenu.js"></script>
<script  type="text/javascript" src="js/clock.js" ></script>

<style type="text/css">
.ddsubmenustyle, .ddsubmenustyle ul {
	margin:0;
	padding:0;
	position: absolute;
	left: 0;
	top:0;
	list-style-type: none;
	border: 1px solid #444;
	border-bottom:0;
	visibility: hidden;
	z-index: 100;
	font-size:13px;
}
.ddsubmenustyle li {
	line-height:28px;
	font-size:13px;
}
.ddsubmenustyle li a {
	display:block;
	width:160px;
	color:#fff;
	text-decoration: none;
	padding:0 10px;
	background:#0a86af;
	border-bottom: 1px solid #fff;
	font-size:13px;
}
* html .ddsubmenustyle li { /*IE6 CSS hack*/
	display: inline-block;
	width: 140px; /*width of menu (include side paddings of LI A*/
}
.ddsubmenustyle li a:hover {
	background-color: #eee;
	border-bottom: 1px solid #ccc;
	color: #333333;
}
.downarrowpointer { /*CSS for "down" arrow image added to top menu items*/
	padding:0;
	border: 0;
}
.rightarrowpointer { /*CSS for "right" arrow image added to drop down menu items*/
	position: absolute;
	padding-top: 3px;
	left: 100px;
	border: 0;
}
.ddiframeshim {
	position: absolute;
	z-index: 500;
	background: transparent;
	border-width: 0;
	width: 0;
	height: 0;
	display: block;
}
</style>
</head>
<body onload="startTime();">



<div id="main">
  <div id="header">
    <div class="logo"><a href="?do=dashboard"><img src="images/logo.png" alt="Company Logo" /></a></div>
    <div class="top_link">
      <table border="0" cellspacing="0" cellpadding="0" style="padding:0;">
        <tr>
          <td rowspan="2" align="right" valign="middle">&nbsp;</td>
          <td align="right" valign="middle"><div class="date"><span id="time" class="time"></span></div></td>
        </tr>
        <tr>
          <td align="right" valign="middle"><span class="cart_txt">Welcome <?php echo $_SESSION['admin']['username']; ?>
 &nbsp;&nbsp;|&nbsp;&nbsp;<a href="?do=logout">Logout</a></span></td>
        </tr>
      </table>
    </div>
    <div class="clear"></div>
    <div id="ddtopmenubar">
      <div class="menu_container">
        <div class="menu_l"></div>
        <div class="menu_c">
	<?php 
		$obj=new Bin_Query();
		$sql="SELECT previlages FROM admin_log_table WHERE admin_id = '".$_SESSION['admin']['id']."'";
		$obj->executeQuery($sql);
		$rec=$obj->records[0]['previlages'];
		$previ=explode(",",$rec);
	 ?>	
          <ul class="menu">
            <li><a href="?do=dashboard" class="<?php if ($_GET['do'] == 'dashboard'): ?>select<?php else: ?>unselect<?php endif; ?>"><span><img src="images/icon_01.png" alt="" style="padding:5px 5px 0 0;" />Dashboard</span></a></li>
            <li><a href="#" class="<?php if ($_GET['do'] == 'createstream' || $_GET['do'] == 'viewstream' || $_GET['do'] == 'broadcast' || $_GET['do'] == 'viewreports' || $_GET['do'] == 'showstream' || $_GET['do'] == 'showstream'): ?>select<?php else: ?>unselect<?php endif; ?>" rel="ddsubmenu1"><span><img src="images/email.png" alt="" style="padding:5px 5px 0 0;" />Message Stream</span></a></li>

            <li><a href="#" class="<?php if ($_GET['do'] == 'addparticipants' || $_GET['do'] == 'viewparticipants' || $_GET['do'] == 'creategroup' || $_GET['do'] == 'editParticipants' || $_GET['do'] == 'partdicipantdetail' || $_GET['do'] == 'viewgroup' || $_GET['do'] == 'editgroup'): ?>select<?php else: ?>unselect<?php endif; ?>" rel="ddsubmenu2"><span><img src="images/icon_03.png" alt="" style="padding:5px 5px 0 0;" />Participants</span></a></li>

            <li><a href="#" class="<?php if ($_GET['do'] == 'addadminuser' || $_GET['do'] == 'viewadminuser' || $_GET['do'] == 'activityofadmin' || $_GET['do'] == 'edituser' || $_GET['do'] == 'userdetail'): ?>select<?php else: ?>unselect<?php endif; ?>" rel="ddsubmenu3"><span><img src="images/icon_06.png" alt="" style="padding:5px 5px 0 0;" />Admin User</span></a></li>
            <li><a href="#" class="<?php if ($_GET['do'] == 'addmailtemplate' || $_GET['do'] == 'changepassword' || $_GET['do'] == 'textmsg'): ?>select<?php else: ?>unselect<?php endif; ?>" rel="ddsubmenu4"><span><img src="images/icon_07.png" alt="" style="padding:5px 5px 0 0;" />Settings</span></a></li>
           
          </ul> <div class="clear"></div>
          <script type="text/javascript">	
						ddlevelsmenu.setup("ddtopmenubar", "topbar") 	
					</script>
          <ul id="ddsubmenu1" class="ddsubmenustyle">
	<?php 
	if($previ[0]!="")
	{
	 ?>	<li><a href="?do=createstream">Create Message Stream</a></li>
<?php 
	}
	 ?>
	<li><a href="?do=viewstream">View Stream</a></li>

            <?php 
	if($previ[3]!="")
	{
	 ?>	<li><a href="?do=broadcast">Send Stream</a></li>
<?php 
	}
	 ?>
            
	
            
            <li><a href="?do=viewreports">Report</a></li>
          </ul>
          <ul id="ddsubmenu2" class="ddsubmenustyle">
<?php 
	if($previ[4]!="")
	{
	 ?><li><a href="?do=addparticipants&type=0">Add Participants</a></li>
<?php 
	}
	 ?>
            
            <li><a href="?do=viewparticipants">View participants</a></li>
            <li><a href="?do=creategroup&type=0">Add Participant Groups</a></li>
		<li><a href="?do=viewgroup">View Participant Groups</a></li>
          </ul>
          <ul id="ddsubmenu3" class="ddsubmenustyle">
<?php 
	if($previ[7]!="")
	{
	 ?><li><a href="?do=addadminuser">Add Admin User</a></li>
<?php 
	}
	 ?>
            
            <li><a href="?do=viewadminuser">View Admin User</a></li>
            <li><a href="?do=activityofadmin">User Activity Logs</a></li>
          </ul>
          <ul id="ddsubmenu4" class="ddsubmenustyle">
<?php 
	if($previ[10]!="")
	{
	 ?><li><a href="?do=textmsg">Text Message API settings</a></li>
<?php 
	}
	 ?>
            <?php 
	if($previ[11]!="")
	{
	 ?><li><a href="?do=addmailtemplate&id=welcomeadminuser">Mail Templates</a></li>
<?php 
	}
	 ?>
            
            <li><a href="?do=changepassword">Change My Password</a></li>
          </ul>
        </div>
        <div class="menu_r"></div>
        <div class="clear"></div>
      </div>
    </div>
    <div class="clear"></div>
  </div>