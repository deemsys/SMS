<?php /* Smarty version 2.6.19, created on 2012-11-22 23:30:30
         compiled from view_partcipants.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script type="text/javascript" src="js/ajaxpaging.js"></script>


  <div id="right_content">
    <table cellpadding="0" cellspacing="0" border="0" width="98%" class="margin_table">
      <form name="grid" onSubmit="return validate(this)" action="" method="POST">
<td valign="top" align="left" style="padding:5px 0 10px 0;">
<?php if ($_SESSION['prive']['6'] != ''): ?>
<div class="del_div">

<p><label style="padding: 0pt 20px 0pt 0pt;"><input type="submit" name="delete" value="" class="icon1" onclick="form.action='?do=deleteparticipant'" /></label></p>
          </div>
<?php endif; ?>
</td><!--</form>--></tr><tr>
        <td valign="top" align="left" style="padding:5px 0 10px 0;">
<?php if ($_SESSION['adduser_new'] != ''): ?>
		<div class="status success">
            <p class="closestatus"><a title="Close" href="">x</a></p>
            <p><img alt="Success" src="images/icons/icon_success.png"><span><?php echo $_SESSION['adduser_new']; ?>
</span> .</p>
          </div><?php endif; ?><?php if ($_SESSION['deletepart'] != ''): ?>
		<div class="status success">
            <p class="closestatus"><a title="Close" href="">x</a></p>
            <p><img alt="Success" src="images/icons/icon_success.png"><span><?php echo $_SESSION['deletepart']; ?>
</span> .</p>
          </div><?php endif; ?><?php if ($_SESSION['upuser_new'] != ''): ?>
		<div class="status success">
            <p class="closestatus"><a title="Close" href="">x</a></p>
            <p><img alt="Success" src="images/icons/icon_success.png"><span><?php echo $_SESSION['upuser_new']; ?>
</span> .</p>
          </div><?php endif; ?>
		</td>
      </tr>
      <tr>
        <td valign="top" align="left"><div>
            <div class="headings altheading">
              <h2>View Participants</h2>
            </div>
            <div class="contentbox">


<div style="border:#ccc 2px solid; padding:15px; margin-bottom:15px;"><!--<form name="find_op" action="?do=viewparticipants" method="POST">--><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left" valign="middle" width="10%">Mobile No:</td>
    <td align="left" valign="middle" width="10%"><input type="text" name="moblie" class="input_txtbx1" id="moblie"></td>
    <td align="left" valign="middle" width="15%">&nbsp;&nbsp;Group Name:</td>
    <td align="left" valign="middle" width="10%"><?php echo $this->_tpl_vars['group']; ?>
</td>
    <td align="left" valign="middle" width="8%">&nbsp;&nbsp;City:</td>
    <td align="left" valign="middle" width="10%"><input type="text" name="city" id="city" class="input_txtbx1"></td>
    <td align="center" valign="middle" width="38%"><input type="button" class="submit_btn" value="Find" name="find" onclick="findpart()"></td>
  </tr>
</table>
<!--</form>-->
</div>

              <table cellpadding="0" cellspacing="0" border="0" width="100%">
                <tr class="title">
		<td valign="center" align="left" width="5%"><input type="checkbox" onclick="selectall(this.form)" value="" name="checkall"></td>
                  <td valign="top" align="left" width="10%">First&nbsp;Name</td>
                  <td valign="top" align="left" width="15%">Mobile Number</td>
                  <td valign="top" align="left" width="10%">City</td>
		  <td valign="top" align="left" width="10%">Age</td>

                  <td valign="top" align="left" width="15%">Associated&nbsp;Streams</td>
	
                  <td valign="top" align="left" width="25%">Action</td>
                </tr>

</table>
<table cellpadding="0" cellspacing="0" border="0" width="100%" id="user_ajax">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ajaxuser.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

</form>
     <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script>
function confirmation(val) {
	var answer = confirm("Are you Sure You Want to Delete Participant ?")
	if (answer){
		window.location = "?do=deleteparticipant&id="+val;
	}
	else{
		
	}
}
</script>

<script language="javascript">

function selectall(field)
{
	//field.getElementByTagName('checkbox');
	if(document.grid.checkall.checked==true)
	{
		for (i = 0; i < field.length; i++)
			field[i].checked = true ;
	}
	else
	{
		for(i = 0; i < field.length; i++)
			field[i].checked = false;
	}
}

function validate(fname)
{
// alert(fname);
var chks = document.getElementsByName('checkbox[]');

var hasChecked = false;
for (var i = 0; i < chks.length; i++)
{
if (chks[i].checked)
{
hasChecked = true;
break;
}
}
if (hasChecked == false)
{
alert("Please select at least one.");
return false;
}
return true;
}

function findpart()
{
// alert(document.getElementById("moblie").value);
// alert(document.getElementById("group").value);
// alert(document.getElementById("city").value);
window.location="?do=viewparticipants&moblie="+document.getElementById("moblie").value+"&group="+document.getElementById("group").value+"&city="+document.getElementById("city").value;
}
</script>