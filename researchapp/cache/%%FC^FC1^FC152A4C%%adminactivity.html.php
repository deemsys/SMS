<?php /* Smarty version 2.6.19, created on 2012-11-28 22:01:29
         compiled from adminactivity.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script type="text/javascript" src="js/ajaxpaging.js"></script>

  <div id="right_content">
    <table cellpadding="0" cellspacing="0" border="0" width="98%" class="margin_table">
      <tr>
        <td valign="top" align="left" style="padding:5px 0 10px 0;">&nbsp;&nbsp;<!--<div class="info_div">
            <label><img src="images/icons/icon_edit.png" alt="Edit" /> Edit</label>
            <label><img src="images/icons/icon_approve.png" alt="Approve" /> Approve</label>
            <label><img src="images/icons/icon_unapprove.png" alt="Unapprove" /> Unapprove</label>
            <label><img src="images/icons/icon_delete.png" alt="Delete" /> Remove</label>
          </div>--></td>
      </tr>
      <tr>
        <td valign="top" align="left"><div>
            <div class="headings altheading">
              <h2>User Activity Logs</h2>
            </div>
            <div class="contentbox">
		<table cellpadding="0" cellspacing="0" border="0" width="100%"><tr><td width="30%" align="right"><b>User Name</b></td>

	<td width="10%" align="center"><b>:</b></td> 
	<td align="left" width="60%"><b><?php echo $this->_tpl_vars['ad_name']; ?>
</b></td></tr>
	
	<tr><td width="30%" align="right" colspan="3">&nbsp;</td>

	</tr></table>

              <table cellpadding="0" cellspacing="0" border="0" width="100%">
                <tr class="title">
                  <td valign="top" align="center" width="15%">Date & Time</td>
                  <td valign="top" align="left" width="15%">&nbsp;&nbsp;&nbsp;&nbsp;IP</td>
                  <td valign="top" align="left" width="70%">Actvity</td>
                </tr></table>
<table cellpadding="0" cellspacing="0" border="0" width="100%" id="user_ajax">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ajaxuser.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                <!--<tr class="row1" onmouseover="mouse_event(this,'row_hover');" onmouseout="mouse_event(this,'row1');">
                  <td valign="top" align="center">1</td>
                  <td valign="top" align="left"><a href="#">Lorem Ipsum dolar....</a></td>
                  <td valign="top" align="left">02</td>
                  <td valign="top" align="left">08/06/2012 1:16PM</td>
                  <td valign="top" align="left"> 001</td>
                  <td valign="top" align="left"><a href="#" title="" ><img src="images/icons/icon_edit.png" alt="Edit" /></a><a href="#" style="padding-right:10px;">Edit</a> <a href="#" title=""><img src="images/icons/icon_approve.png" alt="Approve" /></a><a href="#" style="padding-right:10px;">Approve</a><a href="#" title=""><img src="images/icons/icon_unapprove.png" alt="Unapprove" /></a><a href="#" style="padding-right:10px;">Unapprove</a><a href="#" title=""><img src="images/icons/icon_delete.png" alt="Delete" /></a><a href="#" style="padding-right:10px;">Remove</a></td>
                </tr>-->
                <!--
                <tr>
                  <td valign="top" align="right" colspan="6" class="">&nbsp;</td>
                </tr>
              </table>
              <div class="extrabottom">
              <ul class="pagination">
                <li class="text">Previous</li>
                <li class="page"><a href="#" title="">1</a></li>
                <li><a href="#" title="">2</a></li>
                <li><a href="#" title="">3</a></li>
                <li><a href="#" title="">4</a></li>
                <li class="text"><a href="#" title="">Next</a></li>
              </ul>
                
              </div>
               <div style="clear: both;"></div>-->
            </div>
          </div></td>
      </tr> 
     <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>