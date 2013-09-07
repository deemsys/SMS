<?php /* Smarty version 2.6.19, created on 2012-11-22 23:32:55
         compiled from txtmsg.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<form method="post" action="?do=inserttxtmsg">

  <div id="right_content">
    <table cellpadding="0" cellspacing="0" border="0" width="98%" class="margin_table">
      <tr>
        <td valign="top" align="left" style="padding:5px 0 10px 0;"><?php if ($_SESSION['msg'] != ''): ?>
		<div class="status success">
            <p class="closestatus"><a title="Close" href="">x</a></p>
            <p><img alt="Success" src="images/icons/icon_success.png"><span><?php echo $_SESSION['msg']; ?>
</span> .</p>
          </div><?php endif; ?></td>
      </tr>

      <tr>
        <td valign="top" align="left"><div>
            <div class="headings altheading">
              <h2>Text Message API Setting</h2>
            </div>
            <div class="contentbox">
              <table cellpadding="0" cellspacing="0" border="0" width="100%">
                <tr class="row1">
                  
                  <td valign="top" align="left" class="input_txt" colspan="2"><img src="images/twillo.jpg" width="150px"></td>
                </tr>
                <tr class="row2">
                  <td valign="middle" align="right" class="input_txt" width="30%"><span class="err">*</span> ACCOUNT SID  :</td>
                  <td valign="top" align="left" class="input_txt" width="70%"><input type="text" name="asid" class="input_txtbx" id="inp_id3" onmouseover="showTooltip('tooltip_id','inp_id3');" onmouseout="hideTooltip('tooltip_id');" value="<?php echo $this->_tpl_vars['reco']['account_sid']; ?>
" /></br><span class="err"><?php echo $this->_tpl_vars['errmsg']['asid']; ?>
</span></td>
                </tr>
		<tr class="row1">
                  <td valign="middle" align="right" class="input_txt"><span class="err">*</span> AUTH TOKEN :</td>
                  <td valign="top" align="left" class="input_txt"><input type="text" name="token" class="input_txtbx" id="inp_id" onmouseover="showTooltip('tooltip_id','inp_id3');" onmouseout="hideTooltip('tooltip_id');" value="<?php echo $this->_tpl_vars['reco']['auth_token']; ?>
" /></br><span class="err"><?php echo $this->_tpl_vars['errmsg']['token']; ?>
</span></td>
                </tr>
		<tr class="row2">
                  <td valign="middle" align="right" class="input_txt"><span class="err">*</span> NUMBER :</td>
                  <td valign="top" align="left" class="input_txt"><input type="text" name="mnumber" class="input_txtbx" id="inp_id" onmouseover="showTooltip('tooltip_id','inp_id3');" onmouseout="hideTooltip('tooltip_id');" value="<?php echo $this->_tpl_vars['reco']['mob_num']; ?>
" /></br><span class="err"><?php echo $this->_tpl_vars['errmsg']['mnumber']; ?>
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