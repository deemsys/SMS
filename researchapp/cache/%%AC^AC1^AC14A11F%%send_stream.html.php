<?php /* Smarty version 2.6.19, created on 2012-11-22 23:29:42
         compiled from send_stream.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script type="text/javascript" src="js/jquery-1.3.2.js"></script>

<script type="text/javascript" src="js/ui.datepicker.js"></script>
<link type="text/css" href="css/demos.css" rel="stylesheet" />
<link type="text/css" href="css/ui.all.css" rel="stylesheet" />
<script type="text/javascript">
	$(function() {
		$("#datepicker").datepicker();
	});
	</script>
  <div id="right_content">
<form name="updatebroadcast" action="?do=updatebroadcast" method="POST">

    <table cellpadding="0" cellspacing="0" border="0" width="98%" class="margin_table">
      <tr>
        <td valign="top" align="left" style="padding:5px 0 10px 0;">



<?php if ($_SESSION['broadcast'] != ''): ?>
		<div class="status success">
            <p class="closestatus"><a title="Close" href="">x</a></p>
            <p><img alt="Success" src="images/icons/icon_success.png"><span>Success!</span> <?php echo $_SESSION['broadcast']; ?>
.</p>
          </div><?php endif; ?>

</td>
      </tr>
      <tr>
        <td valign="top" align="left"><div>
            <div class="headings altheading">
              <h2>Send Stream</h2>
            </div>
            <div class="contentbox">
              <table cellpadding="0" cellspacing="0" border="0" width="100%">
                <tr class="row1">
                  <td valign="middle" align="right" class="input_txt" width="200">Broadcast Id :</td>
                  <td valign="top" align="left" class="input_txt"><?php echo $this->_tpl_vars['cr_id']; ?>
<input type="hidden" name="br_id" value="<?php echo $this->_tpl_vars['cr_id']; ?>
"></td>
                </tr>
                <tr class="row2">
                  <td valign="middle" align="right" class="input_txt">Stream Name :</td>
                  <td valign="top" align="left" class="input_txt"><?php echo $this->_tpl_vars['stream']; ?>
</br><span class="err"><?php echo $this->_tpl_vars['errmsg']['stream']; ?>
</span></td>
                </tr>
                <tr class="row1">
                  <td valign="middle" align="right" class="input_txt">Group Name :</td>
                  <td valign="top" align="left" class="input_txt"><?php echo $this->_tpl_vars['group']; ?>
</br><span class="err"><?php echo $this->_tpl_vars['errmsg']['group']; ?>
</span></td>
                </tr>
                <tr class="row2">
                  <td valign="middle" align="right" class="input_txt">Frequency :</td>
                  <td valign="top" align="left" class="input_txt"><select name="fre" class="input_cmbbx2" onchange="openNewDiv(this.value)">
		      <option value="0" selected="selected">One Per Day</option>
	              <option value="1">Two Per Day</option>
        	      <option value="2">One Per Week</option>
                   </select></td>
                </tr>
                 

		  <tr class="row1">
                  <td valign="middle" align="right" class="input_txt">Start Date :</td>
                  <td valign="top" align="left" class="input_txt"><input type="text" name="st_date" id="datepicker" class="input_txtbx1" value="<?php echo $this->_tpl_vars['errval']['st_date']; ?>
"></br><span class="err"><?php echo $this->_tpl_vars['errmsg']['st_date']; ?>
</span></td>
                </tr></table>


<table cellpadding="0" cellspacing="0" border="0" width="100%" id="one"  <?php if ($this->_tpl_vars['errval']['fre'] == '' || $this->_tpl_vars['errval']['fre'] == '0'): ?>  style="display:block;" <?php else: ?> style="display:none;" <?php endif; ?>>
  <tr class="row2">
                  <td valign="middle" align="right" class="input_txt" width="52%">Start Time :</td>
                 <td valign="top" align="left" class="input_txt"><select name="ftime_one" class="input_cmbbx2" onchange="openNewDiv(this.value)">
		      <option value="12AM" selected="selected">12&nbsp;AM</option>
		      <option value="01AM" >01&nbsp;AM</option>
	              <option value="02AM">02&nbsp;AM</option>
	              <option value="03AM">03&nbsp;AM</option>
	              <option value="04AM">04&nbsp;AM</option>
	              <option value="05AM">05&nbsp;AM</option>
	              <option value="06AM">06&nbsp;AM</option>
	              <option value="07AM">07&nbsp;AM</option>
	              <option value="08AM">08&nbsp;AM</option>
	              <option value="09AM">09&nbsp;AM</option>
	              <option value="10AM">10&nbsp;AM</option>
	              <option value="11AM">11&nbsp;AM</option>
	              <option value="12PM">12&nbsp;PM</option>
	              <option value="01PM">01&nbsp;PM</option>
		      <option value="02PM">02&nbsp;PM</option>
	              <option value="03PM">03&nbsp;PM</option>
	              <option value="04PM">04&nbsp;PM</option>
	              <option value="05PM">05&nbsp;PM</option>
	              <option value="06PM">06&nbsp;PM</option>
	              <option value="07PM">07&nbsp;PM</option>
	              <option value="08PM">08&nbsp;PM</option>
	              <option value="09PM">09&nbsp;PM</option>
	              <option value="10PM">10&nbsp;PM</option>
	              <option value="11PM">11&nbsp;PM</option>
                   </select></td>
                </tr>
</table>


<table cellpadding="0" cellspacing="0" border="0" width="100%" id="two" <?php if ($this->_tpl_vars['errval']['fre'] == '1'): ?>  style="display:block;" <?php else: ?> style="display:none;" <?php endif; ?>>
<!--<table cellpadding="0" cellspacing="0" border="0" width="100%">-->

  <tr class="row2">
                  <td valign="middle" align="right" class="input_txt" width="52%">First Message sending Time :</td>
                 <td valign="top" align="left" class="input_txt"><select name="ftime_two" class="input_cmbbx2" >
		     <option value="12AM" selected="selected">12&nbsp;AM</option>
		      <option value="01AM" >01&nbsp;AM</option>
	              <option value="02AM">02&nbsp;AM</option>
	              <option value="03AM">03&nbsp;AM</option>
	              <option value="04AM">04&nbsp;AM</option>
	              <option value="05AM">05&nbsp;AM</option>
	              <option value="06AM">06&nbsp;AM</option>
	              <option value="07AM">07&nbsp;AM</option>
	              <option value="08AM">08&nbsp;AM</option>
	              <option value="09AM">09&nbsp;AM</option>
	              <option value="10AM">10&nbsp;AM</option>
	              <option value="11AM">11&nbsp;AM</option>
	              <option value="12PM">12&nbsp;PM</option>
	              <option value="01PM">01&nbsp;PM</option>
		      <option value="02PM">02&nbsp;PM</option>
	              <option value="03PM">03&nbsp;PM</option>
	              <option value="04PM">04&nbsp;PM</option>
	              <option value="05PM">05&nbsp;PM</option>
	              <option value="06PM">06&nbsp;PM</option>
	              <option value="07PM">07&nbsp;PM</option>
	              <option value="08PM">08&nbsp;PM</option>
	              <option value="09PM">09&nbsp;PM</option>
	              <option value="10PM">10&nbsp;PM</option>
	              <option value="11PM">11&nbsp;PM</option>
                   </select></td>
                </tr>




	 <tr class="row1">
                  <td valign="middle" align="right" class="input_txt" width="52%">Second Message sending Time :</td>
                 <td valign="top" align="left" class="input_txt"><select name="stime_two" class="input_cmbbx2" >
		     <option value="12AM" selected="selected">12&nbsp;AM</option>
		      <option value="01AM" >01&nbsp;AM</option>
	              <option value="02AM">02&nbsp;AM</option>
	              <option value="03AM">03&nbsp;AM</option>
	              <option value="04AM">04&nbsp;AM</option>
	              <option value="05AM">05&nbsp;AM</option>
	              <option value="06AM">06&nbsp;AM</option>
	              <option value="07AM">07&nbsp;AM</option>
	              <option value="08AM">08&nbsp;AM</option>
	              <option value="09AM">09&nbsp;AM</option>
	              <option value="10AM">10&nbsp;AM</option>
	              <option value="11AM">11&nbsp;AM</option>
	              <option value="12PM">12&nbsp;PM</option>
	              <option value="01PM">01&nbsp;PM</option>
		      <option value="02PM">02&nbsp;PM</option>
	              <option value="03PM">03&nbsp;PM</option>
	              <option value="04PM">04&nbsp;PM</option>
	              <option value="05PM">05&nbsp;PM</option>
	              <option value="06PM">06&nbsp;PM</option>
	              <option value="07PM">07&nbsp;PM</option>
	              <option value="08PM">08&nbsp;PM</option>
	              <option value="09PM">09&nbsp;PM</option>
	              <option value="10PM">10&nbsp;PM</option>
	              <option value="11PM">11&nbsp;PM</option>
                   </select></td>
                </tr></table>

<!--</div>-->

<table cellpadding="0" cellspacing="0" border="0" width="100%" id="three" <?php if ($this->_tpl_vars['errval']['fre'] == '2'): ?>  style="display:block;" <?php else: ?> style="display:none;" <?php endif; ?>>
<!--<table cellpadding="0" cellspacing="0" border="0" width="100%">-->
  <tr class="row2">
                  <td valign="middle" align="right" class="input_txt" width="52%">First Message sending Time :</td>
                 <td valign="top" align="left" class="input_txt"><select name="ftime_three" class="input_cmbbx2" >
		    <option value="12AM" selected="selected">12&nbsp;AM</option>
		      <option value="01AM" >01&nbsp;AM</option>
	              <option value="02AM">02&nbsp;AM</option>
	              <option value="03AM">03&nbsp;AM</option>
	              <option value="04AM">04&nbsp;AM</option>
	              <option value="05AM">05&nbsp;AM</option>
	              <option value="06AM">06&nbsp;AM</option>
	              <option value="07AM">07&nbsp;AM</option>
	              <option value="08AM">08&nbsp;AM</option>
	              <option value="09AM">09&nbsp;AM</option>
	              <option value="10AM">10&nbsp;AM</option>
	              <option value="11AM">11&nbsp;AM</option>
	              <option value="12PM">12&nbsp;PM</option>
	              <option value="01PM">01&nbsp;PM</option>
		      <option value="02PM">02&nbsp;PM</option>
	              <option value="03PM">03&nbsp;PM</option>
	              <option value="04PM">04&nbsp;PM</option>
	              <option value="05PM">05&nbsp;PM</option>
	              <option value="06PM">06&nbsp;PM</option>
	              <option value="07PM">07&nbsp;PM</option>
	              <option value="08PM">08&nbsp;PM</option>
	              <option value="09PM">09&nbsp;PM</option>
	              <option value="10PM">10&nbsp;PM</option>
	              <option value="11PM">11&nbsp;PM</option>
                   </select></td>
                </tr>




	 <tr class="row1">
                  <td valign="middle" align="right" class="input_txt" width="52%"> Message sending Day :</td>
                 <td valign="top" align="left" class="input_txt"><select name="day_name_three" class="input_cmbbx2" >
		      <option value="Sun" selected="selected">Sunday</option>
	              <option value="Mon">Monday</option>
	              <option value="Tue">Tuesday</option>
	              <option value="Wed">Wednesday</option>
	              <option value="Thu">Thursday</option>
	              <option value="Fri">Friday</option>
	              <option value="Sat">Saturday</option>
	              
                   </select></td>
                </tr></table>
<!--</div>-->
<table cellpadding="0" cellspacing="0" border="0" width="100%">

                 
                 <tr class="row1">
                  <td valign="top" align="right">&nbsp;</td>
                  <td valign="top" align="left"><input type="submit" class="submit_btn1" value="Send Stream" /></td>
                </tr>
              </table>

</table>
              
            </div>
          </div></td>
      </tr>
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<script language="JavaScript">

function openNewDiv(val)
{
// alert(val);
	if(val == '0')
	{
	document.getElementById("one").style.display = 'block';
	document.getElementById("two").style.display = 'none';
	document.getElementById("three").style.display = 'none';



	}
	else if(val == '1')
	{
	document.getElementById("two").style.display = 'block';
	document.getElementById("one").style.display = 'none';
	document.getElementById("three").style.display = 'none';


	}
	else if(val == '2')
	{
	document.getElementById("three").style.display = 'block';
	document.getElementById("two").style.display = 'none';
	document.getElementById("one").style.display = 'none';


	}



	


}
	


</script>