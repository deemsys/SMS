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
);
 

 $domapping = array (
  'index' => 
  array (
    'model' => 'CPolls',
    'function' => 'showPollsPage',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
  'demo' => 
  array (
    'model' => 'CPolls',
    'function' => 'showPollsPage',
    'loadlib' => '1,2',
    'loadsys' => 'S_ALL',
  ),
);
 

 $globalmapping = array (
  'invalidrequest' => 
  array (
    'model' => 'CPolls',
    'function' => 'showPollsPage',
    'loadlib' => 'L_ALL',
    'loadsys' => 'S_ALL',
  ),
);
 ?>