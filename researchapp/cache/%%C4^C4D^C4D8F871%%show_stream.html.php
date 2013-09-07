<?php /* Smarty version 2.6.19, created on 2012-11-22 23:30:14
         compiled from show_stream.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<form action="?do=updatestream&streamid=<?php echo $_GET['streamid']; ?>
" method="post">
  <div id="right_content">
    <table cellpadding="0" cellspacing="0" border="0" width="98%" class="margin_table">
      
      <tr>
        <td valign="top" align="left"><div>
            <div class="headings altheading">
              <h2>Show Stream</h2>
            </div>
            <div class="contentbox">
              <table cellpadding="0" cellspacing="0" border="0" width="100%">
<?php echo $this->_tpl_vars['showstream']; ?>

               
                </table><div id="multichoice"></div><table width="100%" border="0" cellspacing="0" cellpadding="0"></table>
            
              <div style="clear: both;"></div></div>
            </div>
          </div></td>
      </tr></form>
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>








                                          