<?php /* Smarty version 2.6.19, created on 2012-11-23 02:23:27
         compiled from create_stream.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<form action="?do=insertstream" method="post">
  <div id="right_content">
    <table cellpadding="0" cellspacing="0" border="0" width="98%" class="margin_table">
      <tr>
        <td valign="top" align="left" style="padding:5px 0 10px 0;"></td>
      </tr>
      <tr>
        <td valign="top" align="left"><div>
            <div class="headings altheading">
              <h2>Create Stream</h2>
            </div>
            <div class="contentbox">
              <table cellpadding="0" cellspacing="0" border="0" width="100%">
                <tr class="row1">
                  <td valign="middle" align="right" class="input_txt" width="200" width="30%">Stream Id :</td>
                  <td valign="top" align="left" class="input_txt" width="70%"><?php echo $this->_tpl_vars['rec_id']; ?>
<input type="hidden" name="st_id" value="<?php echo $this->_tpl_vars['rec_id']; ?>
"></td>
                </tr>
                <tr class="row2">
                  <td valign="middle" align="right" class="input_txt" width="30%"><span class="err">*</span> Stream Name :</td>
                  <td valign="top" align="left" class="input_txt" width="70%"><input type="text" name="sname" class="input_txtbx" id="inp_id3" onmouseover="showTooltip('tooltip_id','inp_id3');" onmouseout="hideTooltip('tooltip_id');" value="<?php echo $this->_tpl_vars['errval']['sname']; ?>
" /></br> <span class="err"><?php echo $this->_tpl_vars['errmsg']['sname']; ?>
</span></td>
                </tr>
                 <tr class="row1">
                  <td valign="middle" align="right" class="input_txt" width="30%"><span class="err">*</span> Description :</td>
                  <td valign="top" align="left" class="input_txt" width="70%"><textarea name="sdes" class="input_txtarea"  rows="5" cols="" id="inp_id5" onmouseover="showTooltip('tooltip_id','inp_id5');" onmouseout="hideTooltip('tooltip_id');" /><?php echo $this->_tpl_vars['errval']['sdes']; ?>
</textarea></br><span class="err"><?php echo $this->_tpl_vars['errmsg']['sdes']; ?>
</span></td>
                </tr>
                <tr class="row2">
                  <td valign="middle" align="right" class="input_txt" width="30%"><span class="err">*</span> Message 1 :</td>
                  <td valign="top" align="left" class="input_txt" width="70%"><textarea class="input_txtarea" name="message[]" rows="5" cols="" id="inp_id5" /><?php echo $this->_tpl_vars['errval']['message'][0]; ?>
</textarea> </br><span class="err"><?php echo $this->_tpl_vars['errmsg']['message0']; ?>
</span></td>
                </tr></table><div id="multichoice"><?php echo $this->_tpl_vars['errmessage']; ?>
</div><table width="100%" border="0" cellspacing="0" cellpadding="0"></table>
		<table width="100%">
                 <tr class="row1">
                  <td valign="center" align="right" width="30%" > <p style="width:180px;"><a href="javascript:void(0);" onclick="addMultichoice('multichoice');" style="text-decoration:none;" ><input type="button" value="Add one more Message" class="submit_btn2" name="" /></a></p> </td>
		<td valign="top" align="right" width="30%" > <div style="float:center; padding:0px 75% 0px 0px;"> <input type="submit" value="Save Stream" class="submit_btn1" /> </div></td>
                </tr>
              </table>
             
              <div style="clear: both;"></div></div>
            </div>
          </div></td>
      </tr></form>
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<script type="text/javascript">
var $im=1;
var flagm=1;
function addMultichoice(divName)
{
var xx=document.getElementsByName('message[]').length;
var $in = xx+1;

	
	var newdiv = document.createElement('div');

	newdiv.innerHTML = '<table width="100%" border="0" cellspacing="0" cellpadding="0" id="newtbl'+$im+'"><tr class="row2"><td valign="middle" align="right" class="input_txt" width="30%">Message '+$in+' :</td><td valign="top" align="left" class="input_txt" width="70%"><textarea class="input_txtarea" name="message[]" rows="5" cols="" id="inp_id5" ></textarea></td></tr><tr class="row1"><td align="right" valign="top">&nbsp;</td><td align="left" valign="top"><a javascript:void(0);" onclick="removechoice('+$im+')" style="text-decoration:none;"><input type="submit" class="submit_btn" value="CANCEL"  /></a></td></tr></table>';
	document.getElementById(divName).appendChild(newdiv);
	$im++;
	flagm++;

	}
	function removechoice(id)
	{
		id='newtbl'+id;
		var child = document.getElementById(id)
		var parentDiv = child.parentNode;
		parentDiv.removeChild(child);

	}

</script>


