<?php
function defaultModuleMetaDataConfiguration($postId, $service){
	
	$defaultContent	= "Content";
	
	$insertedData[] = array(
		'`post_id`' 		=> $postId, 
		'`service`' 		=> $service, 
		'`vendor_id`' 		=> Vendor::getId(), 
		'`key`' 			=> "poll_id", 
		'`value`' 			=> "", 
		'`content_type`' 	=> "text",
		'`cat_id`' 			=> "3",
		'`description`' 	=> "BU product", 
		'`order`' 			=> 1, 
		'`show`' 			=> 1, 
	);
	
	$insertedData[] = array(
		'`post_id`' 		=> $postId, 
		'`service`' 		=> $service, 
		'`vendor_id`' 		=> Vendor::getId(), 
		'`key`' 			=> "health", 
		'`value`' 			=> $defaultContent, 
		'`content_type`' 	=> "content",
		'`cat_id`' 			=> "3",
		'`description`' 	=> "GF product", 
		'`order`' 			=> 1, 
		'`show`' 			=> 1, 
	);
	
	$insertedData[] = array(
		'`post_id`' 		=> $postId, 
		'`service`' 		=> $service, 
		'`vendor_id`' 		=> Vendor::getId(), 
		'`key`' 			=> "medical", 
		'`value`' 			=> $defaultContent, 
		'`content_type`' 	=> "content",
		'`cat_id`' 			=> "3",
		'`description`' 	=> "DD product", 
		'`order`' 			=> 1, 
		'`show`' 			=> 1, 
	);
	
	$insertedData[] = array(
		'`post_id`' 		=> $postId, 
		'`service`' 		=> $service, 
		'`vendor_id`' 		=> Vendor::getId(), 
		'`key`' 			=> "about", 
		'`value`' 			=> $defaultContent, 
		'`content_type`' 	=> "content",
		'`cat_id`' 			=> "3",
		'`description`' 	=> "LV product", 
		'`order`' 			=> 1, 
		'`show`' 			=> 1, 
	);
	
	
	
	return $insertedData;
	
}