<?php
$cfg['blowfish_secret'] = ''; /* YOU MUST FILL IN THIS FOR COOKIE AUTH! */

$i = 0;

$i++;
/* Authentication type */
$cfg['Servers'][$i]['auth_type'] = 'cookie';
/* Server parameters */
//$cfg['Servers'][$i]['host'] = 'localhost';
$cfg['Servers'][$i]['host'] = getenv('DB_SERVICE_NAME');
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['AllowNoPassword'] = false;
$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';
$cfg['Lang'] = 'en-utf-8';

/**
 * Directories for saving/loading files from server
 */
#$cfg['UploadDir'] = getenv('DATA_PATH');
#$cfg['SaveDir'] = getenv('DATA_PATH');
