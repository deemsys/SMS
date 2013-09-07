<?php /* Smarty version 2.6.19, created on 2012-11-23 02:21:50
         compiled from add-participants.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

  <div id="right_content">
<?php if ($_GET['type'] == '0'): ?>



<form action="?do=addparticipants&action=insert&type=<?php echo $_GET['type']; ?>
" method="post" name="update" id="update">

    <table cellpadding="0" cellspacing="0" border="0" width="98%" class="margin_table">
      <tr>
        <td valign="top" align="left" style="padding:5px 0 10px 0;">&nbsp;


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
              <h2>Add Participants</h2>
            </div>
            <div class="contentbox">
              <table cellpadding="0" cellspacing="0" border="0" width="100%">
  <tr>
    <td align="left" valign="top" width="50%" style="padding-right:25px;">
    <h2 class="quck-txt">Quick Info</h2>
    <table cellpadding="0" cellspacing="0" border="0" width="100%">
                        <tr class="row1">
                  <td valign="middle" align="left" class="input_txt"><span class="err">*</span> First Name :</td>
                  <td valign="top" align="left" class="input_txt"><input type="text" class="input_txtbx1" id="inp_id" onmouseover="showTooltip('tooltip_id','inp_id3');" onmouseout="hideTooltip('tooltip_id');" value="<?php echo $this->_tpl_vars['errval']['fname']; ?>
" name="fname" /></br><font color="Red" size="+1"><?php echo $this->_tpl_vars['errmsg']['fname']; ?>
</font></td>
                </tr>

		 <tr class="row2">
                  <td valign="middle" align="left" class="input_txt"><span class="err">*</span> Last Name :</td>
                  <td valign="top" align="left" class="input_txt"><input type="text" class="input_txtbx1" id="inp_id" onmouseover="showTooltip('tooltip_id','inp_id3');" onmouseout="hideTooltip('tooltip_id');" value="<?php echo $this->_tpl_vars['errval']['lname']; ?>
" name="lname"/></br><font color="Red" size="+1"><?php echo $this->_tpl_vars['errmsg']['lname']; ?>
</font></td>
                </tr> 
		<tr class="row1">
                  <td valign="middle" align="left" class="input_txt"><span class="err">*</span> Mobile No :</td>
                  <td valign="top" align="left" class="input_txt"><input type="text" class="input_txtbx1" id="inp_id" onmouseover="showTooltip('tooltip_id','inp_id3');" onmouseout="hideTooltip('tooltip_id');" value="<?php echo $this->_tpl_vars['errval']['mobile']; ?>
" name="mobile" /></br><font color="Red" size="+1"><?php echo $this->_tpl_vars['errmsg']['mobile']; ?>
</font></td>
                </tr> 
		<tr class="row2">
                  <td valign="middle" align="left" class="input_txt"><span class="err">*</span> Email-Id&nbsp;&nbsp;&nbsp; :</td>
                  <td valign="top" align="left" class="input_txt"><input type="text" class="input_txtbx1" id="inp_id" onmouseover="showTooltip('tooltip_id','inp_id3');" onmouseout="hideTooltip('tooltip_id');" value="<?php echo $this->_tpl_vars['errval']['email']; ?>
" name="email" /></br><font color="Red" size="+1"><?php echo $this->_tpl_vars['errmsg']['email']; ?>
</font></td>
                </tr> 

	
		<tr class="row1">
                  <td valign="middle" align="left" class="input_txt"><span class="err">*</span> Gender &nbsp;&nbsp;&nbsp;&nbsp;:</td>
                  <td valign="top" align="left" class="input_txt"><input type="radio" name="gender" value="0" class="input_txt" <?php if ($this->_tpl_vars['errval']['gender'] == 0): ?> checked <?php endif; ?>/>Male&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="1" class="input_txt" <?php if ($this->_tpl_vars['errval']['gender'] == 1): ?> checked <?php endif; ?>/>Female&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="2" class="input_txt" <?php if ($this->_tpl_vars['errval']['gender'] == 2): ?> checked <?php endif; ?>/>Transgender</td>
                </tr>
		 <tr class="row2">
                  <td valign="middle" align="left" class="input_txt"><span class="err">*</span> Age&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</td>
                  <td valign="top" align="left" class="input_txt"><?php echo $this->_tpl_vars['age']; ?>
</td>
                </tr>
		
                <tr class="row1">
                  <td valign="middle" align="left" class="input_txt"><span class="err">*</span> City&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</td>
                  <td valign="top" align="left" class="input_txt"><input type="text" class="input_txtbx1" id="inp_id" onmouseover="showTooltip('tooltip_id','inp_id3');" onmouseout="hideTooltip('tooltip_id');" value="<?php echo $this->_tpl_vars['errval']['city']; ?>
" name="city"/></br><font color="Red" size="+1"><?php echo $this->_tpl_vars['errmsg']['city']; ?>
</font></td>
                </tr>
		 <tr class="row2">
                  <td valign="middle" align="left" class="input_txt"><span class="err">*</span> Education :</td>
                  <td valign="top" align="left" class="input_txt"><select name="education" class="input_cmbbx1">
                    <option <?php if ($this->_tpl_vars['errval']['education'] == School): ?>selected <?php endif; ?> value="School">School</option>
			<option   value="Some Collage" <?php if ($this->_tpl_vars['errval']['education'] == 'Some Collage'): ?>selected <?php endif; ?>>Some Collage</option>
			<option value="Professional Degree" <?php if ($this->_tpl_vars['errval']['education'] == 'Professional Degree'): ?>selected <?php endif; ?>>Professional Degree</option>
			<option value="Master Degree" <?php if ($this->_tpl_vars['errval']['education'] == 'Master Degree'): ?>selected <?php endif; ?>>Master Degree</option>
                   </select></td>
                </tr>

		 <tr class="row12">
                  <td valign="top" align="left" class="input_txt"><span class="err">*</span> Note &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
                  <td valign="top" align="left" class="input_txt"><textarea class="input_txtbx1" id="inp_id" onmouseover="showTooltip('tooltip_id','inp_id3');" onmouseout="hideTooltip('tooltip_id');"  style="width: 177px; height: 89px;" name="note"/><?php echo $this->_tpl_vars['errval']['note']; ?>
</textarea></br><font color="Red" size="+1"><?php echo $this->_tpl_vars['errmsg']['note']; ?>
</font></td>
                </tr>
                 
              </table></td>
    <td align="left" valign="top"> <h2 class="quck-txt">More Info</h2>
<table cellpadding="0" cellspacing="0" border="0" width="100%">
              
             
                <tr class="row1">
                  <td valign="top" align="left" class="input_txt"><span class="err">*</span> Medical Details&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
                  <td valign="top" align="left" class="input_txt"><textarea class="input_txtbx1" id="inp_id" onmouseover="showTooltip('tooltip_id','inp_id3');" onmouseout="hideTooltip('tooltip_id');"  style="width: 177px; height: 89px;" name="medical"/><?php echo $this->_tpl_vars['errval']['medical']; ?>
</textarea></br><font color="Red" size="+1"><?php echo $this->_tpl_vars['errmsg']['medical']; ?>
</font></td>
                </tr>


<tr><td><p class="quck-txt">Texting&nbsp;Preference
</p></td></tr>



		  <tr class="row2">
                  <td valign="middle" align="left" class="input_txt"><span class="err">*</span> Messaging Frequency
 :</td>
                  <td valign="top" align="left" class="input_txt"><select name="frequency" class="input_cmbbx1">
                   <option value="Daily Twice" selected="selected">Daily Twice</option>
			<option value="Once a Day" <?php if ($this->_tpl_vars['errval']['frequency'] == 'Once a Day'): ?>selected <?php endif; ?>>Once a Day</option>
			<option value="Once in a week" <?php if ($this->_tpl_vars['errval']['frequency'] == 'Once in a week'): ?>selected <?php endif; ?>>Once in a week</option>
			<option value="No Preference" <?php if ($this->_tpl_vars['errval']['frequency'] == 'No Preference'): ?>selected <?php endif; ?>>No Preference</option>
                   </select></td>
                </tr>

<tr><td><p class="quck-txt">Group</p></td></tr>

<tr class="row1"><td colspan="2"><p style=" line-height: 18px; padding: 1px 0pt; text-align: justify">Group is the internal classification for the better understanding of Participant's Demographics.<a href="#" onclick="javascript:CreateGroup()">[Create New Group]</a></p></td></tr>



    <tr class="row2">
                  <td valign="top" align="left" class="input_txt"><span class="err">*</span> Select Group &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
                  <td valign="top" align="left" class="input_txt"><?php echo $this->_tpl_vars['group']; ?>
</br><font color="Red" size="+1"><?php echo $this->_tpl_vars['errmsg']['group']; ?>
</font></td>
                </tr>

                
 </table>

                  </td>
                </tr>
                 
                 <tr class="row1">
                  <td valign="top" align="center">&nbsp;</td>
                  <td valign="top" align="left">&nbsp;<!--<input type="submit" class="submit_btn2" value="Add Participant" onclick="update.submit()">--></td>
                </tr>
              </table>


<table cellpadding="0" cellspacing="0" border="0" width="100%">
<tr><td align="center">&nbsp;</td></tr>
<tr><td align="center"><input type="submit" onclick="update.submit()" value="Add Participant" class="submit_btn2"></td></tr></table>



</td>
  </tr>



</table>

              

            </div></form>

<?php endif; ?>

<?php if ($_GET['type'] == '1'): ?>


<form action="?do=addparticipants&action=insert&type=<?php echo $_GET['type']; ?>
" method="post" name="update" id="update">

    <table cellpadding="0" cellspacing="0" border="0" width="98%" class="margin_table">
      <tr>
        <td valign="top" align="left" style="padding:5px 0 10px 0;">&nbsp;


<?php if ($_SESSION['adduser'] != ''): ?>
		<div class="status success">
            <p class="closestatus"><a title="Close" href="">x</a></p>
            <p><img alt="Success" src="images/icons/icon_success.png"><span>Success!</span> <?php echo $_SESSION['adduser']; ?>
.</p>
          </div><?php endif; ?>

<!--<div class="info_div">
            <label><img src="images/icons/icon_edit.png" alt="Edit" /> Edit</label>
            <label><img src="images/icons/icon_approve.png" alt="Approve" /> Approve</label>
            <label><img src="images/icons/icon_unapprove.png" alt="Unapprove" /> Unapprove</label>
            <label><img src="images/icons/icon_delete.png" alt="Delete" /> Remove</label>
          </div>--></td>
      </tr>
      <tr>
        <td valign="top" align="left"><div>
            <div class="headings altheading">
              <h2>Add Participants</h2>
            </div>
            <div class="contentbox">
              <table cellpadding="0" cellspacing="0" border="0" width="100%">
  <tr>
    <td align="left" valign="top" width="50%" style="padding-right:25px;">
    <h2 class="quck-txt">Quick Info</h2>
    <table cellpadding="0" cellspacing="0" border="0" width="100%">
                        <tr class="row1">
                  <td valign="middle" align="left" class="input_txt"><span class="err">*</span> First Name :</td>
                  <td valign="top" align="left" class="input_txt"><input type="text" class="input_txtbx1" id="inp_id" onmouseover="showTooltip('tooltip_id','inp_id3');" onmouseout="hideTooltip('tooltip_id');" value="<?php if ($this->_tpl_vars['errval']['fname'] != ''): ?><?php echo $this->_tpl_vars['errval']['fname']; ?>
<?php else: ?><?php echo $_SESSION['part_fname']; ?>
<?php endif; ?>" name="fname" /></br><font color="Red" size="+1"><?php echo $this->_tpl_vars['errmsg']['fname']; ?>
</font></td>
                </tr>

		 <tr class="row2">
                  <td valign="middle" align="left" class="input_txt"><span class="err">*</span> Last Name :</td>
                  <td valign="top" align="left" class="input_txt"><input type="text" class="input_txtbx1" id="inp_id" onmouseover="showTooltip('tooltip_id','inp_id3');" onmouseout="hideTooltip('tooltip_id');" value="<?php if ($this->_tpl_vars['errval']['lname'] != ''): ?><?php echo $this->_tpl_vars['errval']['lname']; ?>
<?php else: ?><?php echo $_SESSION['part_lname']; ?>
<?php endif; ?>" name="lname"/></br><font color="Red" size="+1"><?php echo $this->_tpl_vars['errmsg']['lname']; ?>
</font></td>
                </tr> 
		<tr class="row1">
                  <td valign="middle" align="left" class="input_txt"><span class="err">*</span> Mobile No :</td>
                  <td valign="top" align="left" class="input_txt"><input type="text" class="input_txtbx1" id="inp_id" onmouseover="showTooltip('tooltip_id','inp_id3');" onmouseout="hideTooltip('tooltip_id');" value="<?php if ($this->_tpl_vars['errval']['mobile'] != ''): ?><?php echo $this->_tpl_vars['errval']['mobile']; ?>
<?php else: ?><?php echo $_SESSION['part_mobile']; ?>
<?php endif; ?>" name="mobile" /></br><font color="Red" size="+1"><?php echo $this->_tpl_vars['errmsg']['mobile']; ?>
</font></td>
                </tr> 
		<tr class="row2">
                  <td valign="middle" align="left" class="input_txt"><span class="err">*</span> Email-Id :</td>
                  <td valign="top" align="left" class="input_txt"><input type="text" class="input_txtbx1" id="inp_id" onmouseover="showTooltip('tooltip_id','inp_id3');" onmouseout="hideTooltip('tooltip_id');" value="<?php if ($this->_tpl_vars['errval']['email'] != ''): ?><?php echo $this->_tpl_vars['errval']['email']; ?>
<?php else: ?><?php echo $_SESSION['part_email']; ?>
<?php endif; ?>" name="email" /></br><font color="Red" size="+1"><?php echo $this->_tpl_vars['errmsg']['email']; ?>
</font></td>
                </tr> 

	
		<tr class="row1">
                  <td valign="middle" align="left" class="input_txt"><span class="err">*</span> Gender :</td>
                  <td valign="top" align="left" class="input_txt"><input type="radio" name="gender" value="0" class="input_txt" checked="true">Male&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="1" class="input_txt">Female&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="2" class="input_txt">Transgender</td>
                </tr>
		 <tr class="row2">
                  <td valign="middle" align="left" class="input_txt"><span class="err">*</span> Age :</td>
                  <td valign="top" align="left" class="input_txt"><?php echo $this->_tpl_vars['age']; ?>
</td>
                </tr>
		
                <tr class="row1">
                  <td valign="middle" align="left" class="input_txt"><span class="err">*</span> City :</td>
                  <td valign="top" align="left" class="input_txt"><input type="text" class="input_txtbx1" id="inp_id" onmouseover="showTooltip('tooltip_id','inp_id3');" onmouseout="hideTooltip('tooltip_id');" value="<?php if ($this->_tpl_vars['errval']['city'] != ''): ?><?php echo $this->_tpl_vars['errval']['city']; ?>
<?php else: ?><?php echo $_SESSION['part_city']; ?>
<?php endif; ?>" name="city"/></br><font color="Red" size="+1"><?php echo $this->_tpl_vars['errmsg']['city']; ?>
</font></td>
                </tr>
		 <tr class="row2">
                  <td valign="middle" align="left" class="input_txt"><span class="err">*</span> Education :</td>
                  <td valign="top" align="left" class="input_txt"><select name="education" class="input_cmbbx1">
                    <option selected="selected" value="School" >School</option>
			<option value="Some Collage">Some Collage</option>
			<option value="Professional Degree">Professional Degree</option>
			<option value="Master Degree">Master Degree</option>
                   </select></td>
                </tr>

		 <tr class="row1">
                  <td valign="top" align="left" class="input_txt"><span class="err">*</span> Note :</td>
                  <td valign="top" align="left" class="input_txt"><textarea class="input_txtbx1" id="inp_id" onmouseover="showTooltip('tooltip_id','inp_id3');" onmouseout="hideTooltip('tooltip_id');"  style="width: 177px; height: 89px;" name="note"/>
<?php if ($this->_tpl_vars['errval']['note'] != ''): ?><?php echo $this->_tpl_vars['errval']['note']; ?>
<?php else: ?>
<?php echo $_SESSION['part_note']; ?>
<?php endif; ?></textarea></br><font color="Red" size="+1"><?php echo $this->_tpl_vars['errmsg']['note']; ?>
</font></td>
                </tr>
                 <!--<tr class="row1">
                  <td valign="middle" align="right" class="input_txt">Start Date :</td>
                  <td valign="top" align="left" class="input_txt">
                  <table width="260" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="70" align="center" valign="top" style="border-bottom:none;">DD</td>
    <td width="70" align="center" valign="top" style="border-bottom:none;">MM</td>
    <td width="160" align="center" valign="top" style="border-bottom:none;">YY</td>
  </tr>
  <tr>
    <td align="left" valign="top" style="border-bottom:none;"><select name="select2" class="input_cmbbx_cal1">
                    <option selected="selected">01</option>
                    <option>02</option>
                    <option>03</option>
                  </select></td>
    <td align="left" valign="top" style="border-bottom:none;"><select name="select2" class="input_cmbbx_cal1">
                    <option selected="selected">10</option>
                    <option>11</option>
                    <option>12</option>
                  </select></td>
    <td align="left" valign="top" style="border-bottom:none;"><select name="select2" class="input_cmbbx_cal2">
                    <option selected="selected">1985</option>
                    <option>1986</option>
                    <option>1987</option>
                  </select></td>
  </tr>
 </table>

                  </td>
                </tr>-->
                 
               <!--  <tr class="row1">
                  <td valign="top" align="right">&nbsp;</td>
                  <td valign="top" align="left"><input type="submit" class="submit_btn1" value="Send Stream" /></td>
                </tr>-->
              </table></td>
    <td align="left" valign="top"> <h2 class="quck-txt">More Info</h2>
<table cellpadding="0" cellspacing="0" border="0" width="100%">
              
             
                <tr class="row1">
                  <td valign="top" align="left" class="input_txt"><span class="err">*</span> Medical Details&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</td>
                  <td valign="top" align="left" class="input_txt"><textarea class="input_txtbx1" id="inp_id" onmouseover="showTooltip('tooltip_id','inp_id3');" onmouseout="hideTooltip('tooltip_id');"  style="width: 177px; height: 89px;" name="medical"/><?php if ($this->_tpl_vars['errval']['medical'] != ''): ?><?php echo $this->_tpl_vars['errval']['medical']; ?>
<?php else: ?><?php echo $_SESSION['part_medical']; ?>
<?php endif; ?></textarea></br><font color="Red" size="+1"><?php echo $this->_tpl_vars['errmsg']['medical']; ?>
</font></td>
                </tr>


<tr><td><p class="quck-txt">Texting&nbsp;Preference
</p></td></tr>



		  <tr class="row2">
                  <td valign="middle" align="left" class="input_txt"><span class="err">*</span> Messaging Frequency
 :</td>
                  <td valign="top" align="left" class="input_txt"><select name="frequency" class="input_cmbbx1">
                   <option value="Daily Twice" selected="selected">Daily Twice</option>
			<option value="Once a Day">Once a Day</option>
			<option value="Once in a week">Once in a week</option>
			<option value="No Preference">No Preference</option>
                   </select></td>
                </tr>

<tr><td><p class="quck-txt">Group</p></td></tr>

<tr class="row1"><td colspan="2"><p style=" line-height: 18px; padding: 1px 0pt; text-align: justify">Group is the internal classification for the better understanding of Participant's Demographics.<a href="#" onclick="javascript:CreateGroup()">[Create New Group]</a></p></td></tr>



    <tr class="row2">
                  <td valign="top" align="left" class="input_txt"><span class="err">*</span> Select Group&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</td>
                  <td valign="top" align="left" class="input_txt"><?php echo $this->_tpl_vars['group']; ?>
</br><font color="Red" size="+1"><?php echo $this->_tpl_vars['errmsg']['group']; ?>
</font></td>
                </tr>

                <!-- <tr class="row1">
                  <td valign="middle" align="right" class="input_txt">Start Date :</td>
                  <td valign="top" align="left" class="input_txt">
                  <table width="260" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="70" align="center" valign="top" style="border-bottom:none;">DD</td>
    <td width="70" align="center" valign="top" style="border-bottom:none;">MM</td>
    <td width="160" align="center" valign="top" style="border-bottom:none;">YY</td>
  </tr>
  <tr>
    <td align="left" valign="top" style="border-bottom:none;"><select name="select2" class="input_cmbbx_cal1">
                    <option selected="selected">01</option>
                    <option>02</option>
                    <option>03</option>
                  </select></td>
    <td align="left" valign="top" style="border-bottom:none;"><select name="select2" class="input_cmbbx_cal1">
                    <option selected="selected">10</option>
                    <option>11</option>
                    <option>12</option>
                  </select></td>
    <td align="left" valign="top" style="border-bottom:none;"><select name="select2" class="input_cmbbx_cal2">
                    <option selected="selected">1985</option>
                    <option>1986</option>
                    <option>1987</option>
                  </select></td>
  </tr>-->
 </table>

                  </td>
                </tr>
                 
                 <tr class="row1">
                  <td valign="top" align="center">&nbsp;</td>
                  <td valign="top" align="left"><input type="submit" class="submit_btn2" value="Add Participant" onclick="update.submit()"></td>
                </tr>
              </table></td>
  </tr>



</table>

              

            </div></form>

<?php endif; ?>

          </div>



</td>


      </tr>

<script language="JavaScript">
function CreateGroup()
{
	document.update.action = 'index.php?do=creategroup&type=1';
	document.update.submit();
}
</script>
       <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>