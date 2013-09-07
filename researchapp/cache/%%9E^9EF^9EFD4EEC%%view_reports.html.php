<?php /* Smarty version 2.6.19, created on 2012-11-21 02:13:58
         compiled from view_reports.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script type="text/javascript" src="js/ajaxpaging.js"></script>

<form name="grid" onSubmit="return validate(this)" action="" method="POST">

  <div id="right_content">
    <table cellpadding="0" cellspacing="0" border="0" width="98%" class="margin_table">

     <tr>
        <td valign="top" align="left" style="padding:5px 0 10px 0;">
<?php if ($_SESSION['adduser_new'] != ''): ?>
		<div class="status success">
            <p class="closestatus"><a title="Close" href="">x</a></p>
            <p><img alt="Success" src="images/icons/icon_success.png"><span><?php echo $_SESSION['adduser_new']; ?>
</span> .</p>
          </div><?php endif; ?><?php if ($_SESSION['deletepart'] != ''): ?>
		<div class="status error">
            <p class="closestatus"><a title="Close" href="">x</a></p>
            <p><img alt="Error" src="images/icons/icon_error.png"><span><?php echo $_SESSION['deletepart']; ?>
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
              <h2>Broadcast Reports</h2>
            </div>
            <div class="contentbox">
              <table cellpadding="0" cellspacing="0" border="0" width="100%">
                <tr class="title">
                  <td valign="top" align="left" width="10%">Broadcast&nbsp;Id</td>
                  <td valign="top" align="left" width="10%">Stream&nbsp;Name</td>
                  <td valign="top" align="left" width="10%">Send&nbsp;to&nbsp;Group</td>
		   <td valign="top" align="left" width="15%">No.&nbsp;of&nbsp;Particpants</td>

		<td valign="top" align="left" width="15%">Frequency</td>
		  <td valign="top" align="left" width="10%">Start&nbsp;Date</td>
                  <td valign="top" align="left" width="10%">Status</td>
                  <td valign="top" align="left" width="20%">No.&nbsp;of&nbsp;Msg&nbsp;Delivered</td>
                </tr>


</table>
<table cellpadding="0" cellspacing="0" border="0" width="100%" id="user_ajax">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ajaxuser.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</form>
<script>
function myFunction(str) {
	var answer = confirm("Are you sure want to delete this User?")
	if (answer){
		window.location = "?do=deleteuser&userid="+str;
	}
	else{
	}
}
</script>




