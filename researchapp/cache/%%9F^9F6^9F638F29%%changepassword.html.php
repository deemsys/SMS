<?php /* Smarty version 2.6.19, created on 2012-12-14 08:41:58
         compiled from changepassword.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<form method="post" action="?do=updatepassword">
  <div id="right_content">
    <table cellpadding="0" cellspacing="0" border="0" width="98%" class="margin_table">
      <tr>
        <td valign="top" align="left" style="padding:5px 0 10px 0;"><?php if ($_SESSION['pass'] != ''): ?>
		<div class="status success">
            <p class="closestatus"><a title="Close" href="">x</a></p>
            <p><img alt="Success" src="images/icons/icon_success.png"><span>Success!</span> <?php echo $_SESSION['pass']; ?>
.</p>
          </div><?php endif; ?></td>
      </tr>
      <tr>
        <td valign="top" align="left"><div>
            <div class="headings altheading">
              <h2>Change My Password</h2>
            </div>
            <div class="contentbox">
              <table cellpadding="0" cellspacing="0" border="0" width="100%">
                
                <tr class="row2">
                  <td valign="middle" align="right" class="input_txt" width="30%"><span class="err">*</span> Old Password :</td>
                  <td valign="top" align="left" class="input_txt" width="70%"><input type="password" name="oldpassword" class="input_txtbx" id="inp_id3" onmouseover="showTooltip('tooltip_id','inp_id3');" onmouseout="hideTooltip('tooltip_id');" value="<?php echo $this->_tpl_vars['errval']['oldpassword']; ?>
" /></br><span class="err"><?php echo $this->_tpl_vars['errmsg']['oldpassword']; ?>
</span></td>
                </tr>
                <tr class="row1">
                  <td valign="middle" align="right" class="input_txt"><span class="err">*</span> New Password :</td>
                  <td valign="top" align="left" class="input_txt"><input type="password" name="newpassword" class="input_txtbx" id="inp_id" onmouseover="showTooltip('tooltip_id','inp_id3');" onmouseout="hideTooltip('tooltip_id');" value="<?php echo $this->_tpl_vars['errval']['newpassword']; ?>
" /></br><span class="err"><?php echo $this->_tpl_vars['errmsg']['newpassword']; ?>
</span></td>
                </tr>
		<tr class="row2">
                  <td valign="middle" align="right" class="input_txt"><span class="err">*</span> Retype Password :</td>
                  <td valign="top" align="left" class="input_txt"><input type="password" name="cpassword" class="input_txtbx" id="inp_id" onmouseover="showTooltip('tooltip_id','inp_id3');" onmouseout="hideTooltip('tooltip_id');" value="<?php echo $this->_tpl_vars['errval']['cpassword']; ?>
" /></br><span class="err"><?php echo $this->_tpl_vars['errmsg']['cpassword']; ?>
</span></td>
                </tr>
		
                 
                 <tr class="row1">
                  <td valign="top" align="right">&nbsp;</td>
                  <td valign="top" align="left"><input type="submit" value="SAVE" class="submit_btn"></td>
                </tr>
              </table>
              
            </div>
          </div></td>
      </tr>
</form>
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>