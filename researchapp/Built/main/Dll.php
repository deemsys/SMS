<?php 

 $system = array (
  1 => 'Bin/Security.php',
  2 => 'Bin/Smarty.php',
  3 => 'Bin/Template.php',
  4 => 'Bin/SetConfiguration.php',
  5 => 'Bin/DbConnect.php',
  6 => 'Bin/Query.php',
);


 $appsetup = array (
  'do' => 'do',
  'action' => 'action',
  'escapepost' => 'yes',
  'escapeget' => 'yes',
  'escapecookie' => 'No',
  'escapesession' => 'No',
);
 

 $libraries = array (
  1 => 'classes/Lib/Validation/ErrorHandler.php',
  2 => 'classes/Lib/Validation/Methods.php',
  3 => 'classes/Lib/Validation/Handler.php',
  4 => 'classes/Lib/Components.php',
  5 => 'classes/Lib/Common.php',
);
 

 $domapping = array (
  'login' => 
  array (
    'controller' => 'CLogin',
    'function' => 'loginPage',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'login:logincheck' => 
  array (
    'controller' => 'CLogin',
    'function' => 'loginCheck',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'logout' => 
  array (
    'controller' => 'CLogin',
    'function' => 'logOut',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'changepassword' => 
  array (
    'controller' => 'CLogin',
    'function' => 'changePassword',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'updatepassword' => 
  array (
    'controller' => 'CLogin',
    'function' => 'updatePassword',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'forgotpassword' => 
  array (
    'controller' => 'CLogin',
    'function' => 'forgotPassword',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'validforgetpassword' => 
  array (
    'controller' => 'CLogin',
    'function' => 'validForgetPassword',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'dashboard' => 
  array (
    'controller' => 'CMydashboard',
    'function' => 'Mydashboard',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'createstream' => 
  array (
    'controller' => 'CCreatestream',
    'function' => 'Createstream',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'sendstream' => 
  array (
    'controller' => 'CCreatestream',
    'function' => 'Sendstream',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'viewstream' => 
  array (
    'controller' => 'CCreatestream',
    'function' => 'Viewstream',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'addadminuser' => 
  array (
    'controller' => 'CAdminuser',
    'function' => 'addAdminuser',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'insertadminuser' => 
  array (
    'controller' => 'CAdminuser',
    'function' => 'insertAdminuser',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'viewadminuser' => 
  array (
    'controller' => 'CAdminuser',
    'function' => 'viewAdminuser',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'viewadminuser:search' => 
  array (
    'controller' => 'CAdminuser',
    'function' => 'ajaxadminuser',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'userdetail' => 
  array (
    'controller' => 'CAdminuser',
    'function' => 'userDetail',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'edituser' => 
  array (
    'controller' => 'CAdminuser',
    'function' => 'editUser',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'deleteuser' => 
  array (
    'controller' => 'CAdminuser',
    'function' => 'deleteUser',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'activeuser' => 
  array (
    'controller' => 'CAdminuser',
    'function' => 'activeUser',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'updateadminuser' => 
  array (
    'controller' => 'CAdminuser',
    'function' => 'updateAdminuser',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'activityofadmin' => 
  array (
    'controller' => 'CAdminuser',
    'function' => 'activityOfAdmin',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'activityofadmin:search' => 
  array (
    'controller' => 'CAdminuser',
    'function' => 'ajaxactivityofadmin',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'addmailtemplate' => 
  array (
    'controller' => 'CMailfunction',
    'function' => 'addMailtemplate',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'insertmail' => 
  array (
    'controller' => 'CMailfunction',
    'function' => 'insertMailtemplate',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'creategroup' => 
  array (
    'controller' => 'CParticipants',
    'function' => 'createGroup',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'updategroup' => 
  array (
    'controller' => 'CParticipants',
    'function' => 'updateGroup',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'addparticipants' => 
  array (
    'controller' => 'CParticipants',
    'function' => 'addParticipants',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'addparticipants:insert' => 
  array (
    'controller' => 'CParticipants',
    'function' => 'insertParticipants',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'viewparticipants' => 
  array (
    'controller' => 'CParticipants',
    'function' => 'viewParticipants',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'viewparticipants:search' => 
  array (
    'controller' => 'CParticipants',
    'function' => 'viewAjaxParticipants',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'partdicipantdetail' => 
  array (
    'controller' => 'CParticipants',
    'function' => 'partdicipantdetail',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'editParticipants' => 
  array (
    'controller' => 'CParticipants',
    'function' => 'editParticipants',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'updateparticipant' => 
  array (
    'controller' => 'CParticipants',
    'function' => 'modifyParticipants',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'deleteparticipant' => 
  array (
    'controller' => 'CParticipants',
    'function' => 'deleteParticipants',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'deletegroup' => 
  array (
    'controller' => 'CParticipants',
    'function' => 'deleteGroup',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'viewgroup' => 
  array (
    'controller' => 'CParticipants',
    'function' => 'viewGroup',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'viewgroup:search' => 
  array (
    'controller' => 'CParticipants',
    'function' => 'viewAjaxGroup',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'editupdategroup' => 
  array (
    'controller' => 'CParticipants',
    'function' => 'editupdateGroup',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'editgroup' => 
  array (
    'controller' => 'CParticipants',
    'function' => 'editGroup',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'broadcast' => 
  array (
    'controller' => 'CBroadcast',
    'function' => 'CreateBroadcost',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'updatebroadcast' => 
  array (
    'controller' => 'CBroadcast',
    'function' => 'UpdatBroadCast',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'viewreports' => 
  array (
    'controller' => 'CBroadcast',
    'function' => 'viewReports',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'viewreports:search' => 
  array (
    'controller' => 'CBroadcast',
    'function' => 'viewAjaxReports',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'insertstream' => 
  array (
    'controller' => 'CCreatestream',
    'function' => 'insertStream',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'viewstream:search' => 
  array (
    'controller' => 'CCreatestream',
    'function' => 'ajaxViewstream',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'editstream' => 
  array (
    'controller' => 'CCreatestream',
    'function' => 'editStream',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'deletestream' => 
  array (
    'controller' => 'CCreatestream',
    'function' => 'deleteStream',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'updatestream' => 
  array (
    'controller' => 'CCreatestream',
    'function' => 'updatestream',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'selectmailtemp' => 
  array (
    'controller' => 'CMailfunction',
    'function' => 'selectMailtemp',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'showstream' => 
  array (
    'controller' => 'CCreatestream',
    'function' => 'showStream',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'notallow' => 
  array (
    'controller' => 'CLogin',
    'function' => 'notAllow',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'textmsg' => 
  array (
    'controller' => 'CTextmsg',
    'function' => 'txtmsg',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'inserttxtmsg' => 
  array (
    'controller' => 'CTextmsg',
    'function' => 'inserttxtmsg',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
);
 

 $globalmapping = array (
  'invalidrequest' => 
  array (
    'controller' => 'CLogin',
    'function' => 'loginPage',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
);
 ?>