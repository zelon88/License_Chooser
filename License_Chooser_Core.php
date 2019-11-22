<!DOCTYPE HTML>
<?php
// / -----------------------------------------------------------------------------------
// / APPLICATION INFORMATION ...
// / LicenseChooser, Copyright on 9/3/2019 by Justin Grimes, www.github.com/zelon88
// / 
// / LICENSE INFORMATION ...
// / This project is protected by the GNU GPLv3 Open-Source license.
// / 
// / APPLICATION DESCRIPTION ...
// / This application is designed to provide a way for users to evaluate licensing options 
// / for HonestRepair software products.
// / 
// / HARDWARE REQUIREMENTS ... 
// / This application requires at least a Raspberry Pi Model B+ or greater.
// / This application will run on just about any x86 or x64 computer.
// / 
// / DEPENDENCY REQUIREMENTS ... 
// / This application requires Debian Linux, Apache 2.4, PHP 7.0+.
// / -----------------------------------------------------------------------------------

// / -----------------------------------------------------------------------------------
// / The following code will load required config files.
if (!file_exists('config.php')) die ('ERROR!!! License_Chooser1, Cannot process the License Chooser Configuration file (config.php)!'.PHP_EOL.'<br />'); 
else require_once ('config.php'); 
// / -----------------------------------------------------------------------------------

// / -----------------------------------------------------------------------------------
// / The following code defined variables for the session.
$Version = 'v1.0';
$bsdAvailable = $mitAvailable = $availableLicensesEcho = FALSE;
$bsdEcho = "<p>This software is not currently available with a BSD License, but keep checking back! Special licensing may also be available upon request.</p>";
$mitEcho = "<p>This software is not currently available with an MIT License, but keep checking back! Special licensing may also be available upon request.</p>";
// / -----------------------------------------------------------------------------------

// / -----------------------------------------------------------------------------------
// / The following code is triggered when a user submits a License_Chooser query.
if (isset($_POST['LicenseSubmit'])) { 
    foreach ($applicationChoices as $key=>$applicationChoice) { 
      if ($applicationChoice[0] == $_POST['ApplicationChoices']) {
        $chosenApplication = $applicationChoice[0];
        $bsdAvailable = $applicationChoice[1];
        $mitAvailable = $applicationChoice[2];
        $bsdPrice = $applicationChoice[3];
        $mitPrice = $applicationChoice[4]; } } }
// / -----------------------------------------------------------------------------------

// / -----------------------------------------------------------------------------------
// / Set some GUI specific variables with the results gathered from above.
$availableLicensesEcho = "No Alternate Licenses Available!";
if ($bsdAvailable) { 
  $bsdEcho = "<p>This software is available with a <strong>BSD-3 Clause License</strong>! <a href='https://opensource.org/licenses/MIT'>(Learn More...)</a></p><p><strong>Price:  <u>$".$bsdPrice.".00</u></strong></p><p><strong>Duration:  LIFETIME</strong></p>";
  $availableLicensesEcho = "\"BSD 3-Clause\""; }
if ($mitAvailable) { 
  $mitEcho = "<p>This software is available with an <strong>MIT License</strong>! <a href='https://opensource.org/licenses/BSD-3-Clause'>(Learn More...)</a></p><p><strong>Price:  <u>$".$mitPrice.".00</u></strong></p><p><strong>Duration:  LIFETIME</strong></p>";
  $availableLicensesEcho = "\"MIT\""; }
if ($bsdAvailable and $mitAvailable) $availableLicensesEcho = "\"BSD 3-Clause\" & \"MIT\"";
// / -----------------------------------------------------------------------------------

// / -----------------------------------------------------------------------------------
// / The following code loads the GUI.
if (isset($_POST['LicenseSubmit'])) require_once('License_Chooser_UI-2.php'); 
if (!isset($_POST['LicenseSubmit'])) require_once('License_Chooser_UI-1.php'); 
// / -----------------------------------------------------------------------------------
?>