<?php /* Smarty version 2.6.19, created on 2012-11-22 23:30:08
         compiled from view_stream.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script type="text/javascript" src="js/ajaxpaging.js"></script>
<form name="grid" onSubmit="return validate(this)" action="" method="POST">
  <div id="right_content">
    <table cellpadding="0" cellspacing="0" border="0" width="98%" class="margin_table">
      <tr><td valign="top" align="left" style="padding:5px 0 10px 0;">
<?php if ($_SESSION['prive']['2'] != ''): ?>
<div class="del_div">
             
            <p><label style="padding: 0pt 20px 0pt 0pt;"><input type="submit" name="delete" value="" class="icon1" onclick="form.action='?do=deletestream'" /></label></p>

          </div>
<?php endif; ?>
</td></tr>

        <td valign="top" align="left" style="padding:5px 0 10px 0;">
		
	<?php if ($_SESSION['delstream'] != ''): ?>
		<div class="status success">
            <p class="closestatus"><a title="Close" href="">x</a></p>
            <p><img alt="Success" src="images/icons/icon_success.png"><span><?php echo $_SESSION['delstream']; ?>
</span> .</p>
          </div><?php endif; ?><?php if ($_SESSION['upstream'] != ''): ?>
		<div class="status success">
            <p class="closestatus"><a title="Close" href="">x</a></p>
            <p><img alt="Success" src="images/icons/icon_success.png"><span><?php echo $_SESSION['upstream']; ?>
</span> .</p>
          </div><?php endif; ?><?php if ($_SESSION['stream'] != ''): ?>
		<div class="status success">
            <p class="closestatus"><a title="Close" href="">x</a></p>
            <p><img alt="Success" src="images/icons/icon_success.png"><span><?php echo $_SESSION['stream']; ?>
</span> .</p>
          </div><?php endif; ?>
</td>
      </tr>
      <tr>
        <td valign="top" align="left"><div>
            <div class="headings altheading">
              <h2>View Stream</h2>
            </div>
            <div class="contentbox">
              <table cellpadding="0" cellspacing="0" border="0" width="100%">
                <tr class="title">
		<td valign="center" align="left" width="5%"><input type="checkbox" onclick="selectall(this.form)" value="" name="checkall"></td>
                  <td valign="top" align="left" width="10%">Stream ID</td>
		<td valign="top" align="left" width="15%">Name</td>
		<td valign="top" align="left" width="15%">Description</td>
                  <td valign="top" align="left" width="15%">No of Messages</td>
                  <td valign="top" align="left" width="15%">Created By</td>
		  <td valign="top" align="center" width="25%">Action</td>
<!--<?php if ($_SESSION['prive']['1'] != '' || $_SESSION['prive']['2'] != ''): ?>
                  <td valign="top" align="center" width="25%">Action</td>
<?php else: ?>
 <td valign="top" align="center" width="25%"></td>
<?php endif; ?>-->

                </tr></table>
<table cellpadding="0" cellspacing="0" border="0" width="100%" id="user_ajax">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ajaxviewstream.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
              </table>
            </div>
          </div></td>
      </tr>
     <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</form>
<script type="text/javascript">
function streamdelete(str) {

	var answer = confirm("Are you sure want to delete this Stream?")
	if (answer){
		window.location = "?do=deletestream&streamid="+str;
	}
	else{
// 		alert("Thanks for sticking around!")
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
</script>