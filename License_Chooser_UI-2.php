<?php include_once('header.php'); ?>

<div style="text-align:center; float:center;">
  <h1>Available Licenses</h1>

  <h3><?php echo $availableLicensesEcho; ?></h3>
</div>

<div style="text-align:left; float:center;">
  <br />
  <hr />
  <?php echo $bsdEcho; ?>
  <p><a href="<?php echo $CFURL; ?>">Request This License</a></p>

  <br />
  <hr />
  <?php echo $mitEcho; ?>
  <p><a href="<?php echo $CFURL; ?>">Request This License</a></p>

  <br />
  <hr />
</div>

<div style="text-align:center; float:center;">
  <p>Visit our <a href="<?php echo $CFURL; ?>"><strong>Contact Form</strong></a> to request a license for this software! We will send you an invoice.</p>
</div>

<?php include_once('footer.php'); ?>