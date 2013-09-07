<?php

error_reporting(0);
session_start();

define("ROOT_FOLDER",'./');
define("CURRENT_FOLDER",'main');

include(ROOT_FOLDER."Bin/Core/Initialize.php");

new Bin_Core_Initialize(1);

?>