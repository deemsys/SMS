<?php /* Smarty version 2.6.19, created on 2012-12-06 09:58:02
         compiled from addmailtemp.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script language="javascript" type="text/javascript" src="js/tinymce_2_1_1_1/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "exact",
		elements:"inp_id5",
		theme : "advanced",

		plugins : "safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

		// Theme options
		//theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,formatselect,fontselect,fontsizeselect",
		//theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons2 : "search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		//theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,advhr,|,print,|,ltr,rtl,|",
		//theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak",
		theme_advanced_buttons4 : "pagebreak",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example content CSS (should be your site CSS)
		content_css : "css/content.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

	});
</script>
<form action="?do=insertmail&id=<?php echo $_GET['id']; ?>
" method="post">
  <div id="right_content">

    <table cellpadding="0" cellspacing="0" border="0" width="98%" class="margin_table">

<tr>

        <td valign="top" align="left" style="padding:5px 0 10px 0;">
            <?php if ($_SESSION['mail'] != ''): ?>
		<div class="status success">
            <p class="closestatus"><a title="Close" href="">x</a></p>
            <p><img alt="Success" src="images/icons/icon_success.png"><span>Success!</span> <?php echo $_SESSION['mail']; ?>
.</p>
          </div><?php endif; ?>

          </td>

      </tr>
      <tr>

        <td valign="top" align="left"><div>

            <div class="headings altheading">

              <h2>Mail Templates</h2>

            </div>

            <div class="contentbox">

              <table cellpadding="0" cellspacing="0" border="0" width="100%">

		<tr class="row1">

                  <td valign="middle" align="right" class="input_txt" width="30%"><span class="err">*</span> Mail Template Name :</td>

                  <td valign="top" align="left" class="input_txt" width="70%"><select name="select" class="input_cmbbx" onchange="showmailtemp(this.value)">
			<option value="welcomeadminuser" >Welcome Admin User</option>
			
                    <option value="forgetpassword"  <?php if ($_GET['id'] == forgetpassword): ?> selected <?php endif; ?>/>Forgot Password</option>

                    <option value="youraccountsuspend" <?php if ($_GET['id'] == youraccountsuspend): ?> selected <?php endif; ?>/>Your Account Suspened</option>

			<option value="youraccountactivated" <?php if ($_GET['id'] == youraccountactivated): ?> selected <?php endif; ?>/>Your Account Activated</option>

			<option value="youraccountdeletes" <?php if ($_GET['id'] == youraccountdeletes): ?> selected <?php endif; ?>/>Your Account Deleted</option>

                   </select></br><span class="err"><?php echo $this->_tpl_vars['err']['select']; ?>
</span></td>

                </tr></table>
		<table cellpadding="0" cellspacing="0" border="0" width="100%">
		<tr><TD>
		<div id="txtHint">
		<table cellpadding="0" cellspacing="0" border="0" width="100%">
		
                <tr class="row2">

                  <td valign="middle" align="right" class="input_txt" width="30%" ><span class="err">*</span> Subject :</td>

                  <td valign="top" align="left" class="input_txt" width="70%"><input type="text" name="subject" class="input_txtbx" id="inp_id3" onmouseover="showTooltip('tooltip_id','inp_id3');" onmouseout="hideTooltip('tooltip_id');" value="<?php if ($this->_tpl_vars['val']['subject'] != ''): ?><?php echo $this->_tpl_vars['val']['subject']; ?>
<?php else: ?><?php echo $this->_tpl_vars['editstream']['mail_subject']; ?>
<?php endif; ?>" /></br><span class="err"><?php echo $this->_tpl_vars['err']['subject']; ?>
</span></td>

                </tr>

                <tr class="row1">

                  <td valign="middle" align="right" class="input_txt" width="30%"><span class="err">*</span> From Name :</td>

                  <td valign="top" align="left" class="input_txt" width="70%"><input type="text" name="fname" class="input_txtbx" id="inp_id" onmouseover="showTooltip('tooltip_id','inp_id3');" onmouseout="hideTooltip('tooltip_id');" value="<?php if ($this->_tpl_vars['val']['fname'] != ''): ?><?php echo $this->_tpl_vars['val']['fname']; ?>
<?php else: ?><?php echo $this->_tpl_vars['editstream']['from_name']; ?>
<?php endif; ?>"/></br><span class="err"><?php echo $this->_tpl_vars['err']['fname']; ?>
</span></td>

                </tr>

		<tr class="row2">

                  <td valign="middle" align="right" class="input_txt" width="30%"><span class="err">*</span> From Email :</td>

                  <td valign="top" align="left" class="input_txt" width="70%"><input type="text" name="fmail" class="input_txtbx" id="inp_id" onmouseover="showTooltip('tooltip_id','inp_id3');" onmouseout="hideTooltip('tooltip_id');" value="<?php if ($this->_tpl_vars['val']['fmail'] != ''): ?><?php echo $this->_tpl_vars['val']['fmail']; ?>
<?php else: ?><?php echo $this->_tpl_vars['editstream']['from_mail']; ?>
<?php endif; ?>"/></br><span class="err"><?php echo $this->_tpl_vars['err']['fmail']; ?>
</span></td>

                </tr>

		<tr class="row1">

                  <td valign="middle" align="right" class="input_txt" width="30%"><span class="err">*</span> Replay to Email :</td>

                  <td valign="top" align="left" class="input_txt" width="70%"><input type="text" name="rmail" class="input_txtbx" id="inp_id" onmouseover="showTooltip('tooltip_id','inp_id3');" onmouseout="hideTooltip('tooltip_id');" value="<?php if ($this->_tpl_vars['val']['rmail'] != ''): ?><?php echo $this->_tpl_vars['val']['rmail']; ?>
<?php else: ?><?php echo $this->_tpl_vars['editstream']['replay_mail']; ?>
<?php endif; ?>"/></br><span class="err"><?php echo $this->_tpl_vars['err']['rmail']; ?>
</span></td>

                </tr>

		<tr class="row2">

                  <td valign="middle" align="right" class="input_txt" width="30%"><span class="err">*</span> SMTP Servername :</td>

                  <td valign="top" align="left" class="input_txt" width="70%"><input type="text" name="smtp" class="input_txtbx" id="inp_id" onmouseover="showTooltip('tooltip_id','inp_id3');" onmouseout="hideTooltip('tooltip_id');" value="<?php if ($this->_tpl_vars['val']['smtp'] != ''): ?><?php echo $this->_tpl_vars['val']['smtp']; ?>
<?php else: ?><?php echo $this->_tpl_vars['editstream']['smtp_servername']; ?>
<?php endif; ?>" /></br><span class="err"><?php echo $this->_tpl_vars['err']['smtp']; ?>
</span> </td>

                </tr>

		<tr class="row1">

                  <td valign="middle" align="right" class="input_txt" width="30%"><span class="err">*</span> Port :</td>

                  <td valign="top" align="left" class="input_txt" width="70%"><input type="text" name="port" class="input_txtbx" id="inp_id" onmouseover="showTooltip('tooltip_id','inp_id3');" onmouseout="hideTooltip('tooltip_id');" value="<?php if ($this->_tpl_vars['val']['port'] != ''): ?><?php echo $this->_tpl_vars['val']['port']; ?>
<?php else: ?><?php echo $this->_tpl_vars['editstream']['port']; ?>
<?php endif; ?>

" /></br><span class="err"><?php echo $this->_tpl_vars['err']['port']; ?>
</span> </td>

                </tr>

		
                <tr class="row2">

                  <td valign="middle" align="right" class="input_txt" width="30%"><span class="err">*</span> Username :</td>

                  <td valign="top" align="left" class="input_txt" width="70%"><input type="text" name="uname" class="input_txtbx" id="inp_id" onmouseover="showTooltip('tooltip_id','inp_id3');" onmouseout="hideTooltip('tooltip_id');" value="<?php if ($this->_tpl_vars['val']['uname'] != ''): ?><?php echo $this->_tpl_vars['val']['uname']; ?>
<?php else: ?><?php echo $this->_tpl_vars['editstream']['username']; ?>
<?php endif; ?>"/></br><span class="err"><?php echo $this->_tpl_vars['err']['uname']; ?>
</span> </td>

                </tr>

		<tr class="row1">

                  <td valign="middle" align="right" class="input_txt" width="30%"><span class="err">*</span> Password :</td>

                  <td valign="top" align="left" class="input_txt" width="70%"><input type="password" name="password" class="input_txtbx" id="inp_id" onmouseover="showTooltip('tooltip_id','inp_id3');" onmouseout="hideTooltip('tooltip_id');" value="<?php if ($this->_tpl_vars['val']['password'] != ''): ?><?php echo $this->_tpl_vars['val']['password']; ?>
<?php else: ?><?php echo $this->_tpl_vars['editstream']['password']; ?>
<?php endif; ?>"/></br><span class="err"><?php echo $this->_tpl_vars['err']['password']; ?>
</span> </td>

                </tr>

                <tr class="row2">
                  <td align="right" valign="middle" class="input_txt" width="30%"><span class="err">*</span> Message :</td>
                  <td align="left" valign="top" class="input_txt" width="70%"><textarea onmouseout="hideTooltip('tooltip_id');" onmouseover="showTooltip('tooltip_id','inp_id5');" id="inp_id5" cols="100%" rows="1" name="message" class="input_txtarea"><?php if ($this->_tpl_vars['val']['message'] != ''): ?><?php echo $this->_tpl_vars['val']['message']; ?>
<?php else: ?><?php echo $this->_tpl_vars['editstream']['message']; ?>
<?php endif; ?></textarea></br><span class="err"><?php echo $this->_tpl_vars['err']['message']; ?>
</span></td>
                </tr>
                </table></div></TD></tr></table><table cellpadding="0" cellspacing="0" border="0" width="100%">
                 <tr class="row1">
			<td valign="top" align="right" colspan="2" width="30%" > </td>
                  <td valign="top" align="left" colspan="2" width="70%" ><input type="submit" class="submit_btn1" value="Save" /></td>

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
function showmailtemp1(str)
{

if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }

var url="?do=selectmailtemp&mail_id="+str;

xmlhttp.open("GET",url,true);
xmlhttp.send();
}

function showmailtemp(str){
    window.location = "?do=addmailtemplate&id="+str;
}
</script>