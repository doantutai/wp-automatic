<?php
/**
 * Cron file process all or single campaign
 *  
 */

// Verify valid ID
if ( isset($_GET ['id']) ){
	
	// Integer value from id
	$id = intval ( $_GET ['id'] );
	
	if ( ! is_int ( $id ))  exit ();
	
} else {
	
	$id = false;
	  echo '<strong>Welcome</strong> to wordpress automatic cron job...';
	
}


// Inistantiate campaign processor class
require_once 'campaignsProcessor.php'; 

$CampaignProcessor = new CampaignProcessor() ;

// Trigger Processing
$CampaignProcessor->process_campaigns($id);

?>
