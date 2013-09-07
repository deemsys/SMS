<?php
class Display_DMailfunction
{
	function selectMailtemp($record)
	{
		$output.='<table cellpadding="0" cellspacing="0" border="0" width="100%"><tr class="row2">
                  <td valign="middle" align="right" class="input_txt" width="30%" ><span class="err">*</span> Subject :</td>

                  <td valign="top" align="left" class="input_txt" width="70%"><input type="text" name="subject" class="input_txtbx" id="inp_id3"  value="'.$record['mail_subject'].'" /></br><span class="err">'.$err['subject'].'</span></td>

                </tr>

                <tr class="row1">

                  <td valign="middle" align="right" class="input_txt" width="30%"><span class="err">*</span> From Name :</td>

                  <td valign="top" align="left" class="input_txt" width="70%"><input type="text" name="fname" class="input_txtbx" id="inp_id"  value="'.$record['from_name'].'" /></br><span class="err"><AJDF:output>'.$err['fname'].'</AJDF:output></span></td>

                </tr>

		<tr class="row2">

                  <td valign="middle" align="right" class="input_txt" width="30%"><span class="err">*</span> From Email :</td>

                  <td valign="top" align="left" class="input_txt" width="70%"><input type="text" name="fmail" class="input_txtbx" id="inp_id"  value="'.$record['from_mail'].'" /></br><span class="err">'.$err['fmail'].'</span></td>

                </tr>

		<tr class="row1">

                  <td valign="middle" align="right" class="input_txt" width="30%"><span class="err">*</span> Replay to Email :</td>

                  <td valign="top" align="left" class="input_txt" width="70%"><input type="text" name="rmail" class="input_txtbx" id="inp_id"  value="'.$record['replay_mail'].'" /></br><span class="err">'.$err['rmail'].'</span></td>

                </tr>

		<tr class="row2">

                  <td valign="middle" align="right" class="input_txt" width="30%"><span class="err">*</span> SMTP Servername :</td>

                  <td valign="top" align="left" class="input_txt" width="70%"><input type="text" name="smtp" class="input_txtbx" id="inp_id"  value="'.$record['smtp_servername'].'" /></br><span class="err">'.$err['smtp'].'</span> </td>

                </tr>

		<tr class="row1">

                  <td valign="middle" align="right" class="input_txt" width="30%"><span class="err">*</span> Port :</td>

                  <td valign="top" align="left" class="input_txt" width="70%"><input type="text" name="port" class="input_txtbx" id="inp_id"  value="'.$record['port'].'" /></br><span class="err">'.$err['port'].'</span> </td>

                </tr>

		
                <tr class="row2">

                  <td valign="middle" align="right" class="input_txt" width="30%"><span class="err">*</span> Username :</td>

                  <td valign="top" align="left" class="input_txt" width="70%"><input type="text" name="uname" class="input_txtbx" id="inp_id"  value="'.$record['username'].'" /></br><span class="err">'.$err['uname'].'</span> </td>

                </tr>

		<tr class="row1">

                  <td valign="middle" align="right" class="input_txt" width="30%"><span class="err">*</span> Password :</td>

                  <td valign="top" align="left" class="input_txt" width="70%"><input type="password" name="password" class="input_txtbx" id="inp_id"  value="'.$record['password'].'" /></br><span class="err">'.$err['password'].'</span> </td>

                </tr>

                <tr class="row2">
                  <td align="right" valign="middle" class="input_txt" width="30%"><span class="err">*</span> Message :</td>
                  <td align="left" valign="top" class="input_txt" width="70%"><textarea id="inp_id5" cols="100%" rows="1" name="message" class="input_txtarea">"'.$record['message'].'"</textarea></br><span class="err">'.$err['message'].'</span></td>
                </tr></table>';
		echo $output;
	}
}
?>