<?php include_once('header.php'); ?>

<div style="text-align:center; float:center;">

  <form enctype='multipart/form-data' method='POST' action="License_Chooser_Core.php" name='LicenseChooser' id='LicenseChooser'>
    
    <p>The following is a list of software that you can obtain alternate licensing for.</p>

    <select name='ApplicationChoices' id='ApplicationChoices'>
      <option title='Select Software...' value='NONE'>Select Software...</option>
      <option title='HRCloud2' value='HRCloud2'>HRCloud2</option>
      <option title='HRCloud2-App-Pack (zelon88&#039;s Apps Only)' value='HRCloud2-App-Pack'>HRCloud2-App-Pack (zelon88&#039;s Apps Only)</option>
      <option title='HRCloud2' value='HRCloud2'>HRConvert2</option>
      <option title='HRScan2' value='HRScan2'>HRScan2</option>
      <option title='HRAI' value='HRAI'>HRAI</option>
      <option title='xPress Compression' value='xPress'>xPress Compression</option>
      <option title='Re-Limiter' value='Re-Limiter'>Re-Limiter</option>
      <option title='Workstation_USB_Monitor' value='Workstation_USB_Monitor'>Workstation_USB_Monitor</option>
      <option title='Ransomware_Defender' value='Ransomware_Defender'>Ransomware_Defender</option>
      <option title='Infrastructure_Checkup' value='Infrastructure_Checkup'>Infrastructure_Checkup</option>
      <option title='Resource_Monitor' value='Resource_Monitor'>Resource_Monitor</option>
      <option title='Storage_Monitor' value='Storage_Monitor'>Storage_Monitor</option>
      <option title='Accessibility_Tools_Defender' value='Accessibility_Tools_Defender'>Accessibility_Tools_Defender</option>
      <option title='Remote_Executor' value='Remote_Executor'>Remote_Executor</option>
      <option title='Registry_Monitor' value='Registry_Monitor'>Registry_Monitor</option>
      <option title='ScanCore' value='ScanCore'>ScanCore</option>
      <option title='Sharer' value='Sharer'>Sharer</option>
    </select>

    <select name='LicenseChoices' id='LicenseChoices'>
      <option title='Select License...' value='NONE'>Select License...</option>
      <option title='BSD 3-Clause' value='BSD3'>BSD 3-Clause</option>
      <option title='MIT' value='MIT'>MIT</option>
    </select>

    <input type='submit' name='LicenseSubmit' id='LicenseSubmit' value='See Pricing & Availability'/>

  </form>

</div>

<?php include_once('footer.php'); ?>