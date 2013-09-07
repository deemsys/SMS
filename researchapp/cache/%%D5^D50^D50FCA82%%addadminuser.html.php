<?php /* Smarty version 2.6.19, created on 2012-12-13 20:54:45
         compiled from addadminuser.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<form method="post" action="?do=insertadminuser">
  <div id="right_content">
    <table cellpadding="0" cellspacing="0" border="0" width="98%" class="margin_table">
      <tr>
        <td valign="top" align="left" style="padding:5px 0 10px 0;"><!--<div class="info_div">
            <label><img src="images/icons/icon_edit.png" alt="Edit" /> Edit</label>
            <label><img src="images/icons/icon_approve.png" alt="Approve" /> Approve</label>
            <label><img src="images/icons/icon_unapprove.png" alt="Unapprove" /> Unapprove</label>
            <label><img src="images/icons/icon_delete.png" alt="Delete" /> Remove</label>
          </div>--><!--<?php if (count ( $this->_tpl_vars['errmsg'] ) > 0): ?>
		<div class="status error">
            <p class="closestatus"><?php $_from = $this->_tpl_vars['errmsg']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['err'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['err']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['err']):
        $this->_foreach['err']['iteration']++;
?><a href="" title="Close">x</a></p>
            <p><img src="images/icons/icon_error.png" alt="Error" /><span>Error!</span> <?php echo $this->_tpl_vars['err']; ?>
.</p> <?php endforeach; endif; unset($_from); ?>
          </div><?php endif; ?>--></td>
      </tr>
      <tr>
        <td valign="top" align="left"><div>
            <div class="headings altheading">
              <h2>Add Admin User</h2>
            </div>
            <div class="contentbox">
              <table cellpadding="0" cellspacing="0" border="0" width="100%">
                
                <tr class="row2">
                  <td valign="middle" align="right" class="input_txt" width="30%"><span class="err">*</span> Name :</td>
                  <td valign="top" align="left" class="input_txt" width="70%"><input type="text" name="name" class="input_txtbx" id="inp_id3" onmouseover="showTooltip('tooltip_id','inp_id3');" onmouseout="hideTooltip('tooltip_id');" value="<?php echo $this->_tpl_vars['errval']['name']; ?>
" /></br><span class="err"><?php echo $this->_tpl_vars['errmsg']['name']; ?>
</span></td>
                </tr>
		<tr class="row1">
                  <td valign="middle" align="right" class="input_txt"><span class="err">*</span> E-mail :</td>
                  <td valign="top" align="left" class="input_txt"><input type="text" name="email" class="input_txtbx" id="inp_id" onmouseover="showTooltip('tooltip_id','inp_id3');" onmouseout="hideTooltip('tooltip_id');" value="<?php echo $this->_tpl_vars['errval']['email']; ?>
" /></br><span class="err"><?php echo $this->_tpl_vars['errmsg']['email']; ?>
</span></td>
                </tr>
                <tr class="row2">
                  <td valign="middle" align="right" class="input_txt"><span class="err">*</span> Password :</td>
                  <td valign="top" align="left" class="input_txt"><input type="password" name="password" class="input_txtbx" id="inp_id" onmouseover="showTooltip('tooltip_id','inp_id3');" onmouseout="hideTooltip('tooltip_id');" value="<?php echo $this->_tpl_vars['errval']['password']; ?>
" /></br><span class="err"><?php echo $this->_tpl_vars['errmsg']['password']; ?>
</span></td>
                </tr>
		<tr class="row1">
                  <td valign="middle" align="right" class="input_txt"><span class="err">*</span> Retype password :</td>
                  <td valign="top" align="left" class="input_txt"><input type="password" name="repassword" class="input_txtbx" id="inp_id" onmouseover="showTooltip('tooltip_id','inp_id3');" onmouseout="hideTooltip('tooltip_id');" value="<?php echo $this->_tpl_vars['errval']['repassword']; ?>
" /></br><span class="err"><?php echo $this->_tpl_vars['errmsg']['repassword']; ?>
</span></td>
                </tr>
		<tr class="row2">
                  <td valign="middle" align="right" class="input_txt"><span class="err">*</span> Mobile :</td>
                  <td valign="top" align="left" class="input_txt"><input type="text" name="mobile" class="input_txtbx" id="inp_id" onmouseover="showTooltip('tooltip_id','inp_id3');" onmouseout="hideTooltip('tooltip_id');" value="<?php echo $this->_tpl_vars['errval']['mobile']; ?>
" /></br><span class="err"><?php echo $this->_tpl_vars['errmsg']['mobile']; ?>
</span></td>
                </tr>
		<tr class="row1">
                  <td align="right" valign="middle" class="input_txt"><span class="err">*</span> Address :</td>
                  <td align="left" valign="top" class="input_txt"><textarea onmouseout="hideTooltip('tooltip_id');" onmouseover="showTooltip('tooltip_id','inp_id5');" id="inp_id5" cols="" rows="5" name="address" class="input_txtarea"><?php echo $this->_tpl_vars['errval']['address']; ?>
</textarea></br><span class="err"><?php echo $this->_tpl_vars['errmsg']['address']; ?>
</span></td>
                </tr>
                <tr class="row2">
                  <td valign="top" align="right" class="input_txt"> Privileges  :</td>
                  <td valign="top" align="left" class="input_txt">
<table cellpadding="0" cellspacing="0" border="0" width="100%">
<tr class="row3">
<td><b>Stream</b></td>
<td><input type="checkbox"  value="addstream" name="addstream" <?php if ($this->_tpl_vars['errval']['addstream'] == addstream): ?> checked <?php endif; ?> /> Add  </td>
<td><input type="checkbox"  value="editstream" name="editstream" <?php if ($this->_tpl_vars['errval']['editstream'] == editstream): ?> checked <?php endif; ?> /> Edit</td>
<td><input type="checkbox"  value="deletestream" name="deletestream" <?php if ($this->_tpl_vars['errval']['deletestream'] == deletestream): ?> checked <?php endif; ?> /> Delete</td>
<td><input type="checkbox"  value="broadcaststream" name="broadcaststream" <?php if ($this->_tpl_vars['errval']['broadcaststream'] == broadcaststream): ?> checked <?php endif; ?> /> Broadcast</td>
</tr>

<tr class="row3">
<td><b>Participant</b></td>
<td><input type="checkbox"  value="addparticipant" name="addparticipant" <?php if ($this->_tpl_vars['errval']['addparticipant'] == addparticipant): ?> checked <?php endif; ?> /> Add  </td>
<td><input type="checkbox"  value="editparticipant" name="editparticipant" <?php if ($this->_tpl_vars['errval']['editparticipant'] == editparticipant): ?> checked <?php endif; ?> /> Edit</td>
<td colspan="2"><input type="checkbox"  value="deleteparticipant" name="deleteparticipant" <?php if ($this->_tpl_vars['errval']['deleteparticipant'] == deleteparticipant): ?> checked <?php endif; ?> /> Delete</td>
</tr>

<tr class="row3">
<td><b>Admin user</b></td>
<td ><input type="checkbox"  value="addadminuser" name="addadminuser" <?php if ($this->_tpl_vars['errval']['addadminuser'] == addadminuser): ?> checked <?php endif; ?> /> Add </td>
<td ><input type="checkbox"  value="edituser" name="edituser" <?php if ($this->_tpl_vars['errval']['edituser'] == edituser): ?> checked <?php endif; ?> />  Edit </td>
<td colspan="2"><input type="checkbox"  value="deleteuser" name="deleteuser" <?php if ($this->_tpl_vars['errval']['deleteuser'] == deleteuser): ?> checked <?php endif; ?> /> Delete </td>
</tr>

<tr class="row3">
<td><b>Settings</b></td>
<td colspan="2"><input type="checkbox"  value="modifysettings" name="modifysettings" <?php if ($this->_tpl_vars['errval']['modifysettings'] == modifysettings): ?> checked <?php endif; ?> /> Text Message API   </td>
<td colspan="2"><input type="checkbox"  value="mailtemplate" name="mailtemplate" <?php if ($this->_tpl_vars['errval']['mailtemplate'] == mailtemplate): ?> checked <?php endif; ?> /> Mail Template   </td>
</tr>
</table>
</td>
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