<?php /* Smarty version 2.6.19, created on 2012-11-21 01:02:47
         compiled from dashboard.html */ ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>  
  <div id="right_content">
<form action="?do=viewparticipants" nmae="dashboard" method="POST">

    <table cellpadding="0" cellspacing="0" border="0" width="98%" class="margin_table">
     
      <tr>
        <td valign="top" align="left"><div>
            <div class="headings altheading">
              <h2>Participants Stat</h2>
            </div>
            <div class="contentbox">
              <table cellpadding="0" cellspacing="0" border="0" width="100%">
                <tr class="title">
                  <td valign="top" align="left" width="10%">First&nbsp;Name</td>
                  <td valign="top" align="left" width="15%">Mobile Number</td>
                  <td valign="top" align="left" width="10%">City</td>
		  <td valign="top" align="left" width="10%">Age</td>

                  <td valign="top" align="left" width="15%">Associated&nbsp;Streams</td>
		   <td valign="top" align="left" width="15%">Education</td>
		     <td valign="top" align="left" width="15%">Date Of Join</td>

	
                </tr>

		<?php echo $this->_tpl_vars['show_adminuser']; ?>



                
<!--              </table>-->
              
               <div style="clear: both;"></div>
            </div>
          </div></td>
      </tr>
      <tr>
        <td valign="top" align="left">&nbsp;</td>
      </tr>
      <!--<tr>
        <td valign="top" align="left"><div>
            <div class="headings altheading">
              <h2>Message Stream Stats</h2>
            </div>
            <div class="contentbox">
              <table cellpadding="0" cellspacing="0" border="0" width="100%">
                <tr class="title">
                  <td valign="top" align="center" width="5%">No</td>
                  <td valign="top" align="left" width="16%">No.of Msg Stream</td>
                  <td valign="top" align="center" width="21%">Messages Send Today</td>
                  <td valign="top" align="center" width="24%">Messages Scheduled Today</td>
                  <td valign="top" align="center" width="34%">Action</td>
                </tr>
                <tr class="row1" onmouseover="mouse_event(this,'row_hover');" onmouseout="mouse_event(this,'row1');">
                  <td valign="top" align="center">1</td>
                  <td valign="top" align="left"><a href="#">Lorem Ipsum....</a></td>
                  <td valign="top" align="center">02</td>
                  <td valign="top" align="center">08/06/2012 1:16PM</td>
                  <td valign="top" align="center"><a href="#" title="" ><img src="images/icons/icon_edit.png" alt="Edit" /></a><a href="#" style="padding-right:10px;">Edit</a> <a href="#" title=""><img src="images/icons/icon_approve.png" alt="Approve" /></a><a href="#" style="padding-right:10px;">Approve</a><a href="#" title=""><img src="images/icons/icon_unapprove.png" alt="Unapprove" /></a><a href="#" style="padding-right:10px;">Unapprove</a><a href="#" title=""><img src="images/icons/icon_delete.png" alt="Delete" /></a><a href="#" style="padding-right:10px;">Remove</a></td>
                </tr>
                <tr class="row2" onmouseover="mouse_event(this,'row_hover');" onmouseout="mouse_event(this,'row2');">
                  <td valign="top" align="center">2</td>
                  <td valign="top" align="left"><a href="#">Lorem Ipsum....</a></td>
                  <td valign="top" align="center">03</td>
                  <td valign="top" align="center">08/06/2012 1:16PM</td>
                  <td valign="top" align="center"><a href="#" title="" ><img src="images/icons/icon_edit.png" alt="Edit" /></a><a href="#" style="padding-right:10px;">Edit</a> <a href="#" title=""><img src="images/icons/icon_approve.png" alt="Approve" /></a><a href="#" style="padding-right:10px;">Approve</a><a href="#" title=""><img src="images/icons/icon_unapprove.png" alt="Unapprove" /></a><a href="#" style="padding-right:10px;">Unapprove</a><a href="#" title=""><img src="images/icons/icon_delete.png" alt="Delete" /></a><a href="#" style="padding-right:10px;">Remove</a></td>
                </tr>
                <tr class="row1" onmouseover="mouse_event(this,'row_hover');" onmouseout="mouse_event(this,'row1');">
                  <td valign="top" align="center">3</td>
                  <td valign="top" align="left"><a href="#">Lorem Ipsum....</a></td>
                  <td valign="top" align="center">04</td>
                  <td valign="top" align="center">08/06/2012 1:16PM</td>
                  <td valign="top" align="center"><a href="#" title="" ><img src="images/icons/icon_edit.png" alt="Edit" /></a><a href="#" style="padding-right:10px;">Edit</a> <a href="#" title=""><img src="images/icons/icon_approve.png" alt="Approve" /></a><a href="#" style="padding-right:10px;">Approve</a><a href="#" title=""><img src="images/icons/icon_unapprove.png" alt="Unapprove" /></a><a href="#" style="padding-right:10px;">Unapprove</a><a href="#" title=""><img src="images/icons/icon_delete.png" alt="Delete" /></a><a href="#" style="padding-right:10px;">Remove</a></td>
                </tr>
                <tr class="row2" onmouseover="mouse_event(this,'row_hover');" onmouseout="mouse_event(this,'row2');">
                  <td valign="top" align="center">4</td>
                  <td valign="top" align="left"><a href="#">Lorem Ipsum....</a></td>
                  <td valign="top" align="center">05</td>
                  <td valign="top" align="center">08/06/2012 1:16PM</td>
                  <td valign="top" align="center"><a href="#" title="" ><img src="images/icons/icon_edit.png" alt="Edit" /></a><a href="#" style="padding-right:10px;">Edit</a> <a href="#" title=""><img src="images/icons/icon_approve.png" alt="Approve" /></a><a href="#" style="padding-right:10px;">Approve</a><a href="#" title=""><img src="images/icons/icon_unapprove.png" alt="Unapprove" /></a><a href="#" style="padding-right:10px;">Unapprove</a><a href="#" title=""><img src="images/icons/icon_delete.png" alt="Delete" /></a><a href="#" style="padding-right:10px;">Remove</a></td>
                </tr>
                <tr class="row1" onmouseover="mouse_event(this,'row_hover');" onmouseout="mouse_event(this,'row1');">
                  <td valign="top" align="center">5</td>
                  <td valign="top" align="left"><a href="#">Lorem Ipsum....</a></td>
                  <td valign="top" align="center">06</td>
                  <td valign="top" align="center">08/06/2012 1:16PM</td>
                  <td valign="top" align="center"><a href="#" title="" ><img src="images/icons/icon_edit.png" alt="Edit" /></a><a href="#" style="padding-right:10px;">Edit</a> <a href="#" title=""><img src="images/icons/icon_approve.png" alt="Approve" /></a><a href="#" style="padding-right:10px;">Approve</a><a href="#" title=""><img src="images/icons/icon_unapprove.png" alt="Unapprove" /></a><a href="#" style="padding-right:10px;">Unapprove</a><a href="#" title=""><img src="images/icons/icon_delete.png" alt="Delete" /></a><a href="#" style="padding-right:10px;">Remove</a></td>
                </tr>
                <tr>
                  <td valign="top" align="right" colspan="6" class="view_more"><a href="#">View All</a></td>
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
                <div class="bulkactions">
                  <select name="select" class="select_bttn">
                    <option>Select bulk action...</option>
                  </select>
                  <input type="submit" value="Apply" class="btn" />
                </div>
              </div>
              
              <div style="clear: both;"></div>
            </div>
          </div></td>
      </tr>-->      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>  </table></form>