<form method="post" action="<?php admin_url( 'options-general.php?page='.OPICIFH_Page_SLUG ); ?>">
<?php
	echo wp_nonce_field( "edc-settings-page" ); 
	
	$IFHHtmlHelper = new html_ifh_helper();
	$IFHHtmlHelper->opic_admin_tabs();
	$IFHHtmlHelper->MainContent($mainViewFile);
?>
   <p class="submit" style="clear: both;">
      <input type="submit" name="Submit"  class="button-primary" value="<?php echo $IFHHtmlHelper->getLang('btn-updatesetting') ?>" />
      <input type="hidden" name="ilc-settings-submit" value="Y" />
   </p>
</form>