<?php
if(!isset($comfig->attend)) $config->attend = new stdclass();
$config->attend->signInLimit  = '9:00';
$config->attend->signOutLimit = '18:00';
$config->attend->workingHours = '8';
$config->attend->workingDays  = '5';
$config->attend->mustSignOut  = 'yes';
$config->attend->ip           = '*';
