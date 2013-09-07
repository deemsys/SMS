<?php /* Smarty version 2.6.19, created on 2012-12-13 23:36:56
         compiled from edituser.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<form method="post" action="?do=updateadminuser&userid=<?php echo $_GET['userid']; ?>
">
  <div id="right_content">
    <table cellpadding="0" cellspacing="0" border="0" width="98%" class="margin_table">
      <tr>
        <td valign="top" align="left" style="padding:5px 0 10px 0;"><!--<div class="info_div">
            <label><img src="images/icons/icon_edit.png" alt="Edit" /> Edit</label>
            <label><img src="images/icons/icon_approve.png" alt="Approve" /> Approve</label>
            <label><img src="images/icons/icon_unapprove.png" alt="Unapprove" /> Unapprove</label>
            <label><img src="images/icons/icon_delete.png" alt="Delete" /> Remove</label>
          </div>-->
		<!--<?php if (count ( $this->_tpl_vars['errmsg'] ) > 0): ?>
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
              <h2>Edit Admin User </h2>
            </div>
            <div class="contentbox">
              <table cellpadding="0" cellspacing="0" border="0" width="100%">
                
                <?php echo $this->_tpl_vars['edit_adminuser']; ?>

                
                 
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