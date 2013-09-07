<?php /* Smarty version 2.6.19, created on 2012-12-13 23:35:32
         compiled from creategroup.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script type="text/javascript" src="js/calendar/calendar.js"></script>
<script type="text/javascript" src="js/calendar/calendar-en.js"></script>
<script type="text/javascript" src="js/calendar/calendar-setup.js"></script>
<link href="css/calendar_styles.css" rel="stylesheet" type="text/css" />


<form method="post" action="?do=updategroup&type=<?php echo $_GET['type']; ?>
">
  <div id="right_content">
    <table cellpadding="0" cellspacing="0" border="0" width="98%" class="margin_table">
      <tr>
        <td valign="top" align="left" style="padding:5px 0 10px 0;">

<?php if ($_SESSION['adduser'] != ''): ?>
		<div class="status success">
            <p class="closestatus"><a title="Close" href="">x</a></p>
            <p><img alt="Success" src="images/icons/icon_success.png"><span>Success!</span> <?php echo $_SESSION['adduser']; ?>
.</p>
          </div><?php endif; ?>
                                            
</td>
      </tr>
      <tr>
        <td valign="top" align="left"><div>
            <div class="headings altheading">
              <h2>Participant Groups
</h2>
            </div>
            <div class="contentbox">
              <table cellpadding="0" cellspacing="0" border="0" width="100%">
                
                <tr class="row1">
                  <td valign="middle" align="right" class="input_txt" width=30% ><span class="err">*</span> Group Name :</td>
                  <td valign="top" align="left" class="input_txt" width=70%><input type="text" name="name" class="input_txtbx" style="width:200px;"  id="inp_id3" onmouseover="showTooltip('tooltip_id','inp_id3');" onmouseout="hideTooltip('tooltip_id');" value="<?php echo $this->_tpl_vars['errval']['name']; ?>
" /></br><span class="err"><?php echo $this->_tpl_vars['errmsg']['name']; ?>
</span></td>
                </tr>

                <tr class="row2">
                  <td valign="middle" align="right" class="input_txt" width=30%><span class="err">*</span> Group Scope :</td>
                  <td valign="middle" align="left"  width=70%><input type="radio" name="scope" class="" id="scope" onclick="closelocal();"  value="0" <?php if ($this->_tpl_vars['errval']['scope'] == 0): ?> checked <?php endif; ?>/>&nbsp;Primary&nbsp;&nbsp; <input type="radio" name="scope"  id="scope"  value="1" <?php if ($this->_tpl_vars['errval']['scope'] == 1): ?> checked <?php endif; ?> onclick="openlocal();"/>&nbsp;Local</br><span class="err"><?php echo $this->_tpl_vars['errmsg']['scope']; ?>
</span></td>
                </tr>
		
		<tr class="row5" ><TD valign="middle" align="left" colspan="3"><div  id="local" <?php if ($this->_tpl_vars['errval']['scope'] == 1): ?> style="display:block;" <?php else: ?>  style="display:none;" <?php endif; ?> > <table cellpadding="0" cellspacing="0" border="0" width="100%">
		<tr class="row4">
                  <td valign="top" align="right" class="input_txt" width=30% >&nbsp;<b> Local Group Criteria </b></td>
                  <td valign="top" align="left" class="input_txt" width=70%></br><span class="err"></span></td>
                </tr>
		<tr class="row4">
                  <td valign="top" align="right" class="input_txt" width=30% ><span class="err">*</span> Select Group :</td>
                  <td valign="top" align="left" class="input_txt" width=70%><?php echo $this->_tpl_vars['group']; ?>
</br><span class="err"><?php echo $this->_tpl_vars['errmsg']['group']; ?>
</span></td>
                </tr>
		<tr class="row4">
                  <td valign="middle" align="right" class="input_txt" width="30%"><span class="err">*</span> City :</td>
                  <td valign="top" align="left" class="input_txt" width="70%"><input style="width:200px;" type="text" name="gcity" class="input_txtbx" id="inp_id3" onmouseover="showTooltip('tooltip_id','inp_id3');" onmouseout="hideTooltip('tooltip_id');" value="<?php echo $this->_tpl_vars['errval']['gcity']; ?>
" /></br><span class="err"><?php echo $this->_tpl_vars['errmsg']['gcity']; ?>
</span></td>
                </tr>
		<tr class="row4">
                  <td valign="middle" align="right" class="input_txt" width="30%" ><span class="err">*</span> Date Of Join From :</td>
                  <td valign="top" align="left" class="input_txt" width="70%"><input style="width:200px;" type="text" name="dojfrom" class="input_txtbx" id="startdate"  value="<?php echo $this->_tpl_vars['errval']['dojfrom']; ?>
" />&nbsp;&nbsp;<input type="button" id="startdatea" style="background:url(images/calendar.gif) left top no-repeat;  width:25px;outline:none; border:0;"> </br><span class="err"><?php echo $this->_tpl_vars['errmsg']['dojfrom']; ?>
</span></td>
                </tr>
<tr class="row4">
                  <td valign="middle" align="right" class="input_txt" width="30%" ><span class="err">*</span> Date Of Join To :</td>
                  <td valign="top" align="left" class="input_txt" width="70%"><input style="width:200px;" type="text" name="dojto" class="input_txtbx" id="enddate"  value="<?php echo $this->_tpl_vars['errval']['dojto']; ?>
" />&nbsp;&nbsp;<input type="button" id="enddatea" style="background:url(images/calendar.gif) left top no-repeat;  width:25px;outline:none; border:0;"></br><span class="err"><?php echo $this->_tpl_vars['errmsg']['dojto']; ?>
</span></td>
                </tr>
<tr class="row4">
                  <td valign="middle" align="right" class="input_txt" width="30%" ><span class="err">*</span> Age :</td>
                  <td valign="top" align="left" class="input_txt" width="70%"><?php echo $this->_tpl_vars['age']; ?>
</td>
                </tr>
<tr class="row4">
                 
                  <td valign="middle" align="right" class="input_txt" width="30%"><span class="err">*</span> Education :</td>
                  <td valign="top" align="left" class="input_txt" ><select name="edu" class="input_cmbbx1">
                    <option <?php if ($this->_tpl_vars['errval']['edu'] == School): ?>selected <?php endif; ?> value="School">School</option>
			<option   value="Some Collage" <?php if ($this->_tpl_vars['errval']['edu'] == 'Some Collage'): ?>selected <?php endif; ?>>Some Collage</option>
			<option value="Professional Degree" <?php if ($this->_tpl_vars['errval']['edu'] == 'Professional Degree'): ?>selected <?php endif; ?>>Professional Degree</option>
			<option value="Master Degree" <?php if ($this->_tpl_vars['errval']['edu'] == 'Master Degree'): ?>selected <?php endif; ?>>Master Degree</option>
                   </select></td>
                
                </tr>
</table></div></TD></tr>
		
		<tr class="row1">
                  <td valign="middle" align="right" class="input_txt" width="30%"><span class="err">*</span> Group Description :</td>
                  <td valign="top" align="left" class="input_txt" width="70%"><textarea style="width:200px; height:100px;" name="description" id="description" class="input_txtbx" style="width: 301px; height: 109px;"><?php echo $this->_tpl_vars['errval']['description']; ?>
</textarea></br><span class="err"><?php echo $this->_tpl_vars['errmsg']['description']; ?>
</span></td>
                </tr>

                 <tr class="row2">
                  <td valign="top" align="right">&nbsp;</td>
                  <td valign="top" align="left"><input type="submit" class="submit_btn1" value="Add Group"></td>
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
<script type="text/javascript">
function openlocal()
{
	if(document.getElementById('local').style.display=="none")
	{
		document.getElementById('local').style.display="block";
	}
	
}
function closelocal()
{
	if(document.getElementById('local').style.display=="block")
	{
		document.getElementById('local').style.display="none";
	}
	
}
</script>
<script type="text/javascript">
            Calendar.setup({
              inputField    : "startdate",
              button        : "startdatea",
              align         : "Tr"
            });
          </script>
<script type="text/javascript">
            Calendar.setup({
              inputField    : "enddate",
              button        : "enddatea",
              align         : "Tr"
            });
          </script>