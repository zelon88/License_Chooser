<?php

// This file contains the configuration data for the License_Chooser Server application.
// Make sure to fill out the information below 100% accuratly BEFORE you attempt to run
// any License_Chooser Server application scripts. Severe filesystem damage could result.
// / ------------------------------


// / ------------------------------
// / License Information ...
  // / To continue, please accept the included GPLv3 license by changing the following 
  // / variable to '1'. By changing the '$Accept_GPLv3_OpenSource_License' variable to '1'
  // / you aknowledge that you have read and agree to the terms of the included LICENSE file.
$Accept_GPLv3_OpenSource_License = '1';
// / ------------------------------

// / ------------------------------ 
// / Directory locations ...
  // / Install License_Chooser to the following directory.
  // / DO NOT CHANGE THE DEFAULT INSTALL DIRECTORY!!! 
$InstLoc = '/var/www/html/HRProprietary/License_Chooser';
// / The ServerRootDir should be pointed at the root of your web server directory.
  // / (NO SLASH AFTER DIRECTORY!!!) ...  
$ServerRootDir = '/var/www/html';
  // / The CloudLoc is where permanent Log files are stored. (NO SLASH AFTER DIRECTORY!!!) ... 
$LogDir = '/var/www/html/HRProprietary/License_Chooser/Logs';
// / ------------------------------ 

// / ------------------------------ 
// / General Information ...
$companyName = 'HonestRepair';
  // / Number of bytes to store in each logfile before splitting to a new one.
$MaxLogSize = '1048576';
  // / The default font to use throughout HRConvert2 GUI elements.
$Font = 'Arial';
  // / Terms of Service URL.
$TOSURL = 'https://www.honestrepair.net/index.php/terms-of-service/';
  // / Privacy Policy URL.
$PPURL = 'https://www.honestrepair.net/index.php/privacy-policy/';
  // / Contact Form URL.
$CFURL = 'https://www.honestrepair.net/index.php/contact-us/';
// / ------------------------------ 

// / ------------------------------ 
// / Variable Information
$applicationChoices = array(
 array('HRCloud2', TRUE, TRUE, 100, 500),
 array('HRCloud2-App-Pack', TRUE, TRUE, 50, 100),
 array('HRConvert2', TRUE, TRUE, 25, 100),
 array('HRScan2', TRUE, TRUE, 25, 100),
 array('HRAI', TRUE, TRUE, 25, 100),
 array('xPress', TRUE, TRUE, 10, 25),
 array('Re-Limiter', TRUE, TRUE, 10, 25),
 array('Workstation_USB_Monitor', TRUE, TRUE, 10, 25),
 array('Ransomware_Defender', TRUE, TRUE, 50, 100),
 array('Infrastructure_Checkup', TRUE, TRUE, 25, 50),
 array('Resource_Monitor', TRUE, TRUE, 25, 50),
 array('Storage_Monitor', TRUE, TRUE, 25, 50),
 array('Accessibility_Tools_Defender', TRUE, TRUE, 50, 100),
 array('Remote_Executor', TRUE, TRUE, 50, 100) );
// / ------------------------------ 